<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadHasFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_has_funcionarios', function (Blueprint $table) {
            $table->bigInteger('id_actividad')->unsigned();
            $table->bigInteger('id_funcionario')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividads');
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');
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
        Schema::dropIfExists('actividad_has_funcionarios');
    }
}
