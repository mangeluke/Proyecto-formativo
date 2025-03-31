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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_usuario')->primary();
            $table->string('nombre_usuario', 100)->nullable();
            $table->string('email', 100)->nullable()->unique('email');
            $table->string('password')->nullable();
            $table->integer('id_rol')->nullable()->index('id_rol');
            $table->timestamp('fecha_registro')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
