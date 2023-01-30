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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/paytap',[\App\Http\Controllers\PaytabsController::class,'paytap'])->name('paytap');
Route::get('/paytap_home',[\App\Http\Controllers\PaytabsController::class,'paytap_home'])->name('paytap_home');
Route::get('/return_paytap',[\App\Http\Controllers\PaytabsController::class,'return_paytap'])->name('return_paytap');
