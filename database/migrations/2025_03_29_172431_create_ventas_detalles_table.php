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
        Schema::create('ventas_detalles', function (Blueprint $table) {
            $table->integer('id_venta_detalle')->primary();
            $table->integer('id_venta')->nullable()->index('id_venta');
            $table->integer('id_producto')->nullable()->index('id_producto');
            $table->integer('cantidad')->nullable();
            $table->decimal('precio', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_detalles');
    }
};
