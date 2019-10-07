<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SetGSM extends Model
{
    //
    protected $table='masply';

    protected $PrimaryKey=['Ply','GSM'];

    public $incrementing =false;

    public function getRouteKeyName()
    {
        return 'Ac_Code';
    }

    
}
