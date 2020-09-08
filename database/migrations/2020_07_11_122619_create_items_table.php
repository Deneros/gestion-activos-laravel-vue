<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id_item');
            $table->string('nombre_item');
            $table->string('serial');
            $table->string('descripcion_item');
            $table->string('estado');
            $table->string('ubicacion');
            $table->string('A cargo');
            $table->unsignedBigInteger('id_subcategoria');
            $table->foreign('id_subcategoria')->references('id_subcategoria')->on('subcategorias');
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
        Schema::dropIfExists('items');
    }
}
