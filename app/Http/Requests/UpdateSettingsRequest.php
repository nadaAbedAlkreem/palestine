<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Settings;
use Illuminate\Support\Facades\Storage;


class UpdateSettingsRequest extends FormRequest
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
            'website_image' => '' , 
            'website_name' => ' ' , 
            'website_name_ar' => ' ' , 
            'mobile' => ' ' , 
            'facebook' => ' ' , 
            'twitter' => ' ' , 
            'Instagram' => ' ' , 
            'gmail' => ' ' , 
            'location' => ' ' , 
            'location_ar' => ' ' , 
            'values_principles' => ' ' , 
            'values_principles_ar' => ' ' , 
            'goals' => ' ' , 
            'goals_ar' => ' ' , 
            'association_title' => ' ' , 
            'association_title_ar' => ' ' , 
            'association_image' => ' ' , 
            'association_content' => ' ' , 
            'association_content_ar' => ' ' , 
            'message_title' => ' ' , 
            'message_title_ar' => ' ' , 
            'message_content' => ' ' , 
            'message_content_ar' => ' ' , 
            'message_image' => ' ' , 
            'vision_title' => ' ' , 
            'vision_title_ar' => ' ' , 
            'vision_content' => ' ' , 
            'vision_content_ar' => ' ' , 
            'vision_image' => ' ' , 
             
             
        ];
    }
    public function getData()
    {
        $data=$this->validated();
     
          
            return $data ; 

    }
}
