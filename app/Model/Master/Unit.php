<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table='masunit';

    protected $PrimaryKey='Unit_Code';

    protected $guarded=[];

    //public $incrementing =false;

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'Unit_Code';
    }

    public function getid()
    {
       $id=$this->latest('Unit_Code')->first()->Unit_Code;
       return $id+1;
    }


    protected function add($rec)
    {
       if(isset($rec['Unit_Name']))
       {
           $data['Unit_Code']=$this->getid();
           $data['Unit_Name']=$rec['Unit_Name'];
           return $this->create($data);
       }else
       { 
           return false;
       }

    }



}
