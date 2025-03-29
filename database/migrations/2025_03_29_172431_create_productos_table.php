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
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id_producto', true);
            $table->string('nombre', 100)->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10)->nullable();
            $table->integer('stock')->nullable();
            $table->integer('id_categoria')->nullable()->index('id_categoria');
            $table->integer('id_proveedor')->nullable()->index('id_proveedor');
            $table->timestamp('fecha_agregado')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
