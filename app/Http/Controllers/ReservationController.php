<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // gebruik Carbon om de datums te formatteren

class ReservationController extends Controller
{
    public function index(Request $request)
    {   
        $userId = auth()->user()->id; // haal het id van de ingelogde user op
        $filterDate = $request->input('filter_date'); // haal de filter date op uit de request

        // Als er geen datum is opgegeven, geef vandaag als default
        if (!$filterDate) {
            $filterDate = '2001-01-01'; // default date
        }

        $reservations = DB::select('CALL sp_get_all_reservations_by_user_id(?, ?)', [$userId, $filterDate]); // stuur de user id mee aan de sp

        // Formatteer de datums van yyyy-mm-dd naar dd-mm-yyyy
        foreach ($reservations as $reservation) {
            $reservation->Date = Carbon::parse($reservation->Date)->format('d-m-Y');
        }

        return view('reservations.index', ['reservations' => $reservations, 'filterDate' => $filterDate]); // return de view met de reservations en de filter date
    }

    public function edit($id)
    {
        // Haal reservatie op via stored procedure
        $reservation = DB::select('CALL sp_get_reservation_by_id(?)', [$id]);

        if (!$reservation || count($reservation) === 0) {
            abort(404, 'Reservatie niet gevonden');
        }

        // Geef eerste resultaat door aan de view
        return view('reservations.edit', ['reservation' => $reservation[0]]);
    }


    public function update()
    {
        //
    }
}
