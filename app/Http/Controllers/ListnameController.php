<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listname;

class ListnameController extends Controller
{
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
