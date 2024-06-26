<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataCustomerController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth'])->group(function(){
    Route::resource('/merk', MerkController::class);

    Route::resource('barang', BarangController::class);    
    Route::resource('data_customer', DataCustomerController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('/transaksi', TransaksiController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
