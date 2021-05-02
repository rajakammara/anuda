<?php

namespace App\Http\Controllers;

use App\Models\ApprovedLayout;
use App\Models\Gos;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function gos()
    {
        $gosval = Gos::all();
        //dd($gosval);
        return view('gos', compact('gosval'));
    }

    public function apls()
    {
        $apls = ApprovedLayout::paginate(10);
        //dd($gosval);
        return view('approvedlayouts', compact('apls'));
    }
}
