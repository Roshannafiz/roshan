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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('section_id');
            $table->integer('brand_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->integer('product_quantity')->default(100);
            $table->float('product_regular_price')->nullable();
            $table->float('product_seal_price');
            $table->float('product_discount')->nullable();
            $table->string('product_video')->nullable();
            $table->string('main_image');
            $table->text('short_description');
            $table->longText('description');
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->enum('is_featured', ['No', 'Yes']);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
