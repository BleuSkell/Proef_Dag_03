<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spel;
use App\Models\Persoon;

class Reservering extends Model
{
    use HasFactory;

    protected $table = 'reserveringen';

    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'persoon_id', 'id');
    }

    public function spellen()
    {
        return $this->hasMany(Spel::class, 'spel_id', 'id');
    }
}
