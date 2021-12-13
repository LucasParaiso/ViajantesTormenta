<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magias', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ficha_id');

            $table->string('nome');
            $table->string('circulo');
            $table->string('execucao')->nullable();
            $table->string('alcance')->nullable();
            $table->string('alvo')->nullable();
            $table->string('area')->nullable();
            $table->string('duracao')->nullable();
            $table->string('resistencia')->nullable();
            $table->text('descricao');
            
            $table->timestamps();
            $table->foreign('ficha_id')
                ->references('id')
                ->on('fichas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magias');
    }
}
