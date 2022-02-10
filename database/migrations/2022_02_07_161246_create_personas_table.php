<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_primer');
            $table->string('nombre_segundo')->nullable();
            $table->string('apellido_primer');
            $table->string('apellido_segundo')->nullable();
            $table->string('tipo_documento');
            $table->string('nro_documento');
            $table->string('sitio');
            $table->dateTimeTz('fecha_nacimiento');
            $table->dateTimeTz('fecha_primera');
            $table->string("qr");

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
        Schema::dropIfExists('personas');
    }
}
