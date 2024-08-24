<?php

use App\Http\Controllers\QuotesController;
use App\Http\Controllers\UserLoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('list_qoutes', [QuotesController::class, 'index'])->middleware('auth');
// Route::post('list_qoustes/refresh', [QuotesController::class, 'refresh'])->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});


Route::post('login', [UserLoginController::class, 'authenticate'])->name('login_user');
Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('list_quotes', [QuotesController::class, 'index'])->name('list_quotes');
    Route::post('list_quotes/refresh', [QuotesController::class, 'refresh'])->name('refresh');
});

