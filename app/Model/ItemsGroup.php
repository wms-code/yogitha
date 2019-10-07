<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemsGroup extends Model
{
    //
    protected $table='masgroup';

    protected $PrimaryKey='Group_Code';

    protected $guarded=[];

    public $timestamps = false;

    public $incrementing =false;

    public function getRouteKeyName()
    {
        return 'Group_Code';
    }

    public function getid()
    {
       $id=$this->latest('Group_Code')->first()->Group_Code;
       return $id+1;
    }

    protected function addrec($rec)
    {
       if(isset($rec['Group_Name']))
       {
           $data['Group_Code']=$this->getid();
           $data['Group_Name']=$rec['Group_Name'];
           return $this->create($data);
       }else
       { 
           return false;
       }

      
    }
}
