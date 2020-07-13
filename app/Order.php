<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    protected $guarded = [
        'id', 'user_id', 'payment_intent_id',
        'payment_created_at',
    ];
}
