<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('Id_Usuario');
            $table->string('Tipo_Usuario');
            $table->string('Tipo_Identificacion');
            $table->bigInteger('No_Identificacion');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Cargo');
            $table->bigInteger('Telefono');
            $table->string('Email')->unique();
            $table->string('Contrasena');
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
        Schema::dropIfExists('usuarios');
    }
}
