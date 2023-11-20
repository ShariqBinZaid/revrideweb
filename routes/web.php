<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Vendor\VendorRentalsController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\ContactsController;

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


// ************************ Abouts  ************************ //
Route::resource('about', AboutsController::class);
Route::controller(AboutsController::class)->group(function () {
    Route::get('about', 'index')->name('abouts');
});

// ************************ Sports  ************************ //
Route::resource('sports', RentalsController::class);
Route::controller(RentalsController::class)->group(function () {
    Route::get('sports', 'index')->name('sports');
    Route::get('sports-details/{slug}/{id}', 'inner')->name('sportinner');
});

// ************************ Tours  ************************ //
Route::resource('tours', ToursController::class);
Route::controller(ToursController::class)->group(function () {
    Route::get('tours', 'index')->name('tours');
    Route::get('tours-details/{slug}/{id}', 'inner')->name('tourinner');
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
    Route::post('subscribe', 'subscribe')->name('subscribe.form');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin', 'auth']], function () {
});


Route::group(['prefix' => 'vendor', 'middleware' => ['is_vendor', 'auth']], function(){
    dd("worknig");
    Route::get('/profile', [VendorController::class, 'profile'])->name('vendor.profile');
    Route::post('/upload/certificate', [VendorController::class, 'uploadCertificate'])->name('vendor.upload.certificate');
    Route::post('/certificate/delete', [VendorController::class, 'uploadCertificateDelete'])->name('vendor.certificate.delete');
    Route::post('/profile/update', [VendorController::class, 'profileUpdate'])->name('vendor.profile.update');
    Route::post('/categories', [VendorController::class, 'businessCategories'])->name('vendor.business.categories');
    Route::get('/dashboard', [VendorController::class, 'vendorDashboard'])->name('vendor.dashboard');
    Route::resource('rental', VendorRentalsController::class, ['names' => 'vendor.rental']);
    Route::post('vendor/rental/delete/images', [VendorRentalsController::class, 'vendorFilesDelete'])->name('vendor.rental.delete.images');
});