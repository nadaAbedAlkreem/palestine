<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class StoreVolunteersRequest extends FormRequest
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
        $rules = [
            'name'      =>'required'    ,
            // 'name_ar'   =>'required'   ,
            'mobile'    =>'required'  ,
            'email'  =>'required',
            'address'=>'required',
            // 'address_ar' =>'required', 
            'volunteered'=>'required' , 
            'volunteered_place'=>'' , 
            // 'volunteered_place_ar'=>'' , 
            'skills'=>'required' , 
            'volunteer_skills'=>'required' , 
            // 'volunteer_skills_ar' =>'required' , 
            'beginning_volunteering'=>'required' , 
            'end_volunteering' =>'required', 
            'study_experience_volunteer' =>'required', 
            // 'study_experience_volunteer_ar' =>'required', 
            'cv_volunteer'=>'required'
        ];
        if ($this->input('volunteered') == "1"   ) {
 
            // $rules['volunteered_place_ar'] = 'required';
            $rules['volunteered_place'] = 'required';

        }
        if ($this->input('skills') == "1"   ) {
            $rules['volunteer_skills'] = 'required';
            // $rules['volunteer_skills_ar'] = 'required';

        }
    
        return $rules;
    }
    
}
