<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
