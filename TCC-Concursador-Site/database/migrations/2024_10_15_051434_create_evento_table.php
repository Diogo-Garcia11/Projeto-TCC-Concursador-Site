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
        Schema::create('evento', function (Blueprint $table) {
            $table->id('idEvento'); // Equivalente ao campo 'id INT AUTO_INCREMENT PRIMARY KEY'
            $table->date('dataEvento'); // Campo 'data DATE NOT NULL'
            $table->string('descricaoEvento', 255); // Campo 'descricao VARCHAR(255) NOT NULL'
            $table->timestamps(); // Adiciona os campos 'created_at' e 'updated_at'

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
};
