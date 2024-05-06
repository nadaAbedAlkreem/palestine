<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\DataTables;



class RolesDatatableService extends Controller
{
    public function handle( $request,$data)
    {
             return DataTables::of($data)
                    ->addIndexColumn()
                    
                    ->filter(function ($instance) use ($request) {
                    
                       })
                     ->addColumn('action', function ($data)
                      {
                        $buttons = '';
                        $buttons .= '<a href="' . url("roles/" . $data->id . "/give-permissions") . '" class="btn btn-outline-info mx-2 ">Add / Edit Role Permission</a>';

                        if (auth()->user()->can("update role")) {
                            $buttons .= '<a href="' . url("roles/" . $data->id . "/edit") . '" class="btn btn-outline-success mx-2 ">Edit</a>';
                        }

                        // Delete button (conditionally rendered based on user permission)
                        if (auth()->user()->can("delete role")) {
                            $buttons .= '<a href="#" data-id="' . $data->id . '" class="deleteRecord btn btn-outline-danger mx-2 show_confirm">Delete</a>';
                        }

                        return '<td>' . $buttons . '</td>';
                    })
                 

                    
                   
               
                    ->rawColumns([ 'action'   ])
                    ->make(true); 
           
    }
 
 
}