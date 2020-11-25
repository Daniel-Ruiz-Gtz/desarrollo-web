<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrabacionTemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grabacion_tema', function (Blueprint $table) {
            $table->foreignId('grabacion_id')->references('id')->on('grabaciones')->onDelete('cascade');
            $table->foreignId('tema_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grabacion_tema');
    }
}
