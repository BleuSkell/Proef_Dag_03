<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uitslag extends Model
{
    use HasFactory;

    // Als de tabelnaam niet automatisch kan worden afgeleid, kun je de naam handmatig aangeven
    protected $table = 'uitslagen';  // Als de tabel 'uitslagen' heet

    // Relaties
    public function reservering()
    {
        return $this->belongsTo(Reservering::class);
    }

    public function persoon()
    {
        return $this->belongsTo(Persoon::class);
    }

    public function spel()
    {
        return $this->belongsTo(Spel::class);
    }
}
