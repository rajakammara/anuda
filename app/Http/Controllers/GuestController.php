<?php

namespace App\Http\Controllers;

use App\Models\ApprovedBuilding;
use App\Models\ApprovedLayout;
use App\Models\Gos;
use App\Models\LTP;
use App\Models\UnauthorizedLayout;
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

    public function abls()
    {
        $abls = ApprovedBuilding::paginate(10);
        //dd($gosval);
        return view('approvedbuildings', compact('abls'));
    }

    public function uals()
    {
        $uals = UnauthorizedLayout::paginate(10);
        //dd($gosval);
        return view('unauthorized_layouts', compact('uals'));
    }

    public function ltps()
    {
        $ltps = LTP::paginate(10);
        //dd($gosval);
        return view('licensed_technical_persons', compact('ltps'));
    }
}
