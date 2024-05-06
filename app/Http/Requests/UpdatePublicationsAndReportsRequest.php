<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdatePublicationsAndReportsRequest extends FormRequest
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
        $role_ar = [
            'title_ar'=>'required',
            'images'=>'',
            'file'=>'',
        ];
        $role_en =[
            'title' => 'required' , 
            'images'=>'',
            'file'=>'',
        ];

        if($selectedLanguage == "ar"){
        
            return $role_ar  ; 
        }else
        {
            return $role_en ; 
        
        }
            
    }
    public function getData()
    {
        $data=$this->validated();

        if ($this->hasFile('images')) 
        {
            $path = 'uploads/images/slider/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('images')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('images') ));
            $data['images'] = $path.$nameImage ;
        }
        if ($this->hasFile('file')) 
        {
            $path = 'uploads/files/reports/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('file')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('file') ));
            $data['file'] = $path.$nameImage ;
        }
        return $data ; 

    }
}

