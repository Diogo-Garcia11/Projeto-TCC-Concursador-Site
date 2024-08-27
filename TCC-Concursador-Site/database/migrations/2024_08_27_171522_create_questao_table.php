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
        Schema::create('questao', function (Blueprint $table) {
            $table->id('idQuestao'); // AUTO_INCREMENT é implícito com o método id()
            $table->string('textoQuestao', 2000);
            $table->string('materiaQuestao', 25);
            $table->string('categoriaQuestao', 15);
            $table->string('imagemQuestao', 100)->nullable();
            $table->timestamps(); // Adiciona created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questao');
    }
};
