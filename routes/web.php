<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('welcome');

Route::controller(FrontController::class)->group(function () {
    Route::get('about', 'abouts')->name('abouts');
    Route::get('sports', 'sports')->name('sports');
    Route::get('tours', 'tours')->name('tours');
    Route::get('blogs', 'blogs')->name('blogs');
    Route::get('contacts', 'contacts')->name('contacts');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin', 'auth']], function () {
});
