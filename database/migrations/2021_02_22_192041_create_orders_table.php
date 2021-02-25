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
            $table->foreignId('product_id');
            $table->foreignId('user_id');
            $table->integer('order_amount');
            $table->integer('courier_cost');
            $table->boolean('compacted_shipment'); //? Untuk 2 atau lebih jenis barang yang dikirim dari store yang sama
            $table->bigInteger('total_product_price');
            $table->integer('checkout_ke');
            $table->integer('status')->default(1);
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
