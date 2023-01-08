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
    $books = ['Harry Poter1', 'Harry Poter 2', 'Harry Poter 3'];
    return view('welcome', compact('books'));
});

Route::get('/about', function () {
    return view('about');
});