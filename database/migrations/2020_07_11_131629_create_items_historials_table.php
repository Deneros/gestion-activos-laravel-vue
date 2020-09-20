<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_historial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_item');
            $table->foreign('id_item')->references('id')->on('items');
            $table->unsignedBigInteger('id_historial');
            $table->foreign('id_historial')->references('id')->on('historiales');
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
        Schema::dropIfExists('items_historials');
    }
}
