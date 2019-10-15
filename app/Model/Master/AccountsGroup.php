<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class AccountsGroup extends Model
{
    //
    protected $table='accmasgroup';

    protected $PrimaryKey='Group_Code';

    public $timestamps = false;
    
    public function getRouteKeyName()
    {
        return 'Group_Code';
    }


    protected function getall()
    {
        return $this->select('Group_Name','Group_Code')     
        ->orderBy('Group_Name')
        ->get();
    }

    protected function subgroup()
    {
        return $this->select('Group_Name','Group_Code') 
        ->whereIn('Group_Code', array(11,12,14,15))
        ->orderBy('Group_Name')
        ->get();
    }
}
