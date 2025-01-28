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
                $table->string('approuve')->default('non');
            }
            if (Schema::hasColumn('reviews', 'user_id')) {
                // Drop the index by its name
                // $table->dropForeign(['user_id']) ; // Replace with your actual index name
                // Check if the foreign key exists before dropping it
                $this->dropForeignKeyIfExists('reviews', 'user_id');
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

    private function dropForeignKeyIfExists(string $table, string $column)
    {
        $foreignKeys = Schema::getConnection()->getDoctrineSchemaManager()->listTableForeignKeys($table);

        foreach ($foreignKeys as $foreignKey) {
            if (in_array($column, $foreignKey->getLocalColumns())) {
                Schema::table($table, function (Blueprint $table) use ($foreignKey) {
                    $table->dropForeign($foreignKey->getName());
                });
                break; // Exit after dropping the foreign key
            }
        }
    }
};
