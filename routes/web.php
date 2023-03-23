<?php

use App\Http\Controllers\backend\DashboardController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogCategoriesController;
use App\Http\Controllers\BrandsController;

use App\Http\Controllers\backend\DeliveryMethodController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderStatusController;
use App\Http\Controllers\backend\PaymentMethodController;
use App\Http\Controllers\backend\PermissonController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\RoleController;

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//front
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/myaccount', [AccountController::class, 'index'])->name('account');
Route::get('/cart', [CartController::class, 'index'])->name('cart');


//back

Route::resource('/sliders', SliderController::class);
Route::resource('/banners',BannerController::class );
Route::resource('/brands', BrandsController::class);
Route::resource('/images', ImagesController::class);
Route::resource('/settings', SettingsController::class);
Route::resource('/blog_categories', BlogCategoriesController::class);
Route::resource('/product_categories', ProductCategoriesController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/order_status', OrderStatusController::class);
Route::resource('/orders', OrderController::class);
Route::resource('/products', ProductController::class);
Route::resource('/payment_methods', PaymentMethodController::class);
Route::resource('/delivery_methods', DeliveryMethodController::class);
Route::resource('/permissions', PermissonController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/blogs', \App\Http\Controllers\backend\BlogController::class);
