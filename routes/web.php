<?php

use App\Http\Controllers\UserController;
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
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/terms', function () {
    return view('pages.terms');
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
