<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    protected $table='masitem';

    protected $PrimaryKey='It_Code';

    protected $guarded=[];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'It_Code';
    }
}
