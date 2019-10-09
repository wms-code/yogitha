<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $table='subcompany';

    protected $PrimaryKey='Comp_ID';

    public $timestamps = false;

    protected $guarded=[];



    public function getRouteKeyName()
    {
        return 'Comp_ID';
    }

    
}
