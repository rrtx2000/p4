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
        dump($items->toArray());
    }

    public function all()
    {
        $items = Item::all();
        
        //resources/views/index.blade.php
        return view('index')->with([
            'items' => $items
        ]);
        
        dump($items->toArray());
    }

    
    public function index()
    {
        return view('index');       //This is the resources/views/index.blade.php
    }
    
}
