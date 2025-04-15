<?php

namespace App\Http\Controllers;

use App\Models\Reservering;
use App\Models\Pakketoptie;
use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    public function index()
    {
        $reserveringen = Reservering::with('pakketoptie')->get();
        return view('reserveringen.index', compact('reserveringen'));
    }

    public function edit($id)
    {
        $reservering = Reservering::findOrFail($id);
        $pakketopties = Pakketoptie::all();
        
        return view('reserveringen.edit', compact('reservering', 'pakketopties'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pakketoptie_id' => 'required|exists:pakketoptie,id',
        ]);

        $reservering = Reservering::findOrFail($id);
        $reservering->pakketoptie_id = $request->pakketoptie_id;
        $reservering->save();

        return redirect()->route('reserveringen.index')->with('success', 'Het pakketoptie is succesvol gewijzigd.');
    }
}
