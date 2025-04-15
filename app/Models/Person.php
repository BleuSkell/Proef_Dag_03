<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypePerson;
use App\Models\User;
use App\Models\Contact;
use App\Models\Reservation;
use App\Models\Spel;

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
        'TypePerson_Id',
        'CreatedAt',
        'UpdatedAt',
    ];

    public function typePerson()
    {
        return $this->belongsTo(TypePerson::class, 'TypePerson_Id');  
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'Person_id');  
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'Person_id', 'id');  
    }

    public function user()
    {
        return $this->hasOne(User::class, 'Person_id');  
    }

    public function spellen()
    {
        return $this->hasMany(Spel::class, 'persoon_id', 'id');  
    }
}
