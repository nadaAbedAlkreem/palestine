<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins;
use Spatie\Permission\Models\Role;

use  App\Http\Requests\LoginRequest ; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
 

class LoginController extends Controller
{
   
 
  public function showLogin()
  {

    return response()->view('Dashboard.Auth.login') ; 
  }

  public function Login(LoginRequest $request)
  {
  
    $credentials = $request->only('email', 'password');
    if(Auth::guard('admin')->attempt($credentials))
    {   
              return response()->json([
             'status' => true,
             ], 202);  
    }
        else 
    {       
           return response()->json([
            'errors' => "email and password not correct",
        ], 422);    
    }

    //    $loggedIn = Auth::guard('admin')->attempt($request->loginInfo()); 

       
    //   if($loggedIn)
    //   {
    //       $userId = Auth::guard('admin')->id();
    //     $request->session()->put('loginId', $userId);
    //     return response()->json([
    //       'status' => true,
    //   ], 202);  
    //       }
    // else 
    // {       
    //   return response()->json([
    //     'errors' => "email and password not correct",
    // ], 422);     }

  }
 
  public function logout(Request $request){

    // if(Session::has('loginId')){
    //   Session::pull('loginId');
    //   return redirect()->route('login');
    // }
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
  }
}
