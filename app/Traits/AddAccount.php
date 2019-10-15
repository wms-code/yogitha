<?php
namespace App\Traits;

use App\Model\Master\Accounts;

trait AddAccount
{
    /**
     *  Insert Accounts into db
     *
     * @return string
     */
    public function submit($rec)
    {

        if(isset($rec['Ac_Name']))
        {
            //Todo: Need to Optimize code 
            $data['Ac_Code']=Accounts::getid();
            $data['Ac_Name']=$rec['Ac_Name'];
            $data['Comp_Id']='1';
            $data['Group_Code']=$rec['Group_Code'];
            $data['ReportGroup']=$rec['ReportGroup'];
            $data['SubGroup_Code']=$rec['SubGroup_Code'];
            $data['Phone']=$rec['Phone'];
            $data['Mobile']=$rec['Mobile'];
 
            $data['Address1']=$rec['Address1'];
            $data['Address2']=$rec['Address2'];
            $data['Address3']=$rec['Address3'];
            $data['Del_Address']=$rec['DelAddress'];
            if ($rec['opnbal']="1")
            {
               $data['Opn_Bal']=$rec['Opn_Bal']*-1;
            }
            else
            {
                $data['Opn_Bal']=$rec['Opn_Bal'];  
            }
            
 
            $data['GSTNO']=$rec['GSTNO'];
            if ($rec['ActiveRadio']="on")
            {
               $data['Active']=1;
            }
            else
            {
             $data['Active']=0;
            }
            $data['Address3']=$rec['Address3'];


            return Accounts::create($data);
        }else
        { 
            return false;
        }
 

    }



}