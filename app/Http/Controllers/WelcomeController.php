<?php

namespace App\Http\Controllers;



class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $name = 'rmz';
        return view('welcome',compact('name'));
    }

}
