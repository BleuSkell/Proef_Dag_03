<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    // Zet $timestamps op false om timestamps (created_at, updated_at) niet te gebruiken
    public $timestamps = false;

    protected $table = 'contacts'; 

    protected $fillable = [
        'Person_id',
        'Mobile',
        'E_mail',
        'IsActief',
        'Opmerking',
        'DatumAangemaakt',
        'DatumGewijzigd',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'Person_id');  
    }
}