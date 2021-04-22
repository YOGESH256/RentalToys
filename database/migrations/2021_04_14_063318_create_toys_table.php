<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toy', function (Blueprint $table) {
          $table->increments('id');
          $table->string('toy_name');
          $table->integer('cost_per_week');
          $table->integer('avail');
          $table->string('category_type_1');
          $table->string('category_type_2');
          $table->string('age-group');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toy');
    }
}
