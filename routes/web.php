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

if (app()->environment('local'))

Route::domain(app('subdomain-hostname'))->group(function () {
    Route::get('/', \App\Http\Controllers\UserPortolioController::class);
});

//Route::view('/', 'welcome')->name('home');
Route::redirect('/', 'admin');


