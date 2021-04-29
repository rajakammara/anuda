<?php

namespace App\Http\Controllers;

use App\Models\Gos;
use Illuminate\Http\Request;

class GosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gos = Gos::all();        
        return view('admin.gos',compact('gos'));
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
        //
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
    public function edit(Gos $gos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gos  $gos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gos $gos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gos  $gos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gos $gos)
    {
        //
    }
}
