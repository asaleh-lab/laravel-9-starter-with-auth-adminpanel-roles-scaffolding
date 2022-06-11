<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('middleware', function() {
    $collection = collect(Route::getRoutes())->map(function($r){
        if(isset($r->action['middleware']))
            return $r->action['middleware'];
    })->flatten();
    return array_unique($collection->toArray());
});
