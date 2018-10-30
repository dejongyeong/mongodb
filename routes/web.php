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

Route::get('/', 'HomeController@index');

// Delete Operation
Route::delete('books/{book}', ['as' => 'book.destroy', 'uses' => 'HomeController@destroy']);

// Create Operation
Route::post('books', ['as' => 'book.insert', 'uses' => 'HomeController@store']);

// Update Operation
Route::get('update/{book}', ['as' => 'book.update', 'uses' => 'HomeController@edit']);
Route::post('update/{book}', ['as' => 'book.update', 'uses' => 'HomeController@update']);

//Show
Route::get('book/{book}', ['as' => 'book.show', 'uses' => 'HomeController@show']);