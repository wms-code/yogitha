<?php

namespace App\Model\Master;


use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    protected $table='masitem';

    protected $PrimaryKey='It_Code';

    protected $guarded=[];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'It_Code';
    }

    public function getid()
    {
       $id=$this->latest('It_Code')->first()->It_Code;
       return $id+1;
    }


    public function group()
    {
        return $this->belongsTo(ItemsGroup::class, 'Group_Code', 'Group_Code');
    }

    public function unit()
    {
        return $this->hasOne(Unit::class, 'Unit_Code', 'Unit_Code');
    }



    protected function add($rec)
    {
       if(isset($rec['It_Name']))
       {
           $data['It_Code']=$this->getid();
           $data['It_Name']=$rec['It_Name'];
           $data['Comp_Id']='1';
          // $data['Item_Rate']=$rec['Item_Rate'];
           $data['Group_Code']=$rec['Group_Code'];
           $data['Unit_Code']=$rec['Unit_Code'];
           return $this->create($data);
       }else
       { 
           return false;
       }

      
    }
}
