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
 
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable() ; 
            $table->String('date') ; 
            $table->text('description')->nullable() ; 
            $table->text('description_ar')->nullable() ; 
            $table->String('location')->nullable() ; 
            $table->String('title_ar')->nullable() ;
            $table->String('location_ar')->nullable() ; 
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
        Schema::dropIfExists('news');
    }
};
