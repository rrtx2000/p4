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
            'itemname' => 'milk'
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(2)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(2)->toDateTimeString(),
            'itemname' => 'bread'
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'itemname' => 'eggs'
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'itemname' => 'cheese'
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'itemname' => 'boost'
        ]);
        
        Item::insert([
            'created_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->subDays(3)->toDateTimeString(),
            'itemname' => 'Hamburger'
        ]);
    }
}
