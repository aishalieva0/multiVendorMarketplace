<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['frontend.includes.header', 'frontend.includes.footer'], function ($view) {

            $product_categories = ProductCategory::where('status', '1')->get();

            $view->with([
                'product_categories' => $product_categories
            ]);
        });
    }

}
