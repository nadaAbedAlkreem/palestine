<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\DataTables;


class ContactUsDatatableService extends Controller
{
    public function handle( $request,$data)
    {
             return DataTables::of($data)
                    ->addIndexColumn()

               
                     ->make(true); 
           
    }
 
 
}