<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $table='subcompany';

    protected $PrimaryKey='Comp_ID';

    protected $guarded=[];



    public function getRouteKeyName()
    {
        return 'Comp_ID';
    }

    
}
