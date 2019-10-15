<?php

namespace App\Http\Controllers\Master;

use App\Traits\AddAccount;
use Illuminate\Http\Request;
use App\Model\Master\Accounts;
use App\Model\Master\AccountsGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AccountsController extends Controller
{
    use AddAccount;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts= Accounts::orderBy('Ac_Name','asc')->with(['accountsgroups','subgroup'])->get();
        return view('accounts.list',compact('accounts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
<<<<<<< HEAD
        /* $accountsgroups = DB::table('accmasgroup')
        ->select(DB::raw('Group_Name,Group_Code')) 
        //   ->select('Group_Name','Group_Code')     Why Not Use Simple Select
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
         */

         

=======
>>>>>>> 290e5cce193bf80f25aeea01daafa8610dd5c1e1
        $reportgroup = Accounts::report();
        $subgroup = AccountsGroup::subgroup();
        $accountsgroups = AccountsGroup::getall();
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
        $this->submit($request->all());
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
    public function edit($ac_code)
    {
<<<<<<< HEAD
        $accgroup = AccountsGroup::getall();
=======

        $accountsgroups = AccountsGroup::getall();
>>>>>>> 290e5cce193bf80f25aeea01daafa8610dd5c1e1
        $subgroup = AccountsGroup::subgroup();

        $reportgroup = Accounts::report();
        $accounts = Accounts::where('Ac_Code',  '=', $ac_code)->first();
        return view('accounts.edit', compact('accounts','accgroup','subgroup','reportgroup'));

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