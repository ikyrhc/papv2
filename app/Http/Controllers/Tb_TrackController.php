<?php

namespace App\Http\Controllers;

use App\Tb_track;
use Illuminate\Http\Request;

class Tb_TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tracks = tb_track::all();	//Esta Variable guarda todos los registros en la Tabla
		
        return view('track.trackapp',compact('tracks'));
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
     * @param  \App\Tb_track  $tb_track
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_track $tb_track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tb_track  $tb_track
     * @return \Illuminate\Http\Response
     */
    public function edit(Tb_track $tb_track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tb_track  $tb_track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tb_track $tb_track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tb_track  $tb_track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tb_track $tb_track)
    {
        //
    }
}
