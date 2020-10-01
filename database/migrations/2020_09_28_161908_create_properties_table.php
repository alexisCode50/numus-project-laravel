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
            $table->string('location');
            $table->text('description');
            $table->string('type_property');
            $table->integer('price');
            $table->string('state_property'); // veneder o rentar
            $table->string('size_property'); // dimeciones de la propiedad
            $table->decimal('bedroom', 4, 2);
            $table->decimal('bathroom', 4, 2);
            $table->decimal('garage', 4, 2);
            $table->text('map'); // iframe
            $table->text('amenities'); //descripcion 2
            $table->string('profile_picture')->default('');
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
