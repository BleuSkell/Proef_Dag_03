<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservering;
use App\Models\Spel;

class Persoon extends Model
{   
    protected $table = 'personen'; // Zorg ervoor dat de juiste tabelnaam wordt gebruikt

    public function reserveringen() {
        return $this->hasMany(Reservering::class);
    }

    public function spellen() {
        return $this->hasMany(Spel::class);
    }
}
