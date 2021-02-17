<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorasFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas_funcionarios', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');
            $table->integer('periodo');
            $table->integer('horasTotalesPeriodo');
            $table->integer('horasAsignadasPeriodo');
            $table->foreign('horasDisponiblesPeriodo');
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
        Schema::dropIfExists('horas_funcionarios');
    }
}
