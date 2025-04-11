<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePerson extends Model
{
    /** @use HasFactory<\Database\Factories\TypePersonFactory> */
    use HasFactory;

    protected $table = 'type_people';

    protected $fillable = [
        'Name',
        'Is_Active',
        'Comment',
    ];

    public function person()
    {
        return $this->hasOne(Person::class);
    }
}
