<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Accounts extends Model
{
    protected $guarded=[];
    public $timestamps = false;
    protected $PrimaryKey='Ac_Code';    
    protected $table='accmasaccounts';


    public function getRouteKeyName()
    {
        return 'Ac_Code';
    }

    protected function getid()
    {
       $id=$this->latest('Ac_Code')->first()->Ac_Code;
       return $id+1;
    }

    protected function report()
    {
        return $this->select('Ac_Name','Ac_Code')->orderBy('Ac_Name')->get();
        //->where('status', '<>', 1)
        //->groupBy('status')
    }


    public function accountsgroups()
    {
        return $this->hasOne(AccountsGroup::class, 'Group_Code', 'Group_Code');
    }
    public function subgroup()
    {
<<<<<<< HEAD
        return $this->hasOne(AccountsGroup::class, 'Group_Code', 'Group_Code')->whereIn('Group_Code', array(11,12,14,15));
    
   
    }
    public function reportgroup()
    {
        return $this->hasOne(Accounts::class, 'Ac_name');
    }
=======
        return $this->hasOne(AccountsGroup::class, 'Group_Code', 'SubGroup_Code');
    }

    public function unit()
    {
        return $this->hasOne(Unit::class, 'Unit_Code', 'Unit_Code');
    }
    

>>>>>>> 290e5cce193bf80f25aeea01daafa8610dd5c1e1
}
