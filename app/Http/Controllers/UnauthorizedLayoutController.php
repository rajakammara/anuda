<?php

namespace App\Http\Controllers;

use App\Models\UnauthorizedLayout;
use Illuminate\Http\Request;

class UnauthorizedLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uals = UnauthorizedLayout::paginate(10);        
        return view('admin.ual.uals', compact('uals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.ual.addual');
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
            "mandal" => "required",
            "village" => "required",
            "owner" => "required",
            "surveyno" => "required",
            "extent" => "required",

        ], [
            "mandal.required" => "Please enter Mandal Name",
            "village.required" => "Please Select Village Type",
            "owner.required" => "Please enter Owner Name",
            "surveyno.required" => "Please enter Survey no.s",
            "extent.required" => "Please enter Extent",
        ]);
        $ual = new UnauthorizedLayout();
        $ual->mandal = $request->get('mandal');
        $ual->village = $request->get('village');
        $ual->owner = $request->get('owner');
        $ual->surveyno = $request->get('surveyno');
        $ual->extent = $request->get('extent');
        $ual->save();

        return redirect()->route('admin-uals.index')->with("status", "Unauthorized Layout Details Inserted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnauthorizedLayout  $unauthorizedLayout
     * @return \Illuminate\Http\Response
     */
    public function show(UnauthorizedLayout $unauthorizedLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnauthorizedLayout  $unauthorizedLayout
     * @return \Illuminate\Http\Response
     */
    public function edit(UnauthorizedLayout $unauthorizedLayout,$id)
    {
        $ual = UnauthorizedLayout::find($id);
        return view('admin.ual.editual', compact("ual"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnauthorizedLayout  $unauthorizedLayout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ual = UnauthorizedLayout::find($id);
        $request->validate([
            "mandal" => "required",
            "village" => "required",
            "owner" => "required",
            "surveyno" => "required",
            "extent" => "required",

        ], [
            "mandal.required" => "Please enter Mandal Name",
            "village.required" => "Please Select Village Type",
            "owner.required" => "Please enter Owner Name",
            "surveyno.required" => "Please enter Survey no.s",
            "extent.required" => "Please enter Extent",
        ]);
        
        $ual->mandal = $request->get('mandal');
        $ual->village = $request->get('village');
        $ual->owner = $request->get('owner');
        $ual->surveyno = $request->get('surveyno');
        $ual->extent = $request->get('extent');
        $ual->save();

        return redirect()->route('admin-uals.index')->with("status", "Unauthorized Layout Details Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnauthorizedLayout  $unauthorizedLayout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ual = UnauthorizedLayout::find($id);

        
        $status = $ual->delete();

        if ($status) {
            return redirect()->route('admin-uals.index')->with("status", "Deleted Successfully");
        } else {
            return redirect()->route('admin-uals.index')->with("status", "An error Occured while deleting");
        }
    }
}
