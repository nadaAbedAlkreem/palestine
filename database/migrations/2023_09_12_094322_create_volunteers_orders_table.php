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
        Schema::create('volunteers_orders', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('mobile');
            $table->String('email');
            $table->String('address');
            $table->boolean('volunteered');
            $table->String('volunteered_place')->nullable(); 
            $table->boolean('skills'); 
            $table->String('volunteer_skills')->nullable(); 
            $table->timestamp('beginning_volunteering')->nullable(); 
            $table->timestamp('end_volunteering')->nullable(); 
            $table->String('study_experience_volunteer'); 
            $table->String('cv_volunteer'); 
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers_orders');
    }
};
