<?php

namespace App\Http\Controllers;

use App\Models\LatestUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class LatestUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "title" => "required",
            //"godesc" => "required",
            "filelink" => "mimes:pdf|max:5000"
        ], [
            "title.required" => "Please enter GO Number",
            "description.required" => "Please enter GO Description",
            "filelink.max" => "Maximum File size allowed 5MB only"
        ]);
        if ($request->hasFile('filelink')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('filelink')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('filelink')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'updates_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('filelink')->storeAs('public/uploads/', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        $update = new LatestUpdate;
        $update->title = $request->get('title');
        $update->description = $request->get('description');
        $update->filelink = $fileNameToStore;
        $update->save();

        return redirect()->route('dashboard')->with("status", "Details Inserted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LatestUpdate  $latestUpdate
     * @return \Illuminate\Http\Response
     */
    public function show(LatestUpdate $latestUpdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LatestUpdate  $latestUpdate
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestUpdate $latestUpdate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestUpdate  $latestUpdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestUpdate $latestUpdate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LatestUpdate  $latestUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update = LatestUpdate::find($id);

        Storage::delete('public/uploads/' . $update->filelink);
        $status = $update->delete();

        if ($status) {
            return redirect()->route('dashboard')->with("status", "Updates Deleted Successfully");
        } else {
            return redirect()->route('dashboard')->with("status", "An error Occured while deleting");
        }
    }
}
