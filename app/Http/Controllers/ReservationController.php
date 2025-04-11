<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index(Request $request)
    {   
        $userId = auth()->user()->id; // haal het id van de ingelogde user op
        $date = $request->input('date'); // haal de date op uit de request

        if ($date) {
            $reservations = DB::select('CALL sp_get_all_reservations_by_user_id(?, ?)', [$userId, $date]); // stuur de userid en date mee aan de sp
        } else {
            $reservations = DB::select('CALL sp_get_all_reservations_by_user_id(?)', [$userId]); // stuur de user id mee aan de sp
        }

        return view('reservations.index', ['reservations' => $reservations, 'filterDate' => $date]); // return de view met de reservations en de filter date
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
