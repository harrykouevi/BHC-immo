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
            Schema::create('visits', function (Blueprint $table) {
                $table->id();
                $table->string('visitor_name');
                $table->string('visitor_email')->nullable();
                $table->string('host_name');// Ajout d'une colonne pour le nom de l'hôte
                $table->timestamp('visit_date')->nullable();
                $table->text('purpose')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
