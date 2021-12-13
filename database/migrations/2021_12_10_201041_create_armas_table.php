<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ficha_id');

            $table->string('nome');
            $table->string('atributo');
            $table->string('pericia');
            $table->integer('ataque_bonus');
            $table->integer('dano_bonus');
            $table->string('dano');
            $table->string('critico');

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
        Schema::dropIfExists('armas');
    }
}
