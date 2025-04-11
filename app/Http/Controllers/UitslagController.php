<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uitslag;

class UitslagController extends Controller
{
    public function index(Request $request)
    {
        $selectedDate = $request->input('date');

        if ($selectedDate) {
            $uitslagen = Uitslag::with(['reservering', 'persoon', 'spel'])
                ->whereHas('reservering', function ($query) use ($selectedDate) {
                    $query->whereDate('created_at', $selectedDate);
                })
                ->orderByDesc('aantalpunten')
                ->get();

            if ($uitslagen->isEmpty()) {
                return back()->with('message', 'Er is geen uitslag beschikbaar voor deze geselecteerde datum');
            }

            return view('uitslagen.index', compact('uitslagen', 'selectedDate'));
        }

        return view('uitslagen.index', ['uitslagen' => collect(), 'selectedDate' => null]);
    }
}
