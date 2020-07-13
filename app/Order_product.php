<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    protected $guarded = [
        'id', 'order_id', 'product_id',
    ];
}
