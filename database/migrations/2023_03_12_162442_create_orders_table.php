<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('delivery_method_id');
            $table->string('payment_method')->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('billing_address')->nullable();
            $table->enum('payment_status', ['paid', 'pending', 'failed'])->nullable();
            $table->decimal('subtotal', 8, 2)->default(0.00); //order total without shipping cost
            $table->decimal('shipping_fee', 8, 2)->default(0.00);
            $table->decimal('total', 8, 2)->default(0.00); //amount with shipping fees
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vendor_id')->references('id')->on('users');
            $table->foreign('delivery_method_id')->references('id')->on('delivery_methods');
            $table->json('payment_json')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
