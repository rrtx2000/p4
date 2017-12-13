<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/xxx', function () {
    //initial landing page
    return view('index');
});




//Route::get('/all', 'ItemController@all');
//Route::get('/', 'ItemController@all');
Route::get('/', 'ListnameController@alllistnames');         //landing page - show the manage items, managelists, listnames
Route::get('/index', 'ListnameController@alllistnames');

Route::get('/showalist', 'ListnameController@showalist');
Route::POST('/updatelistname/{id}', 'ListnameController@updatelistname');

Route::get('/manageitems', 'ItemController@manage');
Route::get('/additem', 'ItemController@additem');
Route::get('/deleteitem', 'ItemController@deleteitem');
Route::get('/edititem', 'ItemController@edititem');


Route::get('/managelistnames', 'ListnameController@manage');
Route::get('/addlistname', 'ListnameController@addlistname');
Route::get('/deletelistname', 'ListnameController@deletelistname');
Route::get('/editlistname', 'ListnameController@editlistname');



Route::get('/testadditem', 'ItemController@additem');

Route::get('/env', function () {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
});

Route::get('/lntest1', 'ListnameController@test1');
Route::get('/lntest2', 'ListnameController@test2');


Route::get('/test', 'ItemController@test');

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});