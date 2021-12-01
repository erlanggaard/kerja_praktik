<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\stokprodukController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfilController;
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
    Route::get('produk-tidakterjual', 'App\Http\Controllers\produkTidakterjualController@index');

    Route::get('best_seller', 'App\Http\Controllers\bestSellerController@index');
    //end Route Admin

    //Route chat whatsapp
    Route::get('formchat', 'App\Http\Controllers\controllerWhatsapp@index');


    Route::get('send', function () {
        return view('whatsapp/send');
    });

    //end route chat whatsapp

    // Route Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    // end Route Logout

    //Route Produk
    Route::get('produk', [produkController::class, 'index'])->name('produk.produk');
    Route::get('produk/{id}', [produkController::class, 'show'])->name('produk.produkdetail');
    Route::get('create', [produkController::class, 'create'])->name('produk.create');
    Route::post('save-produk', [produkController::class, 'store'])->name('produk.simpan-produk');
    Route::get('edit/{id}', [produkController::class, 'edit'])->name('supplier.edit');
    Route::put('update-produk/{id}', [produkController::class, 'update'])->name('produk.update-produk');
    Route::delete('delete-produk/{id}', [produkController::class, 'destroy'])->name('produk.delete-produk');
    // end Route Produk

    // Route Stock Produk
    Route::get('stokproduk', [stokprodukController::class, 'index'])->name('produk.stock-produk');
    // end Route Stock Produk

    //Route Supplier
    Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.supplier');
    Route::get('create-supplier', [SupplierController::class, 'create'])->name('supplier.create-supplier');
    Route::post('save-supplier', [SupplierController::class, 'store'])->name('supplier.simpan-supplier');
    Route::get('edit-supplier/{id}', [SupplierController::class, 'edit'])->name('supplier.edit-supplier');
    Route::put('update-supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update-supplier');
    Route::delete('delete-supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.delete-supplier');
    //end Route Supplier

    //Route Pelanggan
    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.pelanggan');
    Route::get('create-pelanggan', [PelangganController::class, 'create'])->name('pelanggan.create-pelanggan');
    Route::post('save-pelanggan', [PelangganController::class, 'store'])->name('pelanggan.simpan-pelanggan');
    Route::get('edit-pelanggan/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit-pelanggan');
    Route::put('update-pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update-pelanggan');
    Route::delete('delete-pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.delete-pelanggan');
    //end Route Pelanggan

    // Route Profil
    Route::get('profil', [ProfilController::class, 'show'])->name('profil.view');
    Route::get('edit', [ProfilController::class, 'edit'])->name('profil.edit-profil');
    Route::put('update-profil', [ProfilController::class, 'update'])->name('profil.submit');
    Route::post('update-profil', [ProfilController::class, 'update'])->name('profil.submit');
    //end Route Profil
});
