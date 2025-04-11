<?php

namespace Tests\Unit;

use App\Models\TypePerson;
use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TypePersonTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_people_relationship()
    {
        $typePerson = TypePerson::factory()->create();
        $person = Person::factory()->create(['TypePerson_Id' => $typePerson->id]);

        $this->assertInstanceOf(Person::class, $typePerson->people->first());
        $this->assertEquals($person->id, $typePerson->people->first()->id);
    }

    /** @test */
    public function it_has_correct_fillable_attributes()
    {
        $fillable = (new TypePerson)->getFillable();
        $expectedFillable = [
            'Name',
            'IsAdult',
            'IsActief',
            'Opmerking',
            'DatumAangemaakt',
            'DatumGewijzigd',
        ];

        $this->assertEquals($expectedFillable, $fillable);
    }
}
