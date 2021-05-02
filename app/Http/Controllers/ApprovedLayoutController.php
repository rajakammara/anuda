<?php

namespace App\Http\Controllers;

use App\Models\ApprovedLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApprovedLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apls = ApprovedLayout::paginate(10);
        return view('admin.apl.apls', compact('apls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apl.addapl');
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
            "village" => "required",
            "surveyno" => "required",
            "extent" => "required",
            "flpno" => "required",
            "plotnos" => "required",
            "proceedings" => "required|mimes:pdf|max:5000",
             "drawings" => "required|mimes:pdf|max:5000",
        ], [
            "village.required" => "Please enter Village",
            "surveyno.required" => "Please enter Survey No.s",
            "extent.required" => "Please enter Extent",
            "flpno.required" => "Please enter FLP Number",
            "plotnos.required" => "Please enter Mortgage Plot Nos.",
            "proceedings.required"=> "Proceddings required",
             "drawings.required"=> "Drawings required"
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
            $path = $request->file('proceedings')->storeAs('public/uploads/' , $fileNameToStore_proceeding);

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
            $path = $request->file('drawings')->storeAs('public/uploads/' , $fileNameToStore_drawing);

            // Delete old File
           // Storage::delete('public/uploads/' . $apl->drawings);
        } else {
            $fileNameToStore_drawing = "";
        }


        $apl = new ApprovedLayout;
        $apl->village = $request->get('village');
        $apl->surveyno = $request->get('surveyno');
        $apl->extent = $request->get('extent');
        $apl->flpno = $request->get('flpno');
        $apl->proceedings = $fileNameToStore_proceeding;
        $apl->drawings = $fileNameToStore_drawing;
        $apl->mortgageplotnos = $request->get('plotnos');
        $apl->save();

        return redirect()->route('admin-apls.index')->with("status", "Layout Details Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovedLayout  $approvedLayout
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovedLayout $approvedLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovedLayout  $approvedLayout
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apl = ApprovedLayout::find($id);
        return view('admin.apl.editapls', compact("apl"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApprovedLayout  $approvedLayout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $apl = ApprovedLayout::find($id);
        $request->validate([
            "village" => "required",
            "surveyno" => "required",
            "extent" => "required",
            "flpno" => "required",
            "plotnos" => "required",
            // "proceedings" => "required|mimes:pdf|max:5000",
            // "drawings" => "required|mimes:pdf|max:5000",
        ], [
            "village.required" => "Please enter Village",
            "surveyno.required" => "Please enter Survey No.s",
            "extent.required" => "Please enter Extent",
            "flpno.required" => "Please enter FLP Number",
            "plotnos.required" => "Please enter Mortgage Plot Nos.",
            // "proceedings.required"=> "Proceddings required",
            // "drawings.required"=> "Drawings required"
        ]);

        if ($request->hasFile('proceedings')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('proceedings')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('proceedings')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore_proceeding = 'go_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('proceedings')->storeAs('public/uploads/' , $fileNameToStore_proceeding);

            // Delete old File
            Storage::delete('public/uploads/' . $apl->proceedings);
        } else {
            $fileNameToStore_proceeding = $apl->proceedings;
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
            $path = $request->file('drawings')->storeAs('public/uploads/' , $fileNameToStore_drawing);

            // Delete old File
            Storage::delete('public/uploads/' . $apl->drawings);
        } else {
            $fileNameToStore_drawing = $apl->drawings;
        }


       
        $apl->village = $request->get('village');
        $apl->surveyno = $request->get('surveyno');
        $apl->extent = $request->get('extent');
        $apl->flpno = $request->get('flpno');
        $apl->proceedings = $fileNameToStore_proceeding;
        $apl->drawings = $fileNameToStore_drawing;
        $apl->mortgageplotnos = $request->get('plotnos');
        $apl->save();

        return redirect()->route('admin-apls.index')->with("status", "Layout Details Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApprovedLayout  $approvedLayout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apl = ApprovedLayout::find($id);

        Storage::delete('public/uploads/' . $apl->drawings);
        Storage::delete('public/uploads/' . $apl->proceedings);
        $status = $apl->delete();

        if ($status) {
            return redirect()->route('admin-apls.index')->with("status", "Deleted Successfully");
        } else {
            return redirect()->route('admin-apls.index')->with("status", "An error Occured while deleting");
        }
    }
}
