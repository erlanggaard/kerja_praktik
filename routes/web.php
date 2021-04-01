<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/', 'App\Http\Controllers\AdminController@index');

Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.supplier');
Route::get('create-supplier', [SupplierController::class, 'create'])->name('supplier.create-supplier');