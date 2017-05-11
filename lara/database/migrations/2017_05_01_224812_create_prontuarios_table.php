<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProntuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numeroDoProntuario',4);            
            $table->string('idadeDoPaciente',4);
            $table->string('nomeDoPaciente',60);
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
        Schema::drop('prontuarios');
    }
}
