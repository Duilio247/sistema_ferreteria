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
            $table->unsignedBigInteger('tipo_documento_id');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->string('serie');
            $table->string('correlativo');
            $table->string('fecha');
            $table->decimal('impuesto', 10, 2);
            $table->string('total');
            $table->decimal('total_impuesto', 10, 2);
            $table->integer('user_id')->nullable();
            $table->timestamps();
            

            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos')->cascadeOnDelete();
            $table->foreign('cliente_id')->references('id')->on('clientes')->cascadeOnDelete();
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
