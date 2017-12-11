<?php

use Illuminate\Database\Seeder;
use App\Listname;

class listnamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listname::insert([
            'listname' => 'Laurel'
        ]);
        
        Listname::insert([
            'listname' => 'Hardy'
        ]);
        
    }
}
