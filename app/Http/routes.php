<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('books', 'BooksController', ['except' => [
        'update', 'edit', 'create'
    ]]);
    Route::resource('users', 'UsersController', ['only' => [
        'show']
    ]);
    Route::resource('users.books', 'UsersBooksController', ['only' => [
        'index', 'destroy', 'store']
    ]);
});