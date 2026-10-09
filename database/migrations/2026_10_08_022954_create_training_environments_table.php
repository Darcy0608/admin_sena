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
        Schema::create('training_environments', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code')->unique();
            $table->string('type');
            $table->integer('capacity');
            $table->string('location');
            $table->string('status')->default('Disponible');

            // Agregamos el campo de la foto 
            $table->string('urlFoto')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_environments');
    }
};
