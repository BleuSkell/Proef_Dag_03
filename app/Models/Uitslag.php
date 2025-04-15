<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spel;

class Uitslag extends Model
{
    use HasFactory;

    protected $table = 'uitslagen';

    public function spel()
    {
        return $this->belongsTo(Spel::class, 'spel_id', 'id'); // Correct verwijzing naar Spel model
    }
}
