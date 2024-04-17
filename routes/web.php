<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FranchiseController;

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

Route::get('/', [
    MovieController::class, 'index'
])->name('home');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/registration', [
    UserController::class, 'store'
])->name('registration.store');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [
    UserController::class, 'login'
])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [
        UserController::class, 'profile'
    ])->name('profile');
    Route::get('/logout', [
        UserController::class, 'logout'
    ])->name('logout');
});

Route::post('/profile', [
    UserController::class, 'update'
])->name('update');

Route::get('/add-movie', [
    MovieController::class, 'list'
])->name('add-movie');

Route::post('/add-movie', [
    MovieController::class, 'create'
])->name('add-movie.create');

Route::get('/add-franchise', function () {
    return view('add-franchise');
})->name('add-franchise');

Route::post('/add-franchise', [
    FranchiseController::class, 'store'
])->name('add-franchise.store');

Route::get('/movie/{movie}', [
    MovieController::class, 'show'
])->name('movie.show');

Route::get('/type/{type}', [
    MovieController::class, 'showType'
])->name('type.showType');