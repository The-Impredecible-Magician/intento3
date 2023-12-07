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
        Schema::create('miguel', function (Blueprint $table) {
            $table->id();
            $table->string('cuys');
            $table->timestamps();

            $table->foreignId('id_cuys')
            ->nullable()
            ->constrained('cuys')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_perros')
            ->nullable()
            ->constrained('perros')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miguel');
    }
};
