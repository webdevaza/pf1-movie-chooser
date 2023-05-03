<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('movies.movies');
});
Route::get('/random', function () {
    return view('movies.movie');
});
Route::get('/add', function () {
    return view('movies.add-movie');
});
Route::get('/edit', function () {
    return view('movies.edit-movie');
});
Route::get('/register', function () {
    return view('user.register');
});
