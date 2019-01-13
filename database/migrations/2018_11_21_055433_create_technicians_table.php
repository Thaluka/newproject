<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            //$table->increments('uid');
            $table->string('email')->unique();
            $table->string('birth');
            $table->integer('type_id');
            $table->string('bank_act',30)->unique();
            $table->string('tstatus')->nullable();
            $table->timestamps();
        });

       /* Schema::table('technicians', function (Blueprint $table) {
            $table->foreign('uid')->references('id')->on('users');
          });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technicians');
    }
}
