<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key')->unique();
            $table->string('title');
            $table->string('direction');
            $table->integer('location_id');
            $table->text('description');
            $table->string('type_property');
            $table->integer('price');
            $table->string('state_property'); // veneder o rentar
            $table->string('size_property'); // tamaño de la propiedad (metros construidos)
            $table->string('size_land'); // tamaño de terreno
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('garage');
            $table->text('map'); // iframe
            $table->text('amenities'); //descripcion 2
            $table->string('profile_picture')->default('');
            $table->integer('outstanding')->default(0);
            $table->integer('pool')->default(0);
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
        Schema::dropIfExists('properties');
    }
}
