<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index');
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
