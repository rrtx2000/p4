<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listname;

class ListnameController extends Controller
{
    
    
    public function showalist(Request $request)
    {
        $nameoflist = $request->input('nameoflist');
        
        //echo("nameoflist:<br/>" . $nameoflist); exit;
        return view('showalist')->with([
            'nameoflist' => $nameoflist
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
