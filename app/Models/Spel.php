<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Reservation;
use App\Models\Uitslag;

class Spel extends Model
{
    protected $table = 'spellen'; // Zorg ervoor dat de juiste tabelnaam wordt gebruikt

    public function person() {
        return $this->belongsTo(Person::class);
    }
    
    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
    
    public function uitslag() {
        return $this->hasOne(Uitslag::class);
    }
}
