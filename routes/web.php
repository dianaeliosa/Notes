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

Route::get('/', function () {
    return view('welcome');


});


    Route::get('Calculo/{val1}/{val2}', function ($val1, $val2){
    	$sum = $val1 + $val2;

    	return $sum;



    });




Route::get('condicion/{a}', 'CondicionController@condicion');


Route::get('profile/{nombre}/{edad}', 'ProfileController@profile');


Route::get('maquillaje/{tipo}/{color}/{precio}', 'MakeupController@maquillaje');