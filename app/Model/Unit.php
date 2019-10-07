<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table='masunit';

    protected $PrimaryKey='Unit_Code';

    //public $incrementing =false;

    public function getRouteKeyName()
    {
        return 'Unit_Code';
    }
}
