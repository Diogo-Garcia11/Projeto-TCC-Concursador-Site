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
        Schema::create('nota', function (Blueprint $table) {
            $table->id('idNota'); // AUTO_INCREMENT é implícito com o método id()
            $table->dateTime('dataNota');
            $table->decimal('totalNota', 7, 2);
            $table->string('categoriaNota', 15);
            $table->unsignedBigInteger('idUser'); // Tipo da chave estrangeira deve ser compatível com a tabela referenciada
            
            // Define a chave estrangeira
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps(); // Adiciona created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota');
    }
};
