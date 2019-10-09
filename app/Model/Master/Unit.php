<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table='masunit';

    protected $PrimaryKey='Unit_Code';

    //public $incrementing =false;

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'Unit_Code';
    }
}
