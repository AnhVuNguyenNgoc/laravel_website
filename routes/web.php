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

Route::get('trang-chu', [
	'as'=>'trangchu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham', [
	'as'=>'loaisanpham',
	'uses'=>'PageController@getCategory'
]);

Route::get('chi-tiet-san-pham', [
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getDetailProduct'
]);

Route::get('lien-he', [
	'as'=>'lienhe',
	'uses'=>'PageController@getContact'
]);

