<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

//frontend controller
Route::get('/', [IndexController::class, 'index']);

//backend controller

//admin controller
Route::get('/admin/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
// Route::put('/admin/admin/{id}/update', [AdminController::class, 'update'])->name('admin.update'); 
Route::put('/admin/admin/{id}', [AdminController::class, 'update'])->name('admin.update'); 
Route::get('/admin/admin/{id}/delete', [AdminController::class, 'delete'])->name('admin.delete'); 