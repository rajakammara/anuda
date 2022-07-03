<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_images = Gallery::paginate(10);
        return view('admin.gallery.gallery', compact('gallery_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.addimage');
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
            "imagefile" => "required|mimes:jpg,png,jpeg|max:5000"
        ], [
            "title.required" => "Please enter Image Title",
            "imagefile.required" => "Please upload GO copy"
        ]);
        if ($request->hasFile('imagefile')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('imagefile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagefile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'gallery_' . $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('imagefile')->storeAs('public/uploads/', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        $gallery = new Gallery();
        $gallery->title = $request->get('title');
        $gallery->description = $request->get('imagedesc');
        $gallery->filelink = $fileNameToStore;
        $gallery->save();

        return redirect()->route('admin-gallery.index')->with("status", "Image Uploaded Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        Storage::delete('public/uploads/' . $gallery->filelink);
        $status = $gallery->delete();

        if ($status) {
            return redirect()->route('admin-gallery.index')->with("status", "Deleted Successfully");
        } else {
            return redirect()->route('admin-gallery.index')->with("status", "An error Occured while deleting");
        }
    }
}
