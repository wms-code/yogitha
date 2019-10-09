<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class SetGSM extends Model
{
    //
    protected $table='masply';

    protected $PrimaryKey=['Ply','GSM'];

    public $incrementing =false;

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'Ac_Code';
    }

    
}
