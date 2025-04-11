<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    protected $table = 'reserveringen';

    public function uitslagen()
    {
        return $this->hasMany(Uitslag::class, 'reservering_id', 'id');
    }
}
