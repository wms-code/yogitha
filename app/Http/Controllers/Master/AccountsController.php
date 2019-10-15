<?php

namespace App\Http\Controllers\Master;

use App\Model\Master\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\AccountsGroup;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return $accounts= Accounts::all();
        $accounts= Accounts::orderBy('Ac_Name','asc')->with(['accountsgroups','subgroup'])->get();
        return view('accounts.list',compact('accounts'));

      //  $items= Items::orderBy('It_Name','asc')->with(['group','unit'])->get();
        //return view('items.list',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $accountsgroups = DB::table('accmasgroup')
        ->select(DB::raw('Group_Name,Group_Code'))        
        ->orderBy('Group_Name')
        ->get();

        //$subgroup=AccountsGroup::all();
        $subgroup = DB::table('accmasgroup')
               ->select(DB::raw('Group_Name,Group_Code'))
               ->whereIn('Group_Code', array(11,12,14,15))
               ->orderBy('Group_Name')
               ->get();
        //11 12 14 15
        //$reportgroup=AccountsGroup::all();

        $reportgroup = DB::table('accmasaccounts')
                     ->select(DB::raw('Ac_Name,Ac_Code'))
                     ->orderBy('Ac_Name')
                     //->where('status', '<>', 1)
                     //->groupBy('status')
                     ->get();

        return view('accounts.create',compact('accountsgroups','subgroup','reportgroup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Accounts::add($request->all());
        $msg = [
          'message' => 'Ac Name  created successfully!' ];
        return  redirect('accounts')->with($msg);
    }

    /**
     * Display the specified res
     * 
     * ource.
     *
     * @param  \App\Model\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounts $accounts)
    {
        $accountsgroups = DB::table('accmasgroup')
        ->select(DB::raw('Group_Name,Group_Code'))        
        ->orderBy('Group_Name')
        ->get();
        $subgroup = DB::table('accmasgroup')
               ->select(DB::raw('Group_Name,Group_Code'))
               ->whereIn('Group_Code', array(11,12,14,15))
               ->orderBy('Group_Name')
               ->get();
        $reportgroup = DB::table('accmasaccounts')
                     ->select(DB::raw('Ac_Name,Ac_Code'))
                     ->orderBy('Ac_Name')
                    ->get();
        $accounts = DB::table('accmasaccounts')
                    ->join('accmasgroup', 'accmasaccounts.Group_Code', '=', 'accmasgroup.Group_Code')
                    ->select('Ac_Code', 'accmasgroup.Group_Name', 'Ac_Name')
                    ->where('Ac_Code',$accounts)
                    ->get();
        //$accounts=Accounts::where('Ac_Code',$items)->with(['group','unit'])->first();
        return  view('accounts.edit',compact('accountsgroups','subgroup','reportgroup','accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accounts $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounts $accounts)
    {
        //
    }
}
