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
        Schema::table('reviews', function (Blueprint $table) {
           if (!Schema::hasColumn('reviews', 'reponse')) {
            $table->text('reponse')->nullable();
        }
        if (!Schema::hasColumn('reviews', 'approuve')) {
            $table->text('approuve')->default('non');
        }
        if (Schema::hasColumn('reviews', 'user_id')) {
            $table->dropColumn('user_id');
        }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); // Recréer la colonne user_id au cas où on annule la migration
        });
    }
};
