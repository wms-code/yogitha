<?php

namespace App\Http\Controllers\Master;

use App\Model\Master\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit= Unit::orderBy('Unit_Name','asc')->paginate(5);
        return view('unit.list',compact('unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Unit::add($request->all());
          $msg = [
            'message' => 'Unit created successfully!' ];
          return  redirect('unit')->with($msg);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return  view('unit.edit',$unit);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unit_code)
    {
        Unit::where('Unit_Code', $unit_code)
        ->update(['Unit_Name'=>$request->Unit_Name ]);       
        $msg =['message' => 'Unit Updated successfully!'];
        return  redirect('unit')->with($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit_code)
    {
        Unit::where('Unit_Code', $unit_code)->delete();
        $msg =['message' => 'Unit Deleted successfully!',
        'type' => 'warning'];
        return  redirect('unit')->with($msg);
    }
}
