<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->Integer('type_id');
            //$table->foreign('type_id')->references('type_id')->on('types');
            $table->string('message');
            $table->string('image')->nullable();
            $table->string('address');
            $table->string('region');
            $table->string('user_email');
            $table->Integer('user_id');
           // $table->foreign('user_id')->reference('id')->on('users');
            $table->string('status');
            $table->string('technician_email')->nullable();
           // $table->foreign('technician_email')->references('email')->on('technicians');
            $table->string('remember_token');
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
        Schema::dropIfExists('complains');
    }
}
