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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('title_ar')->nullable();
            $table->String('description')->nullable();
            $table->String('description_ar')->nullable();
            $table->String('rediract_to')->nullable(); //text_button
            $table->unsignedBigInteger('news_id')->nullable(); 
            $table->String('text_button')->nullable(); //text_button
            $table->String('image');
            $table->boolean('active')->default(false);  //Publication period
            $table->timestamp('publication_start');  //publication_time
            $table->timestamp('publication_end')->nullable();  //publication_time
            $table->enum('language', ['ar', 'en']);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
