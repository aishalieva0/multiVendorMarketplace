<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('overview', 255);
            $table->string('description', 200);
            $table->string('image', 200)->nullable();
            $table->string('badge', 255);
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->tinyInteger('offer')->default(0); //homepage offers
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->integer('stock_count')->default(0);
            $table->foreignId('vendor_id')->constrained('vendors')->onDelete('cascade');
            $table->foreignId('cat_id')->constrained('product_categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->string('url')->unique();
            $table->tinyInteger('status');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
