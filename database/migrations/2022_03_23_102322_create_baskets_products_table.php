<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets_products', function (Blueprint $table) {
            $table->unsignedBigInteger('basket_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('quantity');

            $table->foreign('basket_id')
                ->references('id')
                ->on('baskets')
                ->cascadeOnDelete();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baskets_products');
    }
};
