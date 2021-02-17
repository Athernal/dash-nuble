<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->primary('id');
            $table->string('nombre');
            $table->foreign('id_objetivo')->references('id')->on('objetivos_relacionados');
            $table->string('periodicidad');
            $table->string('productoEstadistico');
            $table->integer('horaporPersona');
            $table->integer('volumen');
            $table->integer('personasAsignadas');
            $table->integer('totalHoras');
            $table->string('cargo');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->foreign('id_unidad')->references('id')->on('unidads');
            $table->boolean('estado')->default(false);
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
        Schema::dropIfExists('actividads');
    }
}
