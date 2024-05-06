<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingController extends Controller
{
    public function aboutUs()
    {
        $about_us = Settings::select('*')->whereIn('groub' , ['association' ,'message'  , 'vision'])->get(); 
        return view('webApplication.Setting.AboutUs' ,['aboutUs' => $about_us]);
    }
    public function principles() 
    {
        $values_principles = Settings::select('*')->whereIn('groub' , ['values_principles'])->get(); 
        return view('webApplication.Setting.principles' ,['principles' => $values_principles]);
    }
    public function goales() 
    {
        $goals = Settings::select('*')->whereIn('groub' , ['goals'])->get(); 
        return view('webApplication.Setting.goals' ,['goals' => $goals]);
    }
}
