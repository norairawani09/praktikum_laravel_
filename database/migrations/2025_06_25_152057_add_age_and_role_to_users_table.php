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
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom usia setelah kolom email
            $table->integer('usia')->nullable()->after('email');

            // Menambahkan kolom role setelah kolom usia
            $table->string('role')->default('user')->after('usia');
        });
    }

    /**
     * Reverse the migrations.
     */
     public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['usia', 'role']);
        });
    }
};
