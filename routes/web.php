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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route group Admin
//   --> richiesta Autenticazione
//   --> esegue operazioni CRUD
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function () {
        Route::resource('/posts', 'PostController');
    // ->name('admin');
});


// Route Guest (user anonimo - non loggato)
//   --> pubblica
//   --> ammette solo operazioni Index - Show (escluso nome Autore dei post)
Route::get('/posts', 'PostController@index')->name('posts.index');