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
            $table->id(); // Campo autoincremental
        $table->string('nombre', 100)->nullable()->default('NULL');
        $table->string('email', 100)->nullable()->default('NULL')->unique();
        $table->string('telefono', 20)->nullable()->default('NULL');
        $table->string('direccion')->nullable()->default('NULL');
        $table->string('password'); // Agregar este campo
        $table->timestamp('fecha_registro')->useCurrent(); // Marca de tiempo automática
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
