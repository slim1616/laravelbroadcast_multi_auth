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


Route::post('/guard/broadcast/auth', function(\Illuminate\Support\Facades\Request $req){
    return true;
})->middleware('broadcast');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notifier', 'HomeController@notifier');

Route::post('/notifyuser/{id}', 'HomeController@notifyUser')->name('notifyUser');


