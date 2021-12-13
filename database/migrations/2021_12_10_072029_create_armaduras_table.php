<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmadurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armaduras', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ficha_id');

            $table->string('nome');
            $table->integer('defesa');
            $table->integer('penalidade');

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
        Schema::dropIfExists('armaduras');
    }
}
