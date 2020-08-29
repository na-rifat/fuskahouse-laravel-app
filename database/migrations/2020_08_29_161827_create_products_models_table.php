<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_models', function (Blueprint $table) {
            $table->id();
            $table->text('customer_mobile');
            $table->text('customer_ip');
            $table->text('order_condition');
            $table->text('delivery_time');            
            $table->text('order_confirm_code');
            $table->text('delivery_location')->nullable();
            $table->double('latitude', 15, 20)->nullable();
            $table->double('longitude', 15, 20)->nullable();
            $table->double('order_amount', 15, 20);            
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
        Schema::dropIfExists('products_models');
    }
}
