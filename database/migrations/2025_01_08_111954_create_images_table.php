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
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->unsignedBigInteger('annonce_id'); // Clé étrangère vers la table annonces
            $table->string('path'); // Chemin vers l'image
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade'); // Relation avec l'annonce
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
