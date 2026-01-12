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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

                $table->string('title');
    $table->string('category'); // Cloud, Web, Game
    $table->string('badge_color')->default('indigo');

    $table->text('description');

    $table->string('image')->nullable();
    $table->string('project_url')->nullable();

    $table->json('tags')->nullable();

    $table->boolean('is_active')->default(true);
    $table->integer('sort_order')->default(0);
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
