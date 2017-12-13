<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function listnames()
    {
        return $this->belongsToMany('App\Listname')->withTimestamps();
    }
    
    public static function getAllItemsArray()
    {
        $items = Item::orderBy('itemname')->get();
        
        $itemsARR = [];
        foreach ($items as $item) {
            $itemsARR[$item['id']] = $item->itemname;
        }
        return $itemsARR;
    }
}
