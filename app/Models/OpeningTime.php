<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class OpeningTime extends Model
{
    /** @use HasFactory<\Database\Factories\OpeningTimeFactory> */
    use HasFactory;

    protected $table = 'opening_times';

    protected $fillable = [
        'DayName',
        'StartTime',
        'EndTime',
        'Is_Active',
        'Comment',
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
