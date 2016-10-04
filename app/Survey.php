<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function questions() {
        return $this->hasMany('App\Question');
    }

    public function answers() {
        return $this->hasMany('App\Answer');
    }
}
