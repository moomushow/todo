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

Route::get('/', 'HomeController@index');
Route::get('/create', 'HomeController@create');
Route::get('/edit/{product_id}','HomeController@edit');

Route::get('/login', 'HomeController@login');
Route::get('/about','HomeController@about');

Route::post('/store','HomeController@store');





//Route::get('/play',function(){
//    $categories = \App\Product::with('category')->get();
//    return $categories;
//});




