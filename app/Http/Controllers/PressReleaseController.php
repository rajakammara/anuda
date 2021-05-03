<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PressReleaseController extends Controller
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

        $news = new PressRelease;
        $news->title = $request->get('title');
        $news->description = $request->get('description');
        $news->filelink = $fileNameToStore;
        $news->save();

        return redirect()->route('dashboard')->with("status_news", "Press Release Inserted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function show(PressRelease $pressRelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function edit(PressRelease $pressRelease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PressRelease $pressRelease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = PressRelease::find($id);

        Storage::delete('public/uploads/' . $news->filelink);
        $status = $news->delete();

        if ($status) {
            return redirect()->route('dashboard')->with("status", "News item Deleted Successfully");
        } else {
            return redirect()->route('dashboard')->with("status", "An error Occured while deleting");
        }
    }
}
