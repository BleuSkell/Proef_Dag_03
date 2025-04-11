<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uitslag;

class UitslagController extends Controller
{
    public function index(Request $request)
    {
        

        return view('uitslagen.index');
    }
}
