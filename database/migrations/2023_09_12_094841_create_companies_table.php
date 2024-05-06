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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->String('organization_name') ;
             $table->enum('organization_type' , ["Cultural Center" ,"Educational or Higher Education Institution", "Governmental Entity" 
             ,"International Non-Governmental Organization", 
             "Media and Press Organization" ,
             "Non-Governmental Organization" ,
             "Organizations persons with disabilities", 
             "private company", "research and advocacy centre", 
             "social institution", 
             "technical or vocational education institute", 
             "youth group",
              "youth training centre"]) ;
             $table->String('main_branch_address') ;
             $table->timestamp('year_founded') ;
             $table->json('social_media_sites') ;
            $table->String('annual_budget') ;
            $table->integer('number_of_centers') ;
            $table->integer('number_of_employees') ;
            $table->String('center_locations') ;
             $table->integer('registration_number_ministry_interior') ;
            $table->integer('registration_number_ministry_Finance') ;
            $table->integer('Number_current_projects') ;
            $table->String('main_donors_projects') ;
             $table->integer('number_employees_organization') ;
            $table->String('nationalities_of_beneficiaries') ;
             $table->String('age_group_beneficiaries') ;
            $table->String('strategic_goals') ;
             $table->String('registration_certificate_ministry_interior') ;
             $table->String('company_organizational_structure') ;
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
        Schema::dropIfExists('companies');
    }
};
