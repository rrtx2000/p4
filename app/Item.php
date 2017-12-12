<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function listnames() {
        return $this->belongsToMany('App\Listname')->withTimestamps();
    }
    
    
    public static function getAllItemsArray()
    {
        //return [1 => 'eggs'];
        $items = Item::orderBy('itemname')->get();
        //dump($items);exit;
        
        
        $itemsARR = [];

        foreach ($items as $item) {
            $itemsARR[$item['id']] = $item->itemname;
        }

        return $itemsARR;
    }
    
    
}
