<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePericiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pericias', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ficha_id');
            
            $table->string('nome');
            $table->string('atributo');
            $table->integer('bonus')->default(0);
            $table->boolean('treinado')->default(false);
            
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
        Schema::dropIfExists('pericias');
    }
}
