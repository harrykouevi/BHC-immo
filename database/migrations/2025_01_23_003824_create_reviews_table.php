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
        // Check if the 'annonces' table already exists
        if (!Schema::hasTable('reviews')) {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_id'); // Référence à l'annonce
            $table->unsignedBigInteger('user_id'); // Référence au client
            $table->text('name'); // Nom du client
            $table->string('email'); // Email du client
            $table->integer('phone'); // Numerodu telephone
            $table->text('comment'); // Contenu de l'avis
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
