<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresse extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
