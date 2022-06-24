<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tarefas', function (Blueprint $table) {
            /*Chave primaria*/
            /*String 25*/
            $table->id();
            $table->integer('id_status');
            $table->string('tarefa',250);
            $table->dateTime('data_cadastro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
