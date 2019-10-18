<?php
namespace App\Traits;

use App\Model\Master\Accounts;
use App\Model\Master\SetPartyRate;

trait UpdatePartyRate
{

    public function updateRate($request)
    {
        $rates=SetPartyRate::all();       
        foreach ($rates as  $list) $lists[$list->Pty_Code]=$list;

        foreach ($request as  $item) 
        {
            if (array_key_exists($item['Pty_Code'],$lists)) 
            {              
                $data=$lists[$item['Pty_Code']];
                if ($data->PerGramRate !=$item['PerGramRate'] || $data->CreditDays !=$item['CreditDays']) 
                {
                    SetPartyRate::where('Pty_Code',$item['Pty_Code'])->update($item);
                }                 
            } 
           else  SetPartyRate::create($item);
               
         } 
    }
}
  