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
        $itemsGroup= ItemsGroup::orderBy('Group_Name','asc')->paginate(5);
        return view('itemsgroup.list',compact('itemsGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itemsgroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          ItemsGroup::addrec($request->all());
          return  redirect('itemsgroup');
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
