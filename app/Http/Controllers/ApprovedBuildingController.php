<?php

namespace App\Http\Controllers;

use App\Models\ApprovedBuilding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ApprovedBuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abls = ApprovedBuilding::paginate(10);
        return view('admin.abl.abls', compact('abls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abl.addabl');
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
            "locality" => "required",
            "mandal" => "required",
            "surveyno" => "required",
            "extent" => "required",
            "permitno" => "required",            
            "proceedings" => "required|mimes:pdf|max:5000",
            "drawings" => "required|mimes:pdf|max:5000",
        ], [
            "locality.required" => "Please enter Locality",
            "mandal.required" => "Please enter Mandal",
            "surveyno.required" => "Please enter Survey No.s",
            "extent.required" => "Please enter Extent",
            "permitno.required" => "Please enter FLP Number",            
            "proceedings.required" => "Proceddings required",
            "drawings.required" => "Drawings required"
        ]);

        if ($request->hasFile('proceedings')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('proceedings')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('proceedings')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore_proceeding = 'proceedings_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('proceedings')->storeAs('public/uploads/', $fileNameToStore_proceeding);

            // Delete old File
            // Storage::delete('public/uploads/' . $apl->proceedings);
        } else {
            $fileNameToStore_proceeding = "";
        }

        if ($request->hasFile('drawings')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('drawings')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('drawings')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore_drawing = 'drawings_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('drawings')->storeAs('public/uploads/', $fileNameToStore_drawing);

            // Delete old File
            // Storage::delete('public/uploads/' . $apl->drawings);
        } else {
            $fileNameToStore_drawing = "";
        }


        $abl = new ApprovedBuilding();
        $abl->location = $request->get('locality');
        $abl->mandal = $request->get('mandal');
        $abl->surveyno = $request->get('surveyno');
        $abl->extent = $request->get('extent');
        $abl->permitno = $request->get('permitno');
        $abl->proceedings = $fileNameToStore_proceeding;
        $abl->drawings = $fileNameToStore_drawing;        
        $abl->save();

        return redirect()->route('admin-abls.index')->with("status", "Building Details Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovedBuilding  $approvedBuilding
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovedBuilding $approvedBuilding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovedBuilding  $approvedBuilding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abl = ApprovedBuilding::find($id);
        return view('admin.abl.editabls', compact("abl"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApprovedBuilding  $approvedBuilding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "locality" => "required",
            "mandal" => "required",
            "surveyno" => "required",
            "extent" => "required",
            "permitno" => "required",
            //"proceedings" => "required|mimes:pdf|max:5000",
            //"drawings" => "required|mimes:pdf|max:5000",
        ], [
            "locality.required" => "Please enter Locality",
            "mandal.required" => "Please enter Mandal",
            "surveyno.required" => "Please enter Survey No.s",
            "extent.required" => "Please enter Extent",
            "permitno.required" => "Please enter FLP Number",
            "proceedings.required" => "Proceddings required",
            "drawings.required" => "Drawings required"
        ]);

        $abl =  ApprovedBuilding::find($id);
        if ($request->hasFile('proceedings')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('proceedings')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('proceedings')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore_proceeding = 'proceedings_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('proceedings')->storeAs('public/uploads/', $fileNameToStore_proceeding);

            // Delete old File
             Storage::delete('public/uploads/' . $abl->proceedings);
        } else {
            $fileNameToStore_proceeding = $abl->proceedings;
        }

        if ($request->hasFile('drawings')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('drawings')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('drawings')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore_drawing = 'drawings_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('drawings')->storeAs('public/uploads/', $fileNameToStore_drawing);

            // Delete old File
             Storage::delete('public/uploads/' . $abl->drawings);
        } else {
            $fileNameToStore_drawing = $abl->drawings;
        }


       
        $abl->location = $request->get('locality');
        $abl->mandal = $request->get('mandal');
        $abl->surveyno = $request->get('surveyno');
        $abl->extent = $request->get('extent');
        $abl->permitno = $request->get('permitno');
        $abl->proceedings = $fileNameToStore_proceeding;
        $abl->drawings = $fileNameToStore_drawing;
        $abl->save();

        return redirect()->route('admin-abls.index')->with("status", "Building Details Added Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApprovedBuilding  $approvedBuilding
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abl = ApprovedBuilding::find($id);

        Storage::delete('public/uploads/' . $abl->drawings);
        Storage::delete('public/uploads/' . $abl->proceedings);
        $status = $abl->delete();

        if ($status) {
            return redirect()->route('admin-abls.index')->with("status", "Deleted Successfully");
        } else {
            return redirect()->route('admin-abls.index')->with("status", "An error Occured while deleting");
        }
    }
}
