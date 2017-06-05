<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['subsection_id', 'author_id', 'title', 'description'];

    public function author() {
        return $this->hasOne('App\User');
    }

    public function subsection() {
        return $this->belongsTo('App\Subsection');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function getMessagesAmountAttribute() {
        return count($this->messages());
    }

    public function getLatestMessageAttribute() {
        return $this->messages()->orderBy('created_at', 'desc')->first();
    }
}