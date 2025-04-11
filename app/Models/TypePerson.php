<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\User;

=======
>>>>>>> feature-ReserveringBeheren

class TypePerson extends Model
{
    /** @use HasFactory<\Database\Factories\TypePersonFactory> */
    use HasFactory;

<<<<<<< HEAD
    // Zet $timestamps op false om timestamps (created_at, updated_at) niet te gebruiken
    public $timestamps = false;

    protected $table = 'type_people'; // Laravel expects 'type_persons' by default

    protected $fillable = [
        'Name',
        'IsActief',
        'Opmerking',
        'DatumAangemaakt',
        'DatumGewijzigd',
    ];

    public function people()
    {
        return $this->hasMany(Person::class, 'TypePerson_Id');  
=======
    protected $table = 'type_people';

    protected $fillable = [
        'Name',
        'Is_Active',
        'Comment',
    ];

    public function person()
    {
        return $this->hasOne(Person::class);
>>>>>>> feature-ReserveringBeheren
    }
}
