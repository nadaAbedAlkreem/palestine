<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmploymentsOrdersRequest extends FormRequest
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
            'first_name'        =>'required', 
            'father_name'       =>'required' ,  
            'grandfather_name'  =>'required'    , 
            'family_name'       =>'required' ,  
            'first_name_ar'     =>'required',      
            'father_name_ar'    =>'required'    ,  
            'grandfather_name_ar'    =>'required',     
            'family_name_ar'         =>'required',      
            'mobile'                 =>'required',     
            'email'           =>'required'   ,  
            'gender'           =>'required'    , 
            'gender_ar'         =>'required'   ,  
            'qualification'     =>'required'        ,
            'Birthday'          =>'required'   ,  
            'cv'                =>'required' , 
        ];
    }
}
