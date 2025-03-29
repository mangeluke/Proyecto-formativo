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
        Schema::create('descuentos_cliente', function (Blueprint $table) {
            $table->integer('id_descuento_cliente', true);
            $table->integer('id_cliente')->nullable()->index('id_cliente');
            $table->integer('id_promocion')->nullable()->index('id_promocion');
            $table->timestamp('fecha_aplicacion')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descuentos_cliente');
    }
};
