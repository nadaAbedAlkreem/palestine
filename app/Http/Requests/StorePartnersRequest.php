<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class StorePartnersRequest extends FormRequest
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
        $role_ar =   [
            'name_ar' =>'required' , 
            'image'=>'required' , 
        ];  
        $role_en =   [
            'name' =>'required' , 
            'image'=>'required' , 
        ];

        if($selectedLanguage == "en")
        {

            return $role_en   ;
        }else
        {
            return $role_ar   ; 
        }

    }

    public  function getData()
    {
        
        $data=$this->validated();
        $data['language'] =  $this->input('language', 'en');
 
        if ($this->hasFile('image')) 
        {
            $path = 'uploads/images/partners/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['images'] = $path.$nameImage ;
        }
         return $data;
    }
}
