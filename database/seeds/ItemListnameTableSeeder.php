<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Listname;

class ItemListnameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $listname =[
                'Laurel' => ['milk', 'bread', 'cheese'],
                'Hardy' => ['Hamburger', 'bread', 'cheese', 'eggs']
            ];
            
            //loop through the above array, creating a new pivot entry
            foreach ($listname as $title => $items) {
                $ln = Listname::where('listname', 'like', $title)->first();
                
                foreach ($items as $itemName) {
                    $item = Item::where('itemname', 'LIKE', $itemName)->first();
                    $ln->items()->save($item);
                }
            }
    }
}