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
        Schema::create('visual_libraries', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('description')->nullable();
            $table->String('title_ar')->nullable();
            $table->String('description_ar')->nullable();
            $table->String('image');
            $table->enum('language', ['ar', 'en']);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visual_libraries');
    }
};
