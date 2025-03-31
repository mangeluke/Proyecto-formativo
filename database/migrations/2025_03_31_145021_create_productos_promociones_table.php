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
        Schema::create('productos_promociones', function (Blueprint $table) {
            $table->integer('id_producto_promocion', true);
            $table->integer('id_producto')->nullable()->index('id_producto');
            $table->integer('id_promocion')->nullable()->index('id_promocion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_promociones');
    }
};
