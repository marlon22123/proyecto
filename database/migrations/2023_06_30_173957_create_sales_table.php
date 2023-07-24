<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Sale;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->decimal('net',9,3);
            $table->decimal('tax',9,3);
            $table->decimal('discount',9,3);
            $table->decimal('subtotal',9,3);
            $table->decimal('total',9,3);
            $table->decimal('cash',9,3);//efectivo recibido
            $table->decimal('change',9,3);//cambio a devolver
            $table->enum('status',[Sale::REGISTRADO,Sale::ANULADO,Sale::FACTURADO]);//1=registrado, 2=dacturado, 3=anulado
            $table->enum('type',[Sale::LIBRE,Sale::TERCERO]);//1=libre, 2=tercero
            $table->text('observation')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('patient_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
