<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      public function up()
    {
      Schema::create('estates', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('property_type');
        $table->integer('status');
        $table->string('land_size');
        $table->string('house_size');
        $table->integer('construction_type');
        $table->integer('living_rooms');
        $table->integer('bedrooms');
        $table->integer('baths');
        $table->integer('kitchens');
        $table->string('furniture');
        $table->string('price');
        $table->string('location');
        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('estates');
  }
}
