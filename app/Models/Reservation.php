<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Lane;
use App\Models\OpeningTime;
use App\Models\PackageOption;
use App\Models\Spel;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    // Geef aan dat de tabel geen timestamps heeft
    public $timestamps = false;

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
        return $this->belongsTo(Person::class, 'Person_Id', 'id');
    }

    public function lane()
    {
        return $this->belongsTo(Lane::class, 'Lane_Id');
    }

    public function openingTime()
    {
        return $this->belongsTo(OpeningTime::class, 'OpeningTime_Id');
    }

    public function packageOption()
    {
        return $this->belongsTo(PackageOption::class, 'PackageOption_Id');
    }

    public function spellen()
    {
        return $this->hasMany(Spel::class, 'reservering_id', 'id');
    }
}
