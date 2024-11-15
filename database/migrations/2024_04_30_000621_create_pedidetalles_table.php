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
        Schema::create('pedidetalles', function (Blueprint $table) {
            $table->id();
            $table->decimal('Cantidad',7,2);
            $table->decimal('descuento',7,2);
            $table->decimal('Precio_Total',7,2);
            $table->timestamps();

            $table->foreignId('id_pedidos')
            ->nullable()
            ->constrained('pedidos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_products')
            ->nullable()
            ->constrained('products')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidetalles');
    }
};
