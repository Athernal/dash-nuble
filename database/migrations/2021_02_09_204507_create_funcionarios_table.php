<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('nombre');
            $table->string('calidadJuridica');
            $table->bigInteger('id_unidad')->unsigned();
            $table->foreign('id_unidad')->references('id')->on('unidads');
            $table->string('correo');
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('funcionarios');
    }
}
