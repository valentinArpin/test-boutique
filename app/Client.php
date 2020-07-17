<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'info',
    ];

    protected $guarded = [
        'id', 'user_id', 'contact_id'
    ];

    public function contact()
    {
        return $this->hasOne('App\Contact');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
