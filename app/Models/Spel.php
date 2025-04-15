<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Persoon;
use App\Models\Reservering;
use App\Models\Uitslag;

class Spel extends Model
{
    protected $table = 'spellen'; // Zorg ervoor dat de juiste tabelnaam wordt gebruikt

    public function persoon() {
        return $this->belongsTo(Persoon::class);
    }
    
    public function reservering() {
        return $this->belongsTo(Reservering::class);
    }
    
    public function uitslag() {
        return $this->hasOne(Uitslag::class);
    }
}
