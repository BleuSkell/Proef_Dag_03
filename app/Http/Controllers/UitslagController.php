<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uitslag;  // Vergeet niet de Uitslag model in te voegen
use App\Models\Reservering;

class UitslagController extends Controller
{
    public function index(Request $request)
    {
        $selectedDate = $request->input('date');
    
        if ($selectedDate) {
            $uitslagen = Uitslag::with(['reservering', 'persoon', 'spel'])  // Eager loading voor relaties
                ->whereHas('reservering', function($query) use ($selectedDate) {
                    $query->whereDate('created_at', $selectedDate);
                })
                ->orderByDesc('aantalpunten')
                ->get();
            
            if ($uitslagen->isEmpty()) {
                return back()->with('message', 'Er is geen uitslag beschikbaar voor deze geselecteerde datum');
            }
    
            return view('uitslagen.index', compact('uitslagen', 'selectedDate'));
        } else {
            $uitslagen = Uitslag::with(['reservering', 'persoon', 'spel'])->orderByDesc('aantalpunten')->get();
            return view('uitslagen.index', compact('uitslagen'));
        }
    }
}