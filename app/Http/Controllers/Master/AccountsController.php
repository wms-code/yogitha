<?php

namespace App\Http\Controllers\Master;

use App\Model\Master\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\AccountsGroup;
 
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
        $accountsgroups=AccountsGroup::all();
        $subgroup=AccountsGroup::all();
        $reportgroup=AccountsGroup::all();
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
        //
    }

    /**
     * Display the specified resource.
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
        //
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
