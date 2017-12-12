<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function deleteitem(Request $request)
    {
        $id = $request->input('id');
        //echo("id = " . $id); exit;
        
        $itemToDelete = Item::find($id);

        if (!$itemToDelete) {
            return redirect('/manageitems')->with('alert', 'Item not found');
        }
        
        
        $itemToDelete->listnames()->detach();
        
        $itemToDelete->delete();

        return redirect('/manageitems');
    }
    
    public function additem(Request $request){
        //echo($request);
        $itemToAdd = $request->input('itemname');
        //echo("request itemname = " . $itemToAdd);
        //exit;
        
        /*
            $book = new Book();
            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->published = $request->input('published');
            $book->cover = $request->input('cover');
            $book->purchase_link = $request->input('purchase_link');
            $book->save();
         */
        
        $newitem = new Item();
        $newitem->itemname = $itemToAdd;
        $newitem->save();

        return redirect('/manageitems');
    }
    
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
    
    public function manage()
    {
        $items = Item::all();
        
        //manageitems view
        return view('manageitems')->with([
            'items' => $items
        ]);
        
        //dump($items->toArray());
    }
    
    public function index()
    {
        return view('index');       //This is the resources/views/index.blade.php
    }
    
}
