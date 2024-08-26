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
        Schema::create('bicicleta_tipo', function (Blueprint $table) {
            $table->id(); //el PK de tipo ID

            $table ->String(column: 'codigo', length:8);
            $table ->String(column: 'nombre', length:35);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicicleta_tipo');
    }
};
