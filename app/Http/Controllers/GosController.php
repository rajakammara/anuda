<?php

namespace App\Http\Controllers;

use App\Models\Gos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gos = Gos::paginate(10);
        return view('admin.gos', compact('gos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addgo');
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
            "gonumber" => "required",
            "godesc" => "required",
            "gofile" => "required"
        ], [
            "gonumber.required" => "Please enter GO Number",
            "godesc.required" => "Please enter GO Description",
            "gofile.required" => "Please upload GO copy"
        ]);
        if ($request->hasFile('gofile')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('gofile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gofile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'go_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('gofile')->storeAs('public/uploads/', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        $go = new Gos;
        $go->gonumber = $request->get('gonumber');
        $go->description = $request->get('godesc');
        $go->filelink = $fileNameToStore;
        $go->save();

        return redirect()->route('admin-gos.index')->with("status", "File Uploaded Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gos  $gos
     * @return \Illuminate\Http\Response
     */
    public function show(Gos $gos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gos  $gos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $go = Gos::find($id);
        return view('admin.editgo', compact("go"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gos  $gos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $go = Gos::find($id);

        $request->validate([
            "gonumber" => "required",
            "godesc" => "required",
            //"gofile" => "required|mimes:pdf|max:5000"
        ], [
            "gonumber.required" => "Please enter GO Number",
            "godesc.required" => "Please enter GO Description",
            //"gofile.required" => "Please upload GO copy"
        ]);
        if ($request->hasFile('gofile')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('gofile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('gofile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'go_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('gofile')->storeAs('public/uploads/', $fileNameToStore);

            // Delete old File
            Storage::delete('public/uploads/' . $go->filelink);
        } else {
            $fileNameToStore = $go->filelink;
        }


        $go->gonumber = $request->get('gonumber');
        $go->description = $request->get('godesc');
        $go->filelink = $fileNameToStore;
        $go->save();

        return redirect()->route('admin-gos.index')->with("status", "Go Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gos  $gos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $go = Gos::find($id);

        Storage::delete('public/uploads/' . $go->filelink);
        $status = $go->delete();

        if ($status) {
            return redirect()->route('admin-gos.index')->with("status", "Deleted Successfully");
        } else {
            return redirect()->route('admin-gos.index')->with("status", "An error Occured while deleting");
        }
    }
}
