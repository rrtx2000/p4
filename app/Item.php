<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function listnames() {
        return $this->belongsToMany('App\Listname')->withTimestamps();
    }
}
