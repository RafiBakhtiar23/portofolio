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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
                $table->string('title');
    $table->text('intro');

    $table->text('story_1');
    $table->text('story_2');
    $table->text('story_3');

    $table->string('focus_title');

    $table->string('focus_1');
    $table->string('focus_2');
    $table->string('focus_3');
    $table->string('focus_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
