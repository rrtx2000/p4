<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(1)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(1)->toDateTimeString(),
            'itemname' => 'milk',
            'include' => 1,
            'quantity' => 1,
            'sortorder' => 1
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(2)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(2)->toDateTimeString(),
            'itemname' => 'bread',
            'include' => 0,
            'quantity' => 2,
            'sortorder' => 2
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'itemname' => 'eggs',
            'include' => 1,
            'quantity' => 12,
            'sortorder' => 3
        ]);
    }
}
