<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('plan_id');
          $table->unsignedInteger('cart_id');        
          $table->unsignedInteger('toy_id');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('email');
          $table->integer('contact_no');
          $table->longtext('address');
          $table->foreign('toy_id')
          ->references('id')->on('toy')
          ->onDelete('cascade');
          $table->foreign('plan_id')->references('id')->on('plan')
          ->onDelete('cascade');
          $table->foreign('cart_id')
          ->references('id')->on('cart')->
          onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
