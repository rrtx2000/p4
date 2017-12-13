<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    
    public function deleteitem(Request $request)
    {
        $id = $request->input('id');
         
        $itemToDelete = Item::find($id);
        
        if (!$itemToDelete) {
            return redirect('/manageitems')->with('usermessage', 'Item not found');
        }
        
        $itemToDelete->listnames()->detach();       //remove the many to many relationship if it exists
        
        $itemToDelete->delete();
        
        return redirect('/manageitems')->with('usermessage', $itemToDelete->itemname . ' was deleted');
    }
    
    public function additem(Request $request)
    {
        $this->validate($request, [
            'itemname' => 'required|min:2',
        ]);
        
        $itemToAdd = $request->input('itemname');
        
        $newitem = new Item();
        $newitem->itemname = $itemToAdd;
        $newitem->save();
        
        return redirect('/manageitems')->with('usermessage', $itemToAdd . ' was added');
    }
    
    public function all()
    {
        $items = Item::all();
        
        //resources/views/index.blade.php
        return view('index')->with([
            'items' => $items
        ]);
    }
    
    public function manage()
    {
        $items = Item::all();
        
        //manageitems view
        return view('manageitems')->with([
            'items' => $items
        ]);
        
    }
    
    public function index()
    {
        return view('index');       //This is the resources/views/index.blade.php
    }
    
}
