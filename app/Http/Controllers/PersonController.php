<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Models\Contact;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        // Haal de geselecteerde datum op of gebruik de huidige datum als standaard
        $selectedDate = $request->input('date', now()->format('Y-m-d'));

        // Controleer of de geselecteerde datum in de toekomst ligt
        if ($request->filled('date') && $selectedDate > now()->format('Y-m-d')) {
            return redirect()->back()->withErrors([
                'date' => 'Er is geen informatie beschikbaar voor deze geselecteerde datum'
            ]);
        }

        // Query de database en filter op de juiste kolom (DatumAangemaakt)
        $people = Person::with('contacts')
            ->when($request->filled('date'), function ($query) use ($selectedDate) {
                $query->whereDate('DatumAangemaakt', '<=', $selectedDate);
            })
            ->orderBy('LastName', 'asc') // Sorteer op achternaam
            ->get();

        // Controleer of er resultaten zijn voor de geselecteerde datum
        $message = $people->isEmpty() ? "Er is geen informatie beschikbaar voor deze geselecteerde datum." : null;

        // Retourneer de view met de gefilterde data
        return view('people.index', compact('people', 'selectedDate', 'message'));
    }

    public function show($id)
    {
        $person = Person::with('contacts', 'typePerson')->findOrFail($id);
        return view('people.show', compact('person'));
    }

    public function edit($id)
    {
        $person = Person::with('contacts', 'typePerson')->findOrFail($id);
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);
        
        // Update person details
        $person->FirstName = $request->input('FirstName');
        $person->Infix = $request->input('Infix');
        $person->LastName = $request->input('LastName');
        $person->CallName = $request->input('CallName');
        $person->IsAdult = $request->input('IsAdult');
        $person->IsActief = $request->has('IsActief') ? 1 : 0;
        $person->Opmerking = $request->input('Opmerking');
        $person->save();

        // Update or create contact info
        if ($person->contacts->count() > 0) {
            $contact = $person->contacts->first();
        } else {
            $contact = new Contact();
            $contact->Person_id = $person->id;
        }
        
        // Check if email is unique
        $email = $request->input('E_mail');
        $existingContact = Contact::where('E_mail', $email)
            ->where('Person_id', '!=', $person->id)
            ->first();
            
        if ($existingContact) {
            return redirect()->back()->withErrors(['E_mail' => 'Het e-mailadres is al in gebruik']);
        }
        
        $contact->Mobile = $request->input('Mobile');
        $contact->E_mail = $email;
        $contact->IsActief = $request->has('ContactIsActief') ? 1 : 0;
        $contact->save();

        return redirect()->route('people.index')->with('success', 'Klant is bijgewerkt!');
    }
}
