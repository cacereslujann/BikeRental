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
        Schema::create('estacion', function (Blueprint $table) {
            $table->id();

            $table->String(column: 'nombre')->nullable();
            $table->String(column: 'latitud')->nullable();
            $table->String(column: 'longitud')->nullable();
            $table->String(column: 'direccion')->nullable();
            $table->String(column: 'observacion')->nullable();
            $table->boolean(column: 'activo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacion');
    }
};
