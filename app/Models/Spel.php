<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spel extends Model
{
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
