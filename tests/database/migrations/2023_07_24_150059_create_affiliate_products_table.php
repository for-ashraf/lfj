<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_products', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('product_name');
            $table->text('product_description')->nullable();
            $table->decimal('product_price', 10, 2)->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_url')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_brand')->nullable();
            $table->decimal('product_rating', 3, 2)->nullable();
            $table->integer('product_reviews')->nullable();
            $table->string('product_affiliate_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affiliate_products');
    }
}
