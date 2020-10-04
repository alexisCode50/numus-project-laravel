<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key')->unique();
            $table->string('title');
            $table->string('direction');
            $table->integer('location_id');
            $table->text('description');
            $table->string('type_property');
            $table->integer('price');
            $table->string('state_property'); // veneder o rentar
            $table->text('amenities'); //descripcion 2
            $table->string('profile_picture')->default('');
            $table->integer('outstanding')->default(0);
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
        Schema::dropIfExists('propiedads');
    }
}
