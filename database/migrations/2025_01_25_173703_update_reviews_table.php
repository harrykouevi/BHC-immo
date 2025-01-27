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
            if (!Schema::hasColumn('reviews', 'comment')) {
                $table->text('comment');
            }

            if (Schema::hasColumn('reviews', 'content')) {
                $table->dropColumn('content');
            }

            if (Schema::hasColumn('reviews', 'rating')) {
                $table->dropColumn('rating');
            }

            if (!Schema::hasColumn('reviews', 'name')) {
                $table->string('name');
            }

            if (!Schema::hasColumn('reviews', 'email')) {
                $table->string('email');
            }

            if (!Schema::hasColumn('reviews', 'phone')) {
                $table->string('phone');
            }

         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
