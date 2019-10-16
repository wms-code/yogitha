<?php

namespace App\Http\Controllers\Master;

use App\Model\Master\SetPartyRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetPartyRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $setPartyRate= SetPartyRate::getall();
       // $items= Items::orderBy('It_Name','asc')->with(['group','unit'])->get();
        return view('setpartyrate.list',compact('setPartyRate'));
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
    public function update(Request $request)
    {
        

        foreach($request as $key => $n ) {
            $arrData[] = array("lastname"=>$pty_code[$key], "name"=>$PerGramRate[$key]);
            }

        
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
