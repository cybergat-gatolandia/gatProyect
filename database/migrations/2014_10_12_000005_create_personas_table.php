<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 40);
            $table->string('apellido', 40);
            $table->string('tel',15)->nullable();
            $table->string('direccion', 80)->nullable();
            $table->string('email', 80)->nullable();
            $table->boolean('condicion')->default(1);
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
