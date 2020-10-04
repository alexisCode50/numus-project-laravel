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
            $table->string('size_land'); // tamaño de terreno
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('garage');
            $table->text('map'); // iframe
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
        Schema::dropIfExists('details');
    }
}
