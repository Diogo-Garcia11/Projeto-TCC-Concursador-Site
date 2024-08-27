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
        Schema::create('admin', function (Blueprint $table) {
            $table->id('idAdmin'); // AUTO_INCREMENT é implícito com o método id()
            $table->string('nomeAdmin', 16); // VARCHAR(16)
            $table->string('emailAdmin', 255); // VARCHAR(255)
            $table->string('senhaAdmin', 32); // VARCHAR(32)
            
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
        Schema::dropIfExists('admin');
    }
};
