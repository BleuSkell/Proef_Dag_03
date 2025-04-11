<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {   
        $userId = auth()->user()->id; // haal het id van de ingelogde user op

        $reservations = DB::select('CALL sp_get_all_reservations_by_user_id(?)', [$userId]); // stuur de user id mee aan de sp

        return view('reservations.index', ['reservations' => $reservations]); // return de view met de reservations
    }

    public function edit()
    {
        return view('reservations.edit');
    }

    public function update()
    {
        //
    }
}
