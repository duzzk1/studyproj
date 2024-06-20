<?php

use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Models\Store;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [InvoiceController::class, 'getInvoices'])->middleware('auth', 'verified')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('stores', StoreController::class);
});

Route::get('/admin/invoices', [InvoiceController::class, 'index'])->name('admin.invoices.index');
Route::delete('/admin/invoices/{invoice}/cancel', [InvoiceController::class, 'cancel'])->name('admin.invoices.cancel');
Route::get('/admin/invoices/create', [InvoiceController::class, 'create'])->name('admin.invoices.create');
Route::post('/admin/invoices/newInvoice', [InvoiceController::class, 'newInvoice'])->name('admin.invoices.newInvoice');
