<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listname extends Model
{
    public function items() {
        return $this->belongsToMany('App\Item')->withTimestamps();
    }
}
