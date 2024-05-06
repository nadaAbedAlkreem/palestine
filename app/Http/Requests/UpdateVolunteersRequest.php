<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVolunteersRequest extends FormRequest
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
            'name'      =>'required'    ,
            'name_ar'   =>'required'   ,
            'mobile'    =>'required'  ,
            'email'  =>'required',
            'address'=>'required',
            'address_ar' =>'required', 
            'volunteered'=>'required' , 
            'volunteered_ar'=>'required' , 
            'skills'=>'required' , 
            'volunteer_skills'=>'required' , 
            'volunteer_skills_ar' =>'required' , 
            'beginning_volunteering'=>'required' , 
            'end_volunteering' =>'required', 
            'study_experience_volunteer' =>'required', 
            'study_experience_volunteer_ar' =>'required', 
            'cv_volunteer'=>'required'
        ];
    }
}
