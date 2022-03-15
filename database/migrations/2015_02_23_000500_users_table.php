<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class usersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {    
            $table->id('usu_id');
            $table->string('usu_nombre');
            $table->string('usu_apellido');
            $table->string('usu_cedula')->unique();
            $table->string('usu_telefono');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('usu_estado')->default(1);

            $table->timestamps();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable(); 
            $table->foreignId('car_id')->references('car_id')->on('cargo')->default(1);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
