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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto')->nullable();
            $table->string('marca')->nullable();
            $table->string('categoria')->nullable();
            $table->decimal('valor_compra', 8, 2)->nullable();
            $table->decimal('valor_venda', 8, 2)->nullable();
            $table->integer('qtd_estoque')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
