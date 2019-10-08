<?php

namespace App\Http\Controllers;

use App\Model\Items;
use App\Model\Unit;
use App\Model\ItemsGroup;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items= Items::orderBy('It_Name','asc')->get();
        return view('items.list',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemsgroups=ItemsGroup::all();
        $units=Unit::all();
        return view('items.create',compact('itemsgroups','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Items::add($request->all());
        $msg = [
          'message' => 'Item  created successfully!' ];
        return  redirect('items')->with($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show($items)
    {
       return Items::where('It_Code',$items)->with(['group','unit'])->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($items)
    {
        $itemsgroups=ItemsGroup::all();
        $units=Unit::all();
        $item=Items::where('It_Code',$items)->with(['group','unit'])->first();
        return  view('items.edit',compact('itemsgroups','units','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$it_code)
    {
        Items::where('It_Code', $it_code)
                    ->update($request->except(['_token','_method']));       
        $msg =['message' => 'Item  Updated successfully!'];
       return  redirect('items')->with($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy($it_code)
    {
        Items::where('It_Code', $it_code)->delete();
        $msg =['message' => 'Item  Deleted successfully!',
        'type' => 'warning'];
        return  redirect('items')->with($msg);
    }
}
