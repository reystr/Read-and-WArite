<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stationery extends Model
{
    public  function orderDetails(){
        return $this->hasMany('App\Cart',  'id');
    }
}
