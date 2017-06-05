<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title', 'description'];

    public function subsections() {
        return $this->hasMany('App\Subsection');
    }
}