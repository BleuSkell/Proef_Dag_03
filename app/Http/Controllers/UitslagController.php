<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uitslag;

class UitslagController extends Controller
{
    public function index(Request $request)
    {   
        $selectedDate = $request->input('date');

        // Haal uitslagen op, filter op datum indien geselecteerd
        $uitslagen = Uitslag::with(['spel.reservation.person'])
            ->when($selectedDate, function ($query, $selectedDate) {
                $query->whereHas('spel.reservation', function ($query) use ($selectedDate) {
                    $query->where('Date', $selectedDate);
                });
            })
            ->get();

        return view('uitslagen.index', compact('uitslagen', 'selectedDate'));
    }
}
