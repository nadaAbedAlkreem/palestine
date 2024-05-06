<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News ; 
use App\Models\Settings;
use App ; 
use Carbon\Carbon;


class NewsController extends Controller
{

    public function index ($id)//show details
    {
        $news = News::with('images')->select('*')->where('id' ,$id)->first();  
         $latestNews = News::with('images')->latest()
        ->take(5)
        ->where('language' ,App::getLocale() )
        ->where('id', '!=', $id)  
        ->get();
        if(!empty($news))
        {
          $dateAndTime = $news->created_at;
          $carbonDateTime = Carbon::parse($dateAndTime);
          $date = $carbonDateTime->toDateString();  
          $time = $carbonDateTime->toTimeString();  
          $news['date']=$date ;
          $news['time']=$time ; 
        }
     
        $index = 0 ;   
        foreach($latestNews as $latestNew)
           {
            $dateAndTime = $latestNew->created_at;
            $carbonDateTime = Carbon::parse($dateAndTime);
            $date = $carbonDateTime->toDateString();  
            $time = $carbonDateTime->toTimeString();  
            $latestNews[$index]['date']=$date ;
            $latestNews[$index]['time']=$time ; 
             $index++ ; 
           }   
            return view('webApplication.news.index'  ,
           [ 
             'news'  => $news   , 
            'latestNews' => $latestNews ,
            'CurrentLang'=>App::getLocale() 
          
          ] 
      );
    }
     
 
    public function searchNews(Request $request)
    {
         $name_title_lang = (App::getLocale()== "ar") ?  'title_ar':  'title'; 
         $results = News::with('images')
         ->where($name_title_lang, 'like', '%' . $request['search'] . '%')
         ->get();
         
         $settings = Settings::select('*')->get();  

         return view('webApplication.news.news_search' , ['NewsSearch' => $results ,
         'CurrentLang'=>App::getLocale() ,
         'settings'=>$settings ]);

    }
    public function allNews()
    {
      $all_news = News::select('*')->where('language' , App::getlocale())->get(); 
    
      $settings = Settings::select('*')->get();  
      return view('webApplication.news.all_news' , ['allNews' => $all_news  ,  'settings' =>$settings, 'CurrentLang' => App::getlocale()]);
    }
 
   




}


 