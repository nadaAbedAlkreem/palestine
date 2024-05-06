<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisualLibraries;
use App ; 
 
class VisualLibrariesController extends Controller
{
    public function index ($id)
    {  
        $visualLibraries_details = VisualLibraries::select('*')->where('id' ,$id)->first();     
           return view('webApplication.visualLibraries.index'  ,
         [ 
          'visualLibrariesdetails'  => $visualLibraries_details   , 
          'CurrentLang'=>App::getLocale() 
         ] 
       );

    }
    public function allVisualLibraries ()
    {
       $visual_libraries = VisualLibraries::with('images')->where('language' , App::getLocale())->select('*')->get();  

       return view('webApplication.visualLibraries.all-visual-libraries'  ,
         [ 
          'VisualLibraries'  => $visual_libraries   , 
          'CurrentLang'=>App::getLocale() 
         ] 
         );
    }
}
