<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SetPartyRate extends Model
{
    //
    protected $table='masrate';

    protected $PrimaryKey=['Pty_Code','Comp_ID'];

    public $incrementing =false;

    public function getRouteKeyName()
    {
        return 'Ac_Code';
    }
}
