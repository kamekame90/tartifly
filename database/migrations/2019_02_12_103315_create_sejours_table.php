<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSejoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejours', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('libelle',100);
          $table->string('description',300);
          $table->integer('dure');
          $table->boolean('disponibilite');
          $table->float('cout', 8, 2);
          $table->string('photo',100);
          $table->string('pays',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejours');
    }
}
