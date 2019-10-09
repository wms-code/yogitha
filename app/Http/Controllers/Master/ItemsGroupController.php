<?php

namespace App\Http\Controllers\Master;

use App\Model\Master\ItemsGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
          ItemsGroup::add($request->all());
          $msg = [
            'message' => 'Item Group created successfully!' ];
          return  redirect('itemsgroup')->with($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ItemsGroup $itemsgroup)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemsGroup $itemsgroup)
    {
        return  view('itemsgroup.edit', $itemsgroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$group_code)
    {
        ItemsGroup::where('Group_Code', $group_code)
                    ->update(['Group_Name'=>$request->Group_Name ]);       
        $msg =['message' => 'Item Group Updated successfully!'];
       return  redirect('itemsgroup')->with($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ItemsGroup  $itemsGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($group_code)
    {
        ItemsGroup::where('Group_Code', $group_code)->delete();
        $msg =['message' => 'Item Group Deleted successfully!',
        'type' => 'warning'];
        return  redirect('itemsgroup')->with($msg);
    }
}
