<?php

namespace Tests\Unit;

use App\Models\Person;
use App\Models\Contact;
use App\Models\TypePerson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PersonTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_type_person_relationship()
    {
        // Maak een persoon aan
        $person = Person::factory()->create();

        // Controleer of de relatie correct is
        $this->assertInstanceOf(TypePerson::class, $person->typePerson);
        $this->assertEquals($typePerson->id, $person->typePerson->id);
    }

    /** @test */
    public function it_has_a_contacts_relationship()
    {
        // Maak een persoon aan en voeg contacten toe
        $person = Person::factory()->create();
        $contact = Contact::factory()->create(['Person_id' => $person->id]);

        // Controleer of de relatie werkt
        $this->assertInstanceOf(Contact::class, $person->contacts->first());
        $this->assertEquals($contact->id, $person->contacts->first()->id);
    }

    /** @test */
    public function it_sorts_customers_by_lastname()
    {
        // Maak een paar personen met achternamen
        $person1 = Person::factory()->create(['LastName' => 'Bakker']);
        $person2 = Person::factory()->create(['LastName' => 'Jansen']);
        $person3 = Person::factory()->create(['LastName' => 'De Vries']);

        // Haal alle personen op en sorteer ze op achternaam
        $sortedPersons = Person::orderBy('LastName')->get();

        // Controleer of de sortering correct is
        $this->assertEquals($person3->id, $sortedPersons[0]->id); // 'De Vries'
        $this->assertEquals($person1->id, $sortedPersons[1]->id); // 'Bakker'
        $this->assertEquals($person2->id, $sortedPersons[2]->id); // 'Jansen'
    }

    /** @test */
    public function it_has_a_person_relationship()
    {
        // Maak een persoon aan
        $person = Person::factory()->create();

        // Maak een contact aan en koppel het aan de persoon
        $contact = Contact::factory()->create(['Person_id' => $person->id]);

        // Controleer of de relatie correct is
        $this->assertInstanceOf(Person::class, $contact->person);  // Controleer of het Contact de juiste relatie heeft
        $this->assertEquals($person->id, $contact->person->id);    // Controleer of de IDs matchen
    }
}
