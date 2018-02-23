<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function cuerpo(){
        return view('cuerpo');
        
    }

    public function menu(){
        return view('menu_general');
    }
}