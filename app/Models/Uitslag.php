<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uitslag extends Model
{
    use HasFactory;

    protected $table = 'uitslagen';

    public function reservering()
    {
        return $this->belongsTo(Reservering::class, 'reservering_id', 'id');
    }
}
