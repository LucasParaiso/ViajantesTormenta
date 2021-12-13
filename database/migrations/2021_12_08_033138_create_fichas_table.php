<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome");
            $table->integer("nivel")->default(1);
            $table->string("raca")->nullable();
            $table->string("classe")->nullable();
            $table->string("origem")->nullable();
            $table->string("deus")->nullable();
            $table->string("deslocamento")->default('9m (6q)');
            $table->integer("defesa")->default(0);
            $table->integer("rd")->default(0);
            $table->integer("vida_atual")->default(0);
            $table->integer("vida_max")->default(1);
            $table->integer("mana_atual")->default(0);
            $table->integer("mana_max")->default(1);
            $table->string("imagem_personagem");
            $table->string("imagem_pet");
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
        Schema::dropIfExists('fichas');
        Schema::dropIfExists('atributos');
    }
}
