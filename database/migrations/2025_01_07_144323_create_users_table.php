<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->string('name'); // Nom de l'utilisateur
            $table->string('email')->unique(); // Email unique
            $table->string('password'); // Mot de passe
            $table->enum('role', ['admin', 'user'])->default('user'); // Rôle de l'utilisateur (admin ou user)
            $table->rememberToken(); // Token pour se souvenir de l'utilisateur
            $table->timestamps();
        });

         // Créer un utilisateur par défaut
         User::create([
            'role' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Assurez-vous de hacher le mot de passe

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
