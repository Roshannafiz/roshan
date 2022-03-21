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
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->integer('pincode');
            $table->string('payment_method');
            $table->string('shipping_charges')->nullable();
            $table->float('coupon_amount')->nullable();
            $table->string('order_status');
            $table->string('grand_total');
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
