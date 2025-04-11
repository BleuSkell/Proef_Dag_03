<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class PackageOption extends Model
{
    /** @use HasFactory<\Database\Factories\PackageOptionFactory> */
    use HasFactory;

    protected $table = 'package_options';

    protected $fillable = [
        'Name',
        'Is_Active',
        'Comment',
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
