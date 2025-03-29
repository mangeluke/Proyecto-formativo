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
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('id_venta')->primary();
            $table->integer('id_cliente')->nullable()->index('id_cliente');
            $table->decimal('total', 10)->nullable();
            $table->decimal('descuento_aplicado', 10)->nullable()->default(0);
            $table->timestamp('fecha_venta')->useCurrent();
            $table->string('estado', 50)->nullable()->default('Pendiente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
