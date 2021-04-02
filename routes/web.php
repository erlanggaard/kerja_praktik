<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;

Route::get('/', 'App\Http\Controllers\AdminController@index');

Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.supplier');
Route::get('create-supplier', [SupplierController::class, 'create'])->name('supplier.create-supplier');
Route::post('save-supplier', [SupplierController::class, 'store'])->name('supplier.simpan-supplier');

Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.pelanggan');
Route::get('create-pelanggan', [PelangganController::class, 'create'])->name('pelanggan.create-pelanggan');
Route::post('save-pelanggan', [PelangganController::class, 'store'])->name('pelanggan.simpan-pelanggan');