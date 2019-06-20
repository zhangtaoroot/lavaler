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

 //默认访问的 Laravel的页面
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/aa','Good\GoodController@aa');
//Route::get('/index','Good\GoodController@index');
//Route::get('/index','Good\GoodController@index');
Route::get('/',      'StaticPagesController@home');
Route::get('/help',  'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');


