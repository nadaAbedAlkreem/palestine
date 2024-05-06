<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donors ; 
use App\Models\User ; 
use App\Models\Volunteers ; 
use App\Models\Partners ; 
use App\Models\News ;
use App\Models\Companies ;  
use App\Models\EmploymentsOrders ; 
use App\Models\Programs ; 
use App\Models\Slider ; 
use App\Models\Achievements ; 
use App\Models\Settings;
use App ; 

class HomeControllers extends Controller
{
    public function index() 
    {

        $sliders = Slider::with('news')->select('*')->where('language' ,App::getLocale() )->get(); 
     
        $programs = Programs::select('*')->where('language' ,App::getLocale() )->get(); 
        $partners = Partners::select('*')->where('language' ,App::getLocale() )->get(); 
        $achievements  = Achievements::select()->where('language' ,App::getLocale() )->get(); 
        $latestNews = News::with('images')->latest()->take(5)->where('language' ,App::getLocale() )->get();
      
      
      
      
         return view('webApplication.home' , 
        [
            'sliders'=> $sliders , 
            'programs' => $programs  , 
            'partners' => $partners  , 
            'achievements' =>$achievements  , 
            'latestNews' => $latestNews   ,
             'CurrentLang' => App::getLocale()
        ]
        ) ;
    }




}
