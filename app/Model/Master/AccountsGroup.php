<?php

namespace App\Model\Master;

use Illuminate\Database\Eloquent\Model;

class AccountsGroup extends Model
{
    //
    protected $table='accmasgroup';

    protected $PrimaryKey='Group_Code';

    public $timestamps = false;
    
    public function getRouteKeyName()
    {
        return 'Group_Code';
    }
}
