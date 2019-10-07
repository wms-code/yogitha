<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AccountsGroup extends Model
{
    //
    protected $table='accmasgroup';

    protected $PrimaryKey='Group_Code';
    
    public function getRouteKeyName()
    {
        return 'Group_Code';
    }
}
