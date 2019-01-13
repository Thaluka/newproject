<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('purchase_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->integer('type_id')->unsigned();
            $table->string('product_name');
            $table->string('purchase_date');
            $table->string('price');
            $table->string('warranty');

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
        Schema::dropIfExists('purchase_products');
    }
}
