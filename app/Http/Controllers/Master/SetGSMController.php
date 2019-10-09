<?php

namespace App\Http\Controllers\Master;

use App\Model\SetGSM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetGSMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $setGSM= SetGSM::all();
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
     * @param  \App\Model\SetGSM  $setGSM
     * @return \Illuminate\Http\Response
     */
    public function show(SetGSM $setGSM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SetGSM  $setGSM
     * @return \Illuminate\Http\Response
     */
    public function edit(SetGSM $setGSM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SetGSM  $setGSM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SetGSM $setGSM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SetGSM  $setGSM
     * @return \Illuminate\Http\Response
     */
    public function destroy(SetGSM $setGSM)
    {
        //
    }
}
