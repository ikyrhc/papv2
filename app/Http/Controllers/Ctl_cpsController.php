<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ctl_cps;

class Ctl_cpsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	/*  rhc controlador de cps para ver 1 solo cp*/
	
	/**
     * mostrar los datos de, base al cp buscado.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCps(Request $request, $cp)
    {
         if($request->ajax()){
			 $cps = Ctl_cps::cp($cp);
			 return response()->json($cps);
		 }
		 
		 $cp1 = Cps::find($cp);
                return \View::make('update',compact('cp1'));
    }
}
