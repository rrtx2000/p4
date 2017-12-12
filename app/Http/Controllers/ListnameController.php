<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listname;
use App\Item;

class ListnameController extends Controller
{
    public function showalist(Request $request)
    {
        $nameoflist = $request->input('nameoflist');
        $onlySelected = $request->input('onlySelected');
        
        if (isset($onlySelected)){
            //show only the selected items
            $onlySelected = true;
        }
        else {
            //show the whole list of items
            $onlySelected = false;
        }
        
        
        //$toShow = new Item();
        //$items=$toShow->all();
        //$items=Item::all();
        
        $allItemsARR = Item::getAllItemsArray();        //all the items, regardless of if a particular list has it selected
        //dump($allItemsARR);exit;
        
        $listname = Listname::where('listname', '=', $nameoflist)->first();     //this gets the object for a listname
        //echo ("id=" . $listname['id'] . "<br/>listname=" . $listname['listname'] . "<br/><br/>");
        
        
        //exit;
        //echo($listname->listname.' has these items:<br/>');
        
        
        $listitemsARR = [];

        foreach ($listname->items as $item) {
            $listitemsARR[$item['id']] = $item->itemname;
        }
        //echo("File: " . __FILE__ . "<br>Line: " . __LINE__ . "<br/>Array contents:"); echo("<pre>" . print_r($listitemsARR, 1) . "</pre>");
        
        //foreach ($listname->items as $items) {
            //uses the Item_Listname relationship to get the items for just this person
        //    echo($items->itemname . "<br/>");
        //}
        
        //exit;     
        
        //echo("nameoflist:<br/>" . $nameoflist); exit;
        return view('showalist')->with([
            'nameoflist' => $nameoflist,
            'onlySelected' => $onlySelected,
            'listitemsARR' => $listitemsARR,
            'allItemsARR' => $allItemsARR
        ]);
    
    }
    
    public function alllistnames()
    {
        //used by the landing page to show all the listnames
        $listnames = Listname::all();
        
        return view('index')->with([
            'listnames' => $listnames
        ]);
        
        //dump($listnames->toArray());
    }
    
    public function deletelistname(Request $request)
    {
        $id = $request->input('id');
        //echo("id = " . $id); exit;
        
        $itemToDelete = Listname::find($id);

        if (!$itemToDelete) {
            return redirect('/managelistnames')->with('alert', 'Listname not found');
        }
        
        
        $itemToDelete->items()->detach();
        
        $itemToDelete->delete();

        return redirect('/managelistnames');
    }
    
    
    public function addlistname(Request $request){
        //echo($request);
        $itemToAdd = $request->input('listname');
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
        
        $newitem = new Listname();
        $newitem->listname = $itemToAdd;
        $newitem->save();

        return redirect('/managelistnames');
    }
    
    public function manage()
    {
        $listnames = Listname::all();
        
        //managelistnames view
        return view('managelistnames')->with([
            'listnames' => $listnames
        ]);
        
        //dump($listnames->toArray());
    }
    
    
    
    public function test1()
    {
        echo ('ListnameController test 1');
        $items = Listname::all();
        dump($items->toArray());
    }
    
    public function test2()
    {
        $ln = Listname::where('listname', '=', 'Laurel')->first();
        $ln = Listname::where('listname', '=', 'Hardy')->first();
    
        dump($ln->listname . ' has items: ');
        foreach ($ln->items as $item) {
            dump($item->itemname);
        }
    }
    
    
    
}
