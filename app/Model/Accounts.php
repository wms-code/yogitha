<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //
    protected $table='accmasaccounts';

    protected $PrimaryKey='Ac_Code';

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'Ac_Code';
    }

}
