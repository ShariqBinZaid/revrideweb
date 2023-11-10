<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\ToursController;

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
});

// ************************ Abouts  ************************ //
Route::resource('about', AboutsController::class);
Route::controller(AboutsController::class)->group(function () {
    Route::get('about', 'index')->name('abouts');
});

// ************************ Sports  ************************ //
Route::resource('sports', RentalsController::class);
Route::controller(RentalsController::class)->group(function () {
    Route::get('sports', 'index')->name('sports');
});

// ************************ Tours  ************************ //
Route::resource('tours', ToursController::class);
Route::controller(ToursController::class)->group(function () {
    Route::get('tours', 'index')->name('tours');
});

// ************************ Blogs  ************************ //
Route::resource('blogs', BlogsController::class);
Route::controller(BlogsController::class)->group(function () {
    Route::get('blogs', 'index')->name('blogs');
});

// ************************ Contacts  ************************ //
Route::resource('contacts', ContactsController::class);
Route::controller(ContactsController::class)->group(function () {
    Route::get('contacts', 'index')->name('contacts');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin', 'auth']], function () {
});
