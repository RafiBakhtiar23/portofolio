<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            // kalau sebelumnya ada kolom image (single image)
            if (Schema::hasColumn('projects', 'image')) {
                $table->dropColumn('image');
            }

            // tambahkan kolom images (multi image)
            if (!Schema::hasColumn('projects', 'images')) {
                $table->json('images')->nullable()->after('project_url');
            }
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            // rollback ke single image (kalau dibutuhkan)
            if (!Schema::hasColumn('projects', 'image')) {
                $table->string('image')->nullable();
            }

            if (Schema::hasColumn('projects', 'images')) {
                $table->dropColumn('images');
            }
        });
    }
};
