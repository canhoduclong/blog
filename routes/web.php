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
Route::prefix('admin')->group(function(){
	Route::get('/post', 'PostController@');
	Route::get('category', 'CategoryController@index')->name('listcategory');
	Route::prefix('category')->group(function(){
		Route::get('add', 'CategoryController@create');
		Route::post('add', 'CategoryController@store');
		Route::get('edit/{id}', 'CategoryController@edit');
		Route::post('edit/{id}', 'CategoryController@update');
		Route::get('del/{id}', 'CategoryController@destroy');
	});
	
	
});

