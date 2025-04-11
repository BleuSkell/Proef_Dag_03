<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypePerson;
use App\Models\User;



class Person extends Model
{
    
    use HasFactory;

    // Zet $timestamps op false om timestamps (created_at, updated_at) niet te gebruiken
    public $timestamps = false;

    protected $table = 'people'; 

    protected $fillable = [
        'FirstName',
        'Infix',
        'LastName',
        'CallName',
        'IsAdult',
        'IsActief',
        'Opmerking',
        'DatumAangemaakt',
        'DatumGewijzigd',
        'TypePerson_Id', // Foreign key to TypePerson
    ];

    public function typePerson()
    {
        return $this->belongsTo(TypePerson::class, 'TypePerson_Id');  
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'Person_id');  
    }
}