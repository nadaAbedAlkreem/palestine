<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class StoreDonorsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    //=>'required'
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'project' => 'required',
            'country' => 'required',
            'city' => 'required',
            'message' => 'required',
            'announcing_donor' => '',
            'money' => 'required',
            'defaultCheck2' => '',
            'add_money' =>''
        ];
    
        if ($this->input('defaultCheck2')==1) {
            $rules['add_money'] = 'required';
        }
        return $rules;
    }
    
    public function getData()
    {
        $data=$this->validated();
        $data['language'] = $selectedLanguage  ;

         if($this['defaultCheck2'] == 1)
        {
             $data['money']  = $this['add_money']  ; 

        }

        
 
        return $data;
    }
}
