<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\produkController;

//Route Admin
Route::get('home', 'App\Http\Controllers\AdminController@index');
Route::get('produk-terjual', 'App\Http\Controllers\produkTerjualController@index');

Route::get('/', function () {
    return view('login');
});
//end Route Admin

//Route Produk

Route::get('produk', [produkController::class, 'index'])->name('produk.produk');
Route::get('stokproduk', function () {
    return view('produk.stock-produk');
});

// end Route Produk


//Route Supplier
Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.supplier');
Route::get('create-supplier', [SupplierController::class, 'create'])->name('supplier.create-supplier');
Route::post('save-supplier', [SupplierController::class, 'store'])->name('supplier.simpan-supplier');
//end Route Supplier

//Route Pelanggan
Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.pelanggan');
Route::get('create-pelanggan', [PelangganController::class, 'create'])->name('pelanggan.create-pelanggan');
Route::post('save-pelanggan', [PelangganController::class, 'store'])->name('pelanggan.simpan-pelanggan');
//end Route Pelanggan