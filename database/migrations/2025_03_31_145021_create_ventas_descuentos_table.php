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
        Schema::create('ventas_descuentos', function (Blueprint $table) {
            $table->integer('id_venta_descuento')->primary();
            $table->integer('id_venta')->nullable()->index('id_venta');
            $table->integer('id_promocion')->nullable()->index('id_promocion');
            $table->decimal('descuento_aplicado', 10)->nullable();
            $table->enum('tipo_descuento', ['porcentaje', 'fijo'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_descuentos');
    }
};
