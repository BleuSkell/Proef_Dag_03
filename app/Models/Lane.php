<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Lane extends Model
{
    /** @use HasFactory<\Database\Factories\LaneFactory> */
    use HasFactory;

    protected $table = 'lanes';

    protected $fillable = [
        'Number',
        'HasFence',
        'Is_Active',
        'Comment',
    ];

    public function reservation()
    {
        return $this->HasOne(Reservation::class);
    }
}
