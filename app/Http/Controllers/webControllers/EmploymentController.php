<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmploymentsOrders;
use Illuminate\Support\Facades\Storage;

class EmploymentController extends Controller
{
        public function index()
        {
            return view('webApplication.forms.employment') ; 
        }
    
        public function store(Request  $request)
        {
   
            $this->validate1($request);
    
            if($request['number_page']==1)
            {
             $create_employment= EmploymentsOrders::create($this->getData($request->all()));
             return $create_employment ? parent::successResponse() :  parent::errorResponse(); 
        }
        }
        public  function validate1($request)
        {
            if($request['number_page'] == 0)
            {
        
            $validated_1 = $request->validate([
                'first_name'       => 'required|max:255'    ,                    
                'father_name'      => 'required|max:255'   ,  
                'grandfather_name' => 'required|max:255'  , 
                'family_name'      => 'required|max:255'  ,  
                'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'email'            => 'required'  ,   
                'gender'           => 'required'  , 
                'qualification'    => 'required|max:255'  
              
        
            ]);
                 return $validated_1 ? parent::successResponse() :  parent::errorResponse(); 


            }
        
            if($request['number_page'] == 1)
            {
                $validated_2 = $request->validate([
                    'Birthday'         => 'required|date'  ,        
                    'cv'               => 'required'        
                  
                ]);
                return $validated_2 ? parent::successResponse() :  parent::errorResponse(); 
        
            }
        
        
        }
        function getData($request)
        {
                $path = 'uploads/files/volunteer/';
                $nameImage = time()+rand(1,10000000).'.'. $request['cv']->getClientOriginalExtension();
                Storage::disk('public')->put($path.$nameImage, file_get_contents( $request['cv'] ));
                $request['cv'] = $path.$nameImage ; 
                return $request ;  
            
        }
}
