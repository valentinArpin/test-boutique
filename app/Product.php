<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'subtitle', 'description',
         'content', 'image', 'price',
    ];

    protected $guarded = [
        'id',
    ];

    public function order_products()
    {
        return $this->belongsToMany('App\Order_product');
    }
}
