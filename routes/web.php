<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::get('/random', [MovieController::class, 'random']);

Route::get('/add', [MovieController::class, 'add'])->middleware('auth');
Route::post('/add', [MovieController::class, 'store'])->middleware('auth');
Route::get('/edit/{movie}', [MovieController::class, 'edit'])->middleware('auth');
Route::put('/edit/{movie}', [MovieController::class, 'update'])->middleware('auth');

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
