<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donors;
use App\Models\Programs;
//Programs
use App\Http\Requests\StoreDonorsRequest;
 
class DonationController extends Controller
{
   public function index()
   {   
      $programs = Programs::select('title' , 'id')->get() ;
       return view('webApplication.forms.donors'  , ['programs' =>$programs ]) ; 
   }
   public function store(StoreDonorsRequest  $request)
   {
    $create_donors= Donors::create($request->getData()); 
    $programId = $request->input('project');  
    $create_donors->programs()->attach($programId);
    return $create_donors? parent::successResponse():  parent::errorResponse(); 
   }


}
