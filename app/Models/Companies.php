<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable = [
        'organization_name', 
        'organization_type'   , 
        'main_branch_address'  ,
        'year_founded',
        'social_media_sites' , 
        'annual_budget' , 
        'number_of_centers' , 
        'number_of_employees' ,
        'center_locations' , 
        'registration_number_ministry_interior' , 
        'registration_number_ministry_Finance' , 
        'Number_current_projects' ,
        'main_donors_projects' ,
        'number_employees_organization' ,
        'nationalities_of_beneficiaries' ,
        'age_group_beneficiaries' ,
        'strategic_goals' ,
        'registration_certificate_ministry_interior' ,
        'company_organizational_structure' ,
        'language'
 
  
];
}
