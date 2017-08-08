<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disciplina_id');
            $table->integer('aluno_id');

            $table->float('prova_1');
            $table->float('prova_2');
            $table->float('prova_3');
            $table->float('prova_4');

            $table->float('prova_rec');
            $table->float('media_final');
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
        Schema::dropIfExists('notas');
    }
}
