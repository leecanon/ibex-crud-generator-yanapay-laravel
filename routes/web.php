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

Auth::routes();

Route::resource('clients', App\Http\Controllers\ClientController::class)->middleware('auth'); 
Route::resource('payments-types', App\Http\Controllers\PaymentsTypeController::class)->middleware('auth'); 
Route::resource('dues', App\Http\Controllers\DueController::class)->middleware('auth'); 
Route::resource('loans', App\Http\Controllers\LoanController::class)->middleware('auth'); 
Route::resource('customer-details', App\Http\Controllers\CustomerDetailController::class)->middleware('auth'); 
Route::resource('investments', App\Http\Controllers\InvestmentController::class)->middleware('auth'); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
