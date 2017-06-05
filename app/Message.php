<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'topic_id', 'content'];

    public function author() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public function ratings() {
        return $this->hasMany('App\Rating');
    }

    public function isRated() {
        return Rating::where('sender_id', auth()->user()->id)->where('recipient_id', $this->author->id)->where('message_id', $this->id)->exists();
    }
}