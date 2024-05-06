<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest ; 
use App\Models\Admins ; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        
        return response()->view('Dashboard.Auth.register') ; 
    }
    public function register(Request $request)
    {  
         $validator = Validator::make($request->all(), 
        [    
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|unique:Admins|max:255',
            'password' => 'required|string|min:8',
        ]);
 
         if ($validator->fails()) 
            {
                return response()->json([
                    'errors' => $validator->errors(),
                ], 422); 
            }
            $full_name = $request['firstName'].' '.$request['lastName']; 
            $register =  Admins::create(
                [
                    'full_name' => $full_name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
               ]);

               
             if ($register){ 
 
                $user = Admins::find($register->id);
                $adminSuperRole = Role::where('name', 'super-admin')->first();
                $adminStaffRole = Role::where('name', 'staff')->first();
                $superAdminsCount = Admins::role('super-admin')->count();
                   if ($superAdminsCount == 0 )
                   {
                       $user->assignRole($adminSuperRole);              
                   } else 
                   {
                        $user->assignRole($adminStaffRole);
                   }
                 return response()->view('Dashboard.Auth.login') ; 

                 
      
             }

    }
}
