<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spel extends Model
{
    use HasFactory;

    // Relatie
    public function uitslagen()
    {
        return $this->hasMany(Uitslag::class);
    }
}
