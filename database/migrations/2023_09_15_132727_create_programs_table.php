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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('image'); 
            $table->string('title')->nullable(); 
            $table->string('title_ar')->nullable(); 
            $table->string('brief')->nullable(); 
            $table->string('brief_ar')->nullable(); 
            $table->text('strategic_objective')->nullable(); 
            $table->text('strategic_objective_ar')->nullable(); 
            $table->text('special_objectives')->nullable(); 
            $table->text('special_objectives_ar')->nullable(); 
            $table->text('ativities_events')->nullable(); 
            $table->text('ativities_events_ar')->nullable(); 
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
        Schema::dropIfExists('programs');
    }
};
