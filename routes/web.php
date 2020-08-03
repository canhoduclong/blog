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
	
	Route::get('member', 'MemberController@index')->name('listmember');
	Route::prefix('post')->group(function(){
		Route::get('add', 'MemberController@create');
		Route::post('add', 'MemberController@store');
		Route::get('edit/{id}', 'MemberController@edit');
		Route::post('edit/{id}', 'MemberController@update');
		Route::get('del/{id}', 'MemberController@destroy');
	});
	Route::get('video', 'VideoController@index')->name('listvideo');
	Route::prefix('post')->group(function(){
		Route::get('add', 'VideoController@create');
		Route::post('add', 'VideoController@store');
		Route::get('edit/{id}', 'VideoController@edit');
		Route::post('edit/{id}', 'VideoController@update');
		Route::get('del/{id}', 'VideoController@destroy');
	});
	Route::get('post', 'PostController@index')->name('listpost');
	Route::prefix('post')->group(function(){
		Route::get('add', 'PostController@create');
		Route::post('add', 'PostController@store');
		Route::get('edit/{id}', 'PostController@edit');
		Route::post('edit/{id}', 'PostController@update');
		Route::get('del/{id}', 'PostController@destroy');
	});
	Route::get('category', 'CategoryController@index')->name('listcategory');
	Route::prefix('category')->group(function(){
		Route::get('add', 'CategoryController@create');
		Route::post('add', 'CategoryController@store');
		Route::get('edit/{id}', 'CategoryController@edit');
		Route::post('edit/{id}', 'CategoryController@update');
		Route::get('del/{id}', 'CategoryController@destroy');
	});
	
	
});

