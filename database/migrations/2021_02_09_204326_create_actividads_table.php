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
            $table->id();
            $table->string('nombre');
            $table->bigInteger('id_objetivo')->unsigned();
            $table->foreign('id_objetivo')->references('id')->on('objetivos_relacionados');
            $table->string('periodicidad');
            $table->string('productoEstadistico');
            $table->float('horaporPersona');
            $table->integer('volumen');
            $table->integer('personasAsignadas');
            $table->float('totalHoras');
            $table->string('cargo');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->bigInteger('id_unidad')->unsigned();
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
