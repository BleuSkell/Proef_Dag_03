<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Contact;
use App\Models\TypePerson;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        return view('people.index');
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