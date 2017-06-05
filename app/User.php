<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function topics() {
        return $this->hasMany('App\Topic');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function getTopicsAmountAttribute() {
        return $this->topics();
    }

    public function rated() {
        return $this->hasMany('App\Rating', 'sender_id');
    }

    public function ratedpassive() {
        return $this->hasMany('App\Rating', 'recipient_id');
    }

    public function privateMessages() {
        return $this->hasmany('App\Message', 'sender_id');
    }

}
