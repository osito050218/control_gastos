<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ValoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores', function (Blueprint $table) {
            $table->id('val_id');
            $table->string('val_cantidad');
            $table->string('val_tipo');
            $table->string('val_fecha');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('tip_id')->references('tip_id')->on('tipo');



        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valores');
    }
}
