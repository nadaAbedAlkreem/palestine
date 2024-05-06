<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admins;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Services\UsersDatatableService  ; 

class UserController extends Controller
{

     public function __construct()
    {
        $this->middleware('permission:view admin', ['only' => ['index']]);
        $this->middleware('permission:update admin',['only' => ['update','edit']]);
     }

    public function index(Request $request ,UsersDatatableService $usersDatatableService)
    {
        $roles = Role::pluck('name','id')->all();
         if ($request->ajax()) 
        {
            $users = Admins::select();
            
            try {
                return $usersDatatableService->handle($request,$users);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
        return view('Dashboard.role&permission.user.index'  ,['roles' => $roles]);
    }

    // public function create()
    // {
    //     $roles = Role::pluck('name','name')->all();
    //     return view('role-permission.user.create', ['roles' => $roles]);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'full_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255|unique:users,email',
    //         'password' => 'required|string|min:8|max:20',
    //         'roles' => 'required'
    //     ]);

    //     $user = Admins::create([
    //                     'full_name' => $request->full_name,
    //                     'email' => $request->email,
    //                     'password' => Hash::make($request->password),
    //                 ]);

    //     $user->syncRoles($request->roles);

    //     return redirect('/users')->with('status','User created successfully with roles');
    // }

    public function edit(Admins $admins, $id)
    {
         $admins_ =  $admins::select('*')->where('id', $id)->first();
         $roles = Role::pluck('name','name')->all();
        
         $userRoles = $admins_->roles->pluck('name','name')->all();
          return view('Dashboard.role&permission.user.edit', [
            'user' => $admins_,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }

    public function update(Request $request, Admins $admins, $id)
    {
        $admins= Admins::select('*')->where('id', $id)->first();

           $request->validate([
            'full_name' => 'required|string|max:255',
            'roles' => [
                'required',
           
                function ($attribute, $value, $fail) {
                    // Check if 'super admin' role exists in the table
                    $superAdminsCount = Admins::role('super-admin')->count();
                     if ($value[0] !=  "super-admin" && $superAdminsCount == 1 ) {
                        $fail('You cannot assign a role other than "super admin" as there is no "super admin" in the table.');
                     }
                 },
            ],
        ]);
   

        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
          
        ];

      
         $admins->update($data);
         $admins->syncRoles($request->roles);

        return redirect('/users')->with('status','User Updated Successfully with roles');
    }

//     public function destroy($userId)
//     {
//         $admins = Admins::findOrFail($userId);
//         $admins->delete();

//         return redirect('/users')->with('status','User Delete Successfully');
//     }
  }