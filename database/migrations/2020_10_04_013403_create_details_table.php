<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key_property')->unique();
            $table->string('size_property'); // tamaño de la propiedad (metros construidos)
            $table->string('size_land'); // area de terreno
            $table->string('front_land'); // frente del terreno
            $table->string('back_land'); // fondo del terreno
            $table->string('bedroom');
            $table->string('complete_bathroom');
            $table->string('half_baths');
            $table->string('garage');
            $table->text('map'); // iframe
            $table->integer('pool')->default(0);
            $table->integer('adviser_id');
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
        Schema::dropIfExists('details');
    }
}
