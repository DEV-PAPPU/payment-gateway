<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorprayController;

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
    return view('razorpay');
});


Route::get('razorpay-payment', [RazorprayController::class, 'index']);
Route::post('razorpay-payment', [RazorprayController::class, 'store'])->name('razorpay.store');