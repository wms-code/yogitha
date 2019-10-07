<?php

namespace App\Http\Controllers;

use App\Model\ItemsGroup;
use Illuminate\Http\Request;

class ItemsGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $itemsGroup= ItemsGroup::all();
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
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ItemsGroup $itemsGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemsGroup $itemsGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemsGroup $itemsGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemsGroup $itemsGroup)
    {
        //
    }
}
