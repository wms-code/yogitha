<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class SetPartyRate extends Model
{
    //
    protected $table='masrate';

    protected $PrimaryKey=['Pty_Code','Comp_ID'];

    public $incrementing =false;

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'Pty_Code';
    }
    protected function getall()
    {
      //  $users = DB::table('users')
        //    ->join('contacts', 'users.id', '=', 'contacts.user_id')
          //  ->join('orders', 'users.id', '=', 'orders.user_id')
            //->select('users.*', 'contacts.phone', 'orders.price')
            //->get();

        return $this->select('masrate.*','Ac_Name')  
        ->rightJoin('accmasaccounts', 'accmasaccounts.Ac_Code', '=', 'masrate.Pty_Code')
        ->whereIn('Group_Code', array(7))
        ->orderBy('Ac_Name')
        ->get();
    }
}
