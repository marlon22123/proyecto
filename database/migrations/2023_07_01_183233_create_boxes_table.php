<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Box;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('opening');
            $table->dateTime('closing')->nullable();
            $table->decimal('initial',6,2);
            $table->decimal('final',6,2)->default(0.00);
            $table->string('observation',100)->nullable();
            $table->enum('status',[Box::ABIERTO,Box::CERRADO]);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boxes');
    }
};
