<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('nota', function (Blueprint $table) {
            // Mudar a coluna de decimal para integer
            $table->integer('totalNota')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nota', function (Blueprint $table) {
            // Voltar a coluna para decimal
            $table->decimal('totalNota', 8, 2)->change();
        });
    }
};
