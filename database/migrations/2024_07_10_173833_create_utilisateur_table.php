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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Champ pour le nom
            $table->string('telephone'); // Champ pour le téléphone
            $table->string('motpass'); // Champ pour le mot de passe
            $table->integer('codeparain')->nullable(); // Champ pour le code parrainage (nullable)         
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
