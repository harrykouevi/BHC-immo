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

        Schema::create('annonces', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->string('titre'); // Titre de l'annonce
            $table->text('description'); // Description détaillée
            $table->decimal('prix', 10, 2); // Prix de l'annonce
            $table->integer('surface'); // Surface en m²
            $table->string('adresse'); // Adresse de l'annonce
            $table->unsignedBigInteger('category_id'); // Clé étrangère vers la table categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Relation avec la catégorie
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
