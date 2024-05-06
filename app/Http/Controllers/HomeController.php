<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Donors ; 
use App\Models\User ; 
use App\Models\Volunteers ; 
use App\Models\Partners ; 
use App\Models\News ;
use App\Models\Companies ; 
use App\Models\EmploymentsOrders ; 
use App\Models\Programs ; 
use App\Notifications\NewUserNotification;

class HomeController extends Controller
{
 
   public function index() 
   {
      $user = Auth::user(); 
   //   dd(   $user->notify(new NewUserNotification));
      $roles = $user->roles->pluck('name')->toArray();
      $usersCount = User::count();
      $donorsCount = Donors::count();
      $volunteersCount = Volunteers::count();
      $partnersCount = Partners::count();

      $newsCount = News::count();
      $companiesCount = Companies::count();
      $employmentsOrdersCount = EmploymentsOrders::count();
      $programsCount = Programs::count();
      $data = [
        'labels' => ['users', 'donors', 'volunteers' , 'partners'],
        'data' => [$usersCount , $donorsCount  , $volunteersCount , $partnersCount],
    ];
       
     return view('Dashboard.home', ['data' =>$data  ,
          'News' =>$newsCount 
       ,  'Companies' => $companiesCount
        , 'EmploymentsOrder' =>$employmentsOrdersCount 
        , 'Programs'=>$programsCount
        
      
      
      ]);
   }
}
