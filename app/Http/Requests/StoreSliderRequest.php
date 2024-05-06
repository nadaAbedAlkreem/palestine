<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
 


class StoreSliderRequest extends FormRequest
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
        $rules =
         [
            'rediract_to'=>'' , 
            'text_button' => '' ,
            'news_id'=>'' , 
            'image' =>'required'  , 
            'active'=>'' , 
            'publication_start'=>'required' , 
            'publication_end'=>   function ($attribute, $value, $fail) {
                $start = $this->input('publication_start');
                if ($value <= $start) {
                    $fail('The ' . $attribute . ' must be strictly after the publication start date.');
                }
            }, // Ensure end date is after start date (without being equal)       
        ];
            if ($this->input('rediract_to') == "show_description")
            {
                $rules['news_id'] = 'required';
            }
            if ($this->input('rediract_to') !== null) {
                $rules['text_button'] = 'required';
            }
           $rules_en = 
           [
               'title'=>'required', 
              'description'=>'required', 
           ];
           $rules_ar =
           [    
                 'title_ar'=>'required',  
                  'description_ar' =>'required',                 
           ];
          $rules_en += $rules ;    
          $rules_ar += $rules ;     
        
      
        if($selectedLanguage== "en" )
        {
            return $rules_en ; 

        }else
        {
           return $rules_ar ; 

        }


 
    }


    public function getData()
    {
          $data=$this->validated();
          $data['language'] =  $this->input('language', 'en');

          if ($this->hasFile('image')) 
          {
              $path = 'uploads/images/slider/';
              $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
              Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
              $data['image'] = $path.$nameImage ;
            }
          if($this->has('active')){
            $data['active'] = 1  ; 

            }
  
      
  
        return $data ; 
    }
}
