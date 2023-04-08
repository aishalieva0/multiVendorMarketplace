<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Vendor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        //$this->call(UserSeeder::class);

        Brand::factory(10)->create();
        Vendor::factory(20)->create();
        Product::factory(20)->create();
        ProductCategory::factory(20)->create();
    }
}
