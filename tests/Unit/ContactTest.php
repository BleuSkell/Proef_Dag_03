<?php

namespace Tests\Unit;

use App\Models\Contact;
use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_person_relationship()
    {
        // Maak een persoon aan
        $person = Person::factory()->create();
        // Maak een contact aan gekoppeld aan die persoon
        $contact = Contact::factory()->create(['Person_id' => $person->id]);

        // Controleer of het contact gekoppeld is aan de juiste persoon
        $this->assertInstanceOf(Person::class, $contact->person);
        $this->assertEquals($person->id, $contact->person->id);
    }

    /** @test */
    public function it_has_correct_fillable_attributes()
    {
        // Verkrijg de fillable attributen van het model Contact
        $fillable = (new Contact)->getFillable();
        
        $expectedFillable = [
            'Person_id',
            'Mobile',
            'E_mail',
            'IsActief',
            'Opmerking',
            'DatumAangemaakt',
            'DatumGewijzigd',
        ];

        // Vergelijk de fillable attributen met de verwachte
        $this->assertEquals($expectedFillable, $fillable);
    }
}
