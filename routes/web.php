<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PageController::class)->as('web.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
});
Route::controller(PageController::class)->prefix('private-banking')->as('web.private-banking.')->group(function () {
    Route::get('/the-partnership', '')->name('the-partnership');
});
Route::controller(PageController::class)->prefix('our-firm')->as('web.our-firm.')->group(function () {
    Route::get('/the-partnership', '')->name('the-partnership');
    Route::get('/our-mission-and-profile', '')->name('our-mission-and-profile');
    Route::get('/sustainability', '')->name('sustainability');
    Route::get('/philanthropy', '')->name('philanthropy');
    Route::get('/policies-and-disclosure', '')->name('policies-and-disclosure');
});
