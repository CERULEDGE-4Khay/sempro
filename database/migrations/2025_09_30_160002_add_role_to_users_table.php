<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Pastikan tabel users sudah ada dan kolom 'role' belum ada
        if (Schema::hasTable('users') && ! Schema::hasColumn('users', 'role')) {
            // Untuk kompatibilitas SQLite, buat sebagai string (enum di SQLite bisa problematik)
            $driver = DB::getDriverName();

            if ($driver === 'sqlite') {
                Schema::table('users', function (Blueprint $table) {
                    $table->string('role')->default('magang')->after('password');
                });
            } else {
                Schema::table('users', function (Blueprint $table) {
                    $table->enum('role', ['admin', 'magang'])->default('magang')->after('password');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('users') && Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                // Perhatian: dropColumn pada SQLite kadang butuh doctrine/dbal
                $table->dropColumn('role');
            });
        }
    }
};
