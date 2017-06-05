<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['sender_id', 'recipient_id', 'message_id'];

    public function sender() {
        return $this->belongsTo('App\User', 'sender_id');
    }

    public function recipient() {
        return $this->belongsTo('App\User', 'recipient_id');
    }

    public function topic() {
        return $this->belongsTo('App/Topic');
    }
}