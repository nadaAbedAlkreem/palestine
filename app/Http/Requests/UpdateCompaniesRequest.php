<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompaniesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'organization_name'       =>'required' , 
            'organization_name_ar'    =>'required' ,  
            'organization_type'       =>'required' , 
            'organization_type_ar'    =>'required' ,
            'main_branch_address'     =>'required' , 
            'main_branch_address_ar'  =>'required' ,
            'social_media_sites'      =>'required' , 
            'annual_budget'           =>'required'  , 
            'number_of_centers'       =>'required'  , 
            'number_of_employees'     =>'required'  ,
            'center_locations'        =>'required'  , 
            'center_locations_ar'     =>'required'   ,
            'registration_number_ministry_interior' , 
            'Number_current_projects'             =>'required'  ,
            'main_donors_projects'                =>'required' ,
            'number_employees_organization'       =>'required' ,
            'nationalities_of_beneficiaries'      =>'required' ,
            'nationalities_of_beneficiaries_ar'   =>'required'   ,
            'age_group_beneficiaries'             =>'required'  ,
            'strategic_goals'                             =>'required'       ,
            'registration_certificate_ministry_interior'  =>'required'       ,
            'company_organizational_structure'            =>'required'       ,
            'company_organizational_structure_ar'         =>'required'       ,
        ];
    }
}
