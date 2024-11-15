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
            $table->string('contextoQuestao', 2000)->nullable();
            $table->string('introducaoalternativaQuestao', 2000);
            $table->string('materiaQuestao', 25)->nullable();
            $table->string('categoriaQuestao', 15);
            $table->string('imagemQuestao', 255)->nullable();
            $table->integer('anoQuestao')->nullable();
            $table->integer('numeroQuestao')->nullable();
            $table->timestamps(); // Adiciona created_at e updated_at

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
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
