<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programs;
use App\Models\Settings;
use App ; 
class ProgramsController extends Controller
{
    
    public function index ($id)//show details
    {    
         $ProgramsDetails = Programs::select('*')->where('id' ,$id)->first();  
         $latestPrograms =  Programs::latest()
        ->take(5)
        ->where('language' ,App::getLocale() )
        ->where('id', '!=', $id)  
        ->get();         
            return view('webApplication.programs.index'  ,
           [ 
             
            'ProgramsDetails'  => $ProgramsDetails   , 
            'latestPrograms' => $latestPrograms ,
            'CurrentLang'=>App::getLocale() 
          
          ] 
      );
    }
     
 
    public function searchPrograms(Request $request)
    {
         $name_title_lang = (App::getLocale()== "ar") ?  'title_ar':  'title'; 
         $results = Programs::
         where($name_title_lang, 'like', '%' . $request['search'] . '%')
         ->get();
 
         return view('webApplication.programs.programs_search' , ['ProgramsSearch' => $results ,
         'CurrentLang'=>App::getLocale() 
         ]);

    }
    public function allPrograms()
    {
      $all_programs = Programs::select('*')->where('language' , App::getlocale())->get(); 
      $settings = Settings::select('*')->get();  
      return view('webApplication.programs.all_programs' , ['allPrograms' => $all_programs  ,  'settings' =>$settings, 'CurrentLang' => App::getlocale()]);
    }
}
