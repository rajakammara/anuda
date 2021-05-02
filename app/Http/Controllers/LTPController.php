<?php

namespace App\Http\Controllers;

use App\Models\LTP;
use Illuminate\Http\Request;

class LTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ltps = LTP::paginate(10);
        return view('admin.ltp.ltps', compact('ltps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ltp.addltp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "ltpname" => "required",
            "ltptype" => "required",
            "reg_number" => "required",
            "address" => "required",
            "contact" => "required",

        ], [
            "ltpname.required" => "Please enter LTP Name",
            "ltptype.required" => "Please Select LTP Type",
            "reg_number.required" => "Please enter Registraction Number",
            "address.required" => "Please enter Address",
            "contact.required" => "Please enter Contact details",
        ]);
        $ltp = new LTP;
        $ltp->name = $request->get('ltpname');
        $ltp->type = $request->get('ltptype');
        $ltp->reg_number = $request->get('reg_number');
        $ltp->address = $request->get('address');
        $ltp->phone = $request->get('contact');
        $ltp->save();

        return redirect()->route('admin-ltps.index')->with("status", "LTP Details Inserted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LTP  $lTP
     * @return \Illuminate\Http\Response
     */
    public function show(LTP $lTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LTP  $lTP
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ltp = LTP::find($id);
        return view('admin.ltp.editltp', compact("ltp"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LTP  $lTP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "ltpname" => "required",
            "ltptype" => "required",
            "reg_number" => "required",
            "address" => "required",
            "contact" => "required",

        ], [
            "ltpname.required" => "Please enter LTP Name",
            "ltptype.required" => "Please Select LTP Type",
            "reg_number.required" => "Please enter Registraction Number",
            "address.required" => "Please enter Address",
            "contact.required" => "Please enter Contact details",
        ]);
        $ltp = LTP::find($id);
        $ltp->name = $request->get('ltpname');
        $ltp->type = $request->get('ltptype');
        $ltp->reg_number = $request->get('reg_number');
        $ltp->address = $request->get('address');
        $ltp->phone = $request->get('contact');
        $ltp->save();

        return redirect()->route('admin-ltps.index')->with("status", "LTP Details Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LTP  $lTP
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ltp = LTP::find($id);

        
        $status = $ltp->delete();

        if ($status) {
            return redirect()->route('admin-ltps.index')->with("status", "Deleted Successfully");
        } else {
            return redirect()->route('admin-ltps.index')->with("status", "An error Occured while deleting");
        }
    }
}
