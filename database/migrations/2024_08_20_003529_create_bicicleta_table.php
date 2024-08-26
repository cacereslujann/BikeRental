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
        Schema::create('bicicleta', function (Blueprint $table) {
            $table->id();
            
            $table->String(column: 'serial')->nullable();
            $table->String(column: 'marca')->nullable();
            $table->String(column: 'color')->nullable();
            $table->boolean(column: 'activo');
            
            $table->foreignId(column: 'bicicleta_tipo_id')
                ->constrained(table: 'bicicleta_tipo',
                    column: 'id',
                    indexName: 'bicicleta_bicicleta_tipo_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicicleta');
    }
};
