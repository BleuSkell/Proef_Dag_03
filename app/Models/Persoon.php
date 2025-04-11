<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    public function reserveringen() {
    return $this->hasMany(Reservering::class);
}

public function spellen() {
    return $this->hasMany(Spel::class);
}

}
