<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Settings;
use App\Http\Requests\StoreContactUsRequest;
use Illuminate\Support\Facades\Validator;
use App ; 

class ContactUsController extends Controller
{
    
    public function index()
    {   
        $settings = Settings::select('*')->get();
        return view('webApplication.forms.contactUs' ,['setting' => $settings , 'CurrentLang' => App::getLocale()]) ; 
    }
    public function store(StoreContactUsRequest  $request)
    {
      $create_contactUs= ContactUs::create($request->getData()); 
      return $create_contactUs? parent::successResponse():  parent::errorResponse(); 
    }
}
