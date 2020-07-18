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
            $table->bigIncrements('Id_Item');
            $table->string('Nombre_Item');
            $table->string('Descripcion_Item');
            $table->string('Estado');
            $table->string('Ubicacion');
            $table->unsignedBigInteger('Id_Subcategoria');
            $table->foreign('Id_Subcategoria')->references('Id_Subcategoria')->on('subcategorias');
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
