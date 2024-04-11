<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/booking', function(){
    return view('newappointment');
})->middleware(['auth', 'verified'])->name('booking');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [AdminController::class,'index'])->middleware(['auth', 'admin', 'verified'])->name('admin/dashboard');

route::get('superadmin/dashboard', [SuperAdminController::class,'index'])->middleware(['auth', 'superadmin', 'verified'])-> name('superadmin/dashboard');

route::put('superadmin/update/{id}', [SuperAdminController::class, 'update'])->middleware(['auth', 'superadmin', 'verified'])->name('superadmin/update');

route::get('superadmin/delete/{id}', [SuperAdminController::class, 'destroy'])->middleware(['auth', 'superadmin','verified'])->name('superadmin/delete');