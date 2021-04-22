<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('toy_id');
          $table->integer('total_cost');
          $table->integer('quantity');
          $table->date('date_of_delivery');
          $table->date('date_of_return');
          $table->foreign('toy_id')
                ->references('id')->on('toy')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
