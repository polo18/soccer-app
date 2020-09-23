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
    return view('home');
})->name('home');

Route::get('/matches', function () {
    return view('matches');
})->name('matches');

Route::get('/players', function () {
    return view('players');
})->name('players');


Route::get('/blog', function () {
    return view('blog');
})->name('blog');


Route::get('/shopping', function () {
    return view('shopping');
})->name('shopping');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
