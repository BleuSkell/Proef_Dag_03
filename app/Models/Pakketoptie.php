<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pakketoptie extends Model
{
    protected $table = 'pakketoptie';

    protected $fillable = [
        'naam',
    ];
    
    public function reserveringen()
    {
        return $this->hasMany(Reservering::class);
    }
}
