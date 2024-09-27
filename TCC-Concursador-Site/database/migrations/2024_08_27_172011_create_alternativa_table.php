<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alternativa', function (Blueprint $table) {
            $table->id('idAlternativa'); // AUTO_INCREMENT é implícito com o método id()
            $table->string('textoAlternativa', 255)->nullable();
            $table->boolean('corretaAlternativa');
            $table->string('imagemAlternativa', 200)->nullable();
            $table->unsignedBigInteger('idQuestao'); // Tipo da chave estrangeira deve ser compatível com a tabela referenciada
            $table->foreign('idQuestao')->references('idQuestao')->on('questao')->onDelete('cascade'); // Define a chave estrangeira

            $table->timestamps(); // Adiciona created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternativa');
    }
};
