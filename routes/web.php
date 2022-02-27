<?php

use App\Models\Currency;
use App\Models\PaymentPlatform;
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

Route::get('/currencies', function () {
    return Currency::all();
});

Route::get('/laravelPayments', function () {
    return PaymentPlatform::all();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/payments/pay', [App\Http\Controllers\PaymentController::class, 'pay'])->name('pay');
Route::get('/payments/approval', [App\Http\Controllers\PaymentController::class, 'approval'])->name('approval');
Route::get('/payments/cancelled', [App\Http\Controllers\PaymentController::class, 'cancelled'])->name('cancelled');
