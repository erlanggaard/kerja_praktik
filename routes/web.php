<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\stokprodukController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

// Route Login
Route::get('login', [AuthController::class, 'show']);
Route::get('/', [AuthController::class, 'show']);
Route::post('login', [AuthController::class, 'login'])->name('login');
// end Route Login

Route::middleware(['auth'])->group(function () {

    //Route Admin
    Route::get('home', 'App\Http\Controllers\AdminController@index')->name('home');
    Route::get('produk-terjual', 'App\Http\Controllers\produkTerjualController@index');
    Route::get('detail-produk-terjual', function () {
        return view('halaman_admin/detail_produk_terjual');
    });
    //end Route Admin

    // Route Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    // end Route Logout

    //Route Produk
    Route::get('produk', [produkController::class, 'index'])->name('produk.produk');
    Route::get('stokproduk', [stokprodukController::class, 'index'])->name('produk.stock-produk');
    // end Route Produk


    //Route Supplier
    Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.supplier');
    Route::get('create-supplier', [SupplierController::class, 'create'])->name('supplier.create-supplier');
    Route::post('save-supplier', [SupplierController::class, 'store'])->name('supplier.simpan-supplier');
    Route::get('edit-supplier', [SupplierController::class, 'edit'])->name('supplier.edit-supplier');
    //end Route Supplier

    //Route Pelanggan
    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.pelanggan');
    Route::get('create-pelanggan', [PelangganController::class, 'create'])->name('pelanggan.create-pelanggan');
    Route::post('save-pelanggan', [PelangganController::class, 'store'])->name('pelanggan.simpan-pelanggan');
    //end Route Pelanggan
});
