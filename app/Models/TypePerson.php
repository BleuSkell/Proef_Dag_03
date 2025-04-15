<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class TypePerson extends Model
{
    /** @use HasFactory<\Database\Factories\TypePersonFactory> */
    use HasFactory;

    // Zet $timestamps op false om timestamps (created_at, updated_at) niet te gebruiken
    public $timestamps = false;

    protected $table = 'type_people'; // Laravel expects 'type_persons' by default

    protected $fillable = [
        'Name',
        'IsActief',
        'Opmerking',
        'DatumAangemaakt',
        'DatumGewijzigd',
        'CreatedAt',
        'UpdatedAt',
    ];

    public function people()
    {
        return $this->hasOne(Person::class, 'TypePerson_Id');  
    }
}
