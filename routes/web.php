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
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//back
Route::prefix('admin')->group(function () {
    // Admin Login/Register Routes
    Route::get('/login', [App\Http\Controllers\backend\AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\backend\AdminController::class, 'login']);

    Route::get('/register', [App\Http\Controllers\backend\AdminController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [App\Http\Controllers\backend\AdminController::class, 'register']);

    // Admin Dashboard Routes
    Route::middleware(['auth:admin', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [App\Http\Controllers\backend\AdminController::class, 'logout'])->name('admin.logout');

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
        Route::resource('about_us', \App\Http\Controllers\backend\AboutUsController::class);
    });
});

//front
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('wishlist', WishlistController::class)->only(['index', 'store', 'destroy']);

    Route::get('checkout/shipping', [CheckoutController::class, 'shipping'])->name('checkout.shipping');
    Route::post('checkout/payment', [CheckoutController::class, 'payment'])->name('checkout.payment');
    Route::post('checkout/review', [CheckoutController::class, 'review'])->name('checkout.review');
    Route::get('checkout/complete', [CheckoutController::class, 'complete'])->name('checkout.complete');

    Route::get('product', [\App\Http\Controllers\frontend\ProductController::class, 'index'])->name('product');
    Route::get('cart', [\App\Http\Controllers\frontend\ProductController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [\App\Http\Controllers\frontend\ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [\App\Http\Controllers\frontend\ProductController::class, 'update'])->name('update.cart');
    Route::DELETE('remove-from-cart/{id}', [\App\Http\Controllers\frontend\ProductController::class, 'remove'])->name('remove.from.cart');

    Route::get('myaccount', [AccountController::class, 'index'])->name('account');

});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('shop_detail', [ShopController::class, 'show'])->name('shopdetail');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog_detail/{id}', [BlogController::class, 'show'])->name('blogdetail');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('product-category', [ShopController::class, 'categories'])->name('product_cat');
