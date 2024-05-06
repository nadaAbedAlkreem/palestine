<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use App\Models\Images;  //Images

class UpdateNewsRequest extends FormRequest
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
        
       
            $selectedLanguage = $this->input('language', 'en');
                    $role_ar =  [
                        'title_ar' => 'required|max:255', 
                        'description_ar' =>'required' , 
                        'location_ar' =>'required' ,
                        'language' => 'required' ,
                        'date' =>'required' 
                  ];
                    $role_en =[
                    'title' => 'required|max:255',
                    'description' =>'required' , 
                    'location' =>'required' ,
                    'language' => 'required' ,
                    'date' =>'required' 
                  ];
     
                    if($selectedLanguage == "ar"){
                    
                        return $role_ar  ; 
                    }else
                    {
                        return $role_en ; 
                    
                    }
   
    }

    public function getData(){
        $data=$this->validated();
 

        return $data ; 


        
    }

}
