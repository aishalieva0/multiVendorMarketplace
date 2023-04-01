<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BlogCategoriesController;
use App\Http\Controllers\backend\BrandsController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DeliveryMethodController;
use App\Http\Controllers\backend\ImagesController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderStatusController;
use App\Http\Controllers\backend\PaymentMethodController;
use App\Http\Controllers\backend\PermissonController;
use App\Http\Controllers\backend\ProductCategoriesController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\SettingsController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\vendor\VendorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





//back
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('sliders', SliderController::class);
Route::resource('banners', BannerController::class);
Route::resource('brands', BrandsController::class);
Route::resource('images', ImagesController::class);
Route::resource('settings', SettingsController::class);
Route::resource('blog_categories', BlogCategoriesController::class);
Route::resource('product_categories', ProductCategoriesController::class);
Route::resource('order_status', OrderStatusController::class);
Route::resource('orders', OrderController::class);
Route::resource('products', ProductController::class);
Route::resource('payment_methods', PaymentMethodController::class);
Route::resource('delivery_methods', DeliveryMethodController::class);
Route::resource('permissions', PermissonController::class);
Route::resource('roles', RoleController::class);
Route::resource('blogs', \App\Http\Controllers\backend\BlogController::class);


//front
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('myaccount', [AccountController::class, 'index'])->name('account');
Route::get('cart', [CartController::class, 'index'])->name('cart');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //user logged
//Route::get('/vendor', [VendorController::class, 'index'])->name('vendor'); //vender logged
