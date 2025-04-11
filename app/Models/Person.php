<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
