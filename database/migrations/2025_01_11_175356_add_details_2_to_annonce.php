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
            $table->text('content_')->nullable(); // Description détaillée
            $table->text('contacts_')->nullable(); // Description détaillée
            $table->string('phone_number')->nullable(); // Permettre les valeurs nulles
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('annonces', function (Blueprint $table) {
            $table->dropColumn(['content_','contacts_','phone_number']);
        });
    }
};
