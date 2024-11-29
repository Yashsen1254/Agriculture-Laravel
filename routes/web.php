<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CartController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CheckoutController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CartController as FrontendCartController;
use App\Http\Controllers\Frontend\CheckoutController as FrontendCheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ShopController;
use Illuminate\Support\Facades\Route;

//frontend routes
Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/cart', [FrontendCartController::class, 'index']);
Route::get('/checkout', [FrontendCheckoutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);


//backend routes

//admin routes
Route::get('/admin/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/admin/{id}', [AdminController::class, 'update'])->name('admin.update'); 
Route::get('/admin/admin/{id}/delete', [AdminController::class, 'delete'])->name('admin.delete');

//category routes
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('category.update'); 
Route::get('/admin/category/{id}/delete', [CategoryController::class, 'delete'])->name('category.delete');


//checkout routes
Route::get('/admin/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
//client routes
Route::get('/admin/client', [ClientController::class, 'index'])->name('client.index');
//cart routes
Route::get('/admin/cart', [CartController::class, 'index'])->name('cart.index');
//order routes
Route::get('/admin/order', [OrderController::class, 'index'])->name('order.index');
//payment routes
Route::get('/admin/payment', [PaymentController::class, 'index'])->name('payment.index');