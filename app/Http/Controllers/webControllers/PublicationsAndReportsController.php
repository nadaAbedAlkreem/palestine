<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PublicationsAndReports;
use App ; 
 
class PublicationsAndReportsController extends Controller
{
   
 
     public function allPublicationAndReport ()
     {
        $publications_and_reports = PublicationsAndReports::select('*')->where('language' , App::getLocale())->get();  
        return view('webApplication.publicationsAndReport.all-publication-and-report'  ,
          [ 
           'PublicationsAndReports'  => $publications_and_reports   , 
           'CurrentLang'=>App::getLocale() 
          ] 
          );
     }

}
