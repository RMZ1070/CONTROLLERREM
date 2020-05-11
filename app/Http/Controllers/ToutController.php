<?php

namespace App\Http\Controllers;

use App\Tout;
use Illuminate\Http\Request;

class ToutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tout/index', compact('tout'));
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
     * @param  \App\Tout  $tout
     * @return \Illuminate\Http\Response
     */
    public function show(Tout $tout)
    {

        return view('tout/show', compact('tout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tout  $tout
     * @return \Illuminate\Http\Response
     */
    public function edit(Tout $tout)
    {
  
        return view('tout/edit', compact('tout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tout  $tout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tout $tout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tout  $tout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tout $tout)
    {
        //
    }
}
