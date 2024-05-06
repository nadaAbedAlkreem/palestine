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
        Schema::create('employments_orders', function (Blueprint $table) {
            $table->id();
            $table->String('first_name') ; 
            $table->String('father_name') ; 
            $table->String('grandfather_name') ; 
            $table->String('family_name') ; 
            $table->String('mobile') ; 
            $table->String('email') ; 
            $table->enum('gender' , ['male','female']) ; 
            $table->enum('qualification' , ['Bachelor','Diploma' , 'CollegeStudent' , 'HighSchool']) ; 
            $table->timestamp('Birthday') ; 
            $table->String('cv') ; 
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employments_orders');
    }
};
