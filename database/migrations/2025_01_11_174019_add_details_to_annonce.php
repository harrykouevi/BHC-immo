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
        Schema::table('annonces', function (Blueprint $table) {
            $table->integer('nb_pieces')->nullable();
            $table->integer('nb_salon')->nullable();
            $table->boolean('wc_douche')->default(false);


            $table->text('description')->nullable()->change(); // Description détaillée
            $table->decimal('prix', 10, 2)->default(0)->change(); // Prix de l'annonce
            $table->integer('surface')->nullable()->change(); // Surface en m²
            $table->string('adresse')->nullable()->change(); // Adresse de l'annonce
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('annonces', function (Blueprint $table) {
            //
            $table->dropColumn(['nb_pieces', 'nb_salon', 'wc_douche']);
        });
    }
};
