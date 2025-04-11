<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
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
=======
use App\Models\TypePeople;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'TypePerson_id',
        'FirstName',
        'LastName',
        'Email',
        'PhoneNumber',
        'Is_Active',
        'Comment',
    ];

    public function typePeople()
    {
        return $this->HasOne(TypePeople::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
>>>>>>> feature-ReserveringBeheren
