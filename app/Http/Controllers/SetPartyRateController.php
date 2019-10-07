<?php

namespace App\Http\Controllers;

use App\Model\SetPartyRate;
use Illuminate\Http\Request;

class SetPartyRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $setPartyRate= SetPartyRate::all();
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
     * @param  \App\Model\SetPartyRate  $setPartyRate
     * @return \Illuminate\Http\Response
     */
    public function show(SetPartyRate $setPartyRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SetPartyRate  $setPartyRate
     * @return \Illuminate\Http\Response
     */
    public function edit(SetPartyRate $setPartyRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SetPartyRate  $setPartyRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SetPartyRate $setPartyRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SetPartyRate  $setPartyRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(SetPartyRate $setPartyRate)
    {
        //
    }
}
