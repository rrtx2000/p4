<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function test()
    {
        echo ('itemcontroller test');
        
        $items = Item::all();
        
        
        //foreach ($items as $item) {
        //   dump('item: ' . $item->item
         //        . ' - Author: ' . $book->author);
        //}
        dump($items->toArray());
        
    }
}
