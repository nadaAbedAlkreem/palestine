<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Images; 
class StoreProgramsRequest extends FormRequest
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
 
        $role_en  =  [
            'image'=>'required', 
            'title'=>'required',  
             'brief'   =>'required' ,
             'strategic_objective'    =>'required'  ,  
             'special_objectives'    =>'required',  
             'ativities_events'    =>'required' ] ; 
             $role_ar  =  [
                'image'=>'required', 
                 'title_ar'=>'required' ,  
                 'brief_ar' =>'required'  ,  
                 'strategic_objective_ar' =>'required'  ,  
                 'special_objectives_ar' =>'required',  
                 'ativities_events_ar'=>'required' ,       ];
    



            if($selectedLanguage == "ar"){
                
                return $role_ar  ; 
            }else
            {
                return $role_en ; 
            
            }
                
    }

    public function getData()
    {
        $data = $this->validated();
        $data['language'] =  $this->input('language', 'en');

        if ($this->hasFile('image')) 
        {
            $path = 'uploads/images/program/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['image'] = $path.$nameImage ;
        }
       
        return $data ; 

    }
}
