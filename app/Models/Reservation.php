<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Lane;
use App\Models\OpeningTime;
use App\Models\PackageOption;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'Person_id',
        'OpeningTime_id',
        'Lane_id',
        'PackageOption_id',
        'Date',
        'TotalHours',
        'StartTime',
        'EndTime',
        'AdultsAmount',
        'ChildrenAmount',
        'Is_Active',
        'Comment',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'PersonId');
    }

    public function lane()
    {
        return $this->belongsTo(Lane::class, 'LaneId');
    }

    public function openingTime()
    {
        return $this->belongsTo(OpeningTime::class, 'OpeningTimeId');
    }

    public function packageOption()
    {
        return $this->belongsTo(PackageOption::class, 'PackageOptionId');
    }
}
