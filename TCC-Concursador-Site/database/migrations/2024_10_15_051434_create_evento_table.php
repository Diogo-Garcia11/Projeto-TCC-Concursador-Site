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
            $table->id(); // Equivalente ao campo 'id INT AUTO_INCREMENT PRIMARY KEY'
            $table->date('data'); // Campo 'data DATE NOT NULL'
            $table->string('descricao', 255); // Campo 'descricao VARCHAR(255) NOT NULL'
            $table->timestamps(); // Adiciona os campos 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
