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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 100)->nullable();
            $table->string('email', 100)->nullable()->unique('email');
            $table->string('telefono', 20)->nullable();
            $table->string('direccion')->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->string('password', 255); // Aumenta la longitud para almacenar hashes seguros
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
    
};
