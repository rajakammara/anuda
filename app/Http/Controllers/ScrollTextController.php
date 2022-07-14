<?php

namespace App\Http\Controllers;

use App\Models\ScrollText;
use Illuminate\Http\Request;

class ScrollTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scrollText = ScrollText::all();
        return view('admin.scrolltext.scrolltext', compact('scrollText'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScrollText  $scrollText
     * @return \Illuminate\Http\Response
     */
    public function show(ScrollText $scrollText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScrollText  $scrollText
     * @return \Illuminate\Http\Response
     */
    public function edit(ScrollText $scrollText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScrollText  $scrollText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $scrollText = ScrollText::find($id);
        $request->validate([
            "scrolling_text" => "required",

        ], [
            "scrolling_text.required" => "Please enter GO Number",
        ]);

        $scrollText->scrolling_text = $request->get("scrolling_text");
        $scrollText->save();
        return redirect()->route('admin-scrolltext.index')->with("status", "Status Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScrollText  $scrollText
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScrollText $scrollText)
    {
        //
    }
}
