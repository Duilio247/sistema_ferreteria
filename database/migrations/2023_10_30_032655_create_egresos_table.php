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
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->integer('cliente_id')->nullable();
            $table->string('serie');
            $table->string('numero');
            $table->string('fecha');
            $table->decimal('impuesto', 4, 2);
            $table->string('total');
            $table->decimal('total_impuesto', 10, 2);
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresos');
    }
};
