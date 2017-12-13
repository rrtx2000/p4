<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listname;
use App\Item;

class ListnameController extends Controller
{
    public function updatelistname(Request $request, $id)
    {
        $listname = Listname::find($id);
        $listname->items()->sync($request->input('items'));
        $listname->save();
        
        return redirect('/')->with('usermessage', 'Your changes were saved');
    }
    
    public function showalist(Request $request)
    {
        
        $this->validate($request, [
            'nameoflist' => 'required',
        ]);
        
        $nameoflist = $request->input('nameoflist');
        
        $allItemsARR = Item::getAllItemsArray();    //all the items, regardless of if a particular list has it selected
        
        $listname = Listname::where('listname', '=', $nameoflist)->first();     //this gets the object for a listname
        
        $listitemsARR = [];
        
        //build up an array of the items for this one listname
        foreach ($listname->items as $item) {
            $listitemsARR[$item['id']] = $item->itemname;
        }
        
        return view('showalist')->with([
            'nameoflist' => $nameoflist,
            'listitemsARR' => $listitemsARR,
            'allItemsARR' => $allItemsARR,
            'listitemId' => $listname['id']
        ]);
    }
    
    public function alllistnames()
    {
        //used by the landing page to show all the listnames
        $listnames = Listname::all();
        
        return view('index')->with([
            'listnames' => $listnames
        ]);
    }
    
    public function deletelistname(Request $request)
    {
        $id = $request->input('id');
        
        $itemToDelete = Listname::find($id);
        
        if (!$itemToDelete) {
            return redirect('/managelistnames')->with('usermessage', 'That listname was not found');
        }
        
        $itemToDelete->items()->detach();   //remove the many to many relationship if it exists
        
        $itemToDelete->delete();
        
        return redirect('/managelistnames')->with('usermessage', $itemToDelete->listname . ' was deleted');;
    }
    
    public function addlistname(Request $request)
    {
        $this->validate($request, [
            'listname' => 'required|min:2',
        ]);
                
        $itemToAdd = $request->input('listname');
        $newitem = new Listname();
        $newitem->listname = $itemToAdd;
        $newitem->save();
        
        return redirect('/managelistnames')->with('usermessage', $itemToAdd . ' was added');
    }
    
    public function manage()
    {
        $listnames = Listname::all();
        
        return view('managelistnames')->with([
            'listnames' => $listnames
        ]);
    }

}
