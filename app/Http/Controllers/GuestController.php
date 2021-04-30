<?php

namespace App\Http\Controllers;

use App\Models\Gos;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $gosval = Gos::all();
        //dd($gosval);
        return view('gos', compact('gosval'));
    }
}
