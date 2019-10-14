<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $table='accmasaccounts';

    protected $PrimaryKey='Ac_Code';
    

    protected $guarded=[];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'Ac_Code';
    }

    public function getid()
    {
       $id=$this->latest('Ac_Code')->first()->Ac_Code;
       return $id+1;
    }


    public function accountsgroups()
    {
        return $this->hasOne(AccountsGroup::class, 'Group_Code', 'Group_Code');
    }

    public function reportgroup()
    {
        return $this->hasOne(AccountsGroup::class, 'ac_name');
    }
   
    public function subgroup()
    {

        return $this->hasOne(AccountsGroup::class, 'Group_Code', 'SubGroup_Code');

       // return $user->where('name', $request->input('name'))
        //->where('city', $request->input('city'))
        //->get();
    }

    public function unit()
    {
        return $this->hasOne(Unit::class, 'Unit_Code', 'Unit_Code');
    }
    protected function add($rec)
    {
       if(isset($rec['Ac_Name']))
       {
           $data['Ac_Code']=$this->getid();
           $data['Ac_Name']=$rec['Ac_Name'];
           $data['Group_Code']=$rec['Group_Code'];
          // $data['Short_Name']=$rec['Short_Name'];
           //$data['Comp_Id']='1';
           //$data['Phone']=$rec['Phone'];
           //$data['Mobile']=$rec['Mobile'];
           //$data['Address1']=$rec['Address1'];
           //$data['Address2']=$rec['Address2'];
           //$data['Address3']=$rec['Address3'];
           //$data['Del_Address']=$rec['Del_Address'];
           //$data['GSTNO']=$rec['GSTNO'];
           //$data['ReportGroup']=$rec['ReportGroup'];

           //$data['CreditLimit']=$rec['CreditLimit'];
           //$data['Opn_Bal']=$rec['Opn_Bal'];
           //$data['Active']=$rec['ReportGroup'];
          
         //  $data['SubGroup_Code']=$rec['SubGroup_Code'];
           return $this->create($data);
       }else
       { 
           return false;
       }

      
    }

}
