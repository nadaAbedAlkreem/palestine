<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteers;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreVolunteersRequest;
 
  
class VolunteeringContoller extends Controller
{

        public function index()
        {
            return view('webApplication.forms.volunteer') ; 
        }
        public function store(Request  $request)
        {

            $this->validate1($request);
    
            if($request['number_page']==1)
            {
            $create_volunteers = Volunteers::create($this->getData($request->all()));
            return $create_volunteers ? parent::successResponse() :  parent::errorResponse(); 
        }
        }
        public  function validate1($request)
        {
            if($request['number_page'] == 0)
            {
             $validated_1 = $request->validate([
                'name' => 'required|max:255',
                'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'address' => 'required',
                'email' => 'required',
                'volunteered' => 'required',
                'volunteered_place'  => $request->input('volunteered') == 1 ? 'required' : '' , 
                    'skills'=>'required',
                'volunteer_skills'  => $request->input('Skills') == 1 ? 'required' : '' , 
        
            ]);
                return $validated_1 ? parent::successResponse() :  parent::errorResponse(); 

            }
        
            if($request['number_page'] == 1)
            {
                $validated_2 = $request->validate([
                    'beginning_volunteering' => 'required|date',
                    'end_volunteering' => 'required|date',
                    'study_experience_volunteer' => 'required',
                    'cv_volunteer' => 'required',
                ]);
                return $validated_2 ? parent::successResponse() :  parent::errorResponse(); 
        
            }
        
        
        }
        function getData($request)
        {
                $path = 'uploads/files/volunteer/';
                $nameImage = time()+rand(1,10000000).'.'. $request['cv_volunteer']->getClientOriginalExtension();
                Storage::disk('public')->put($path.$nameImage, file_get_contents( $request['cv_volunteer'] ));
                $request['cv_volunteer'] = $path.$nameImage ; 
                return $request ;  
            
        }
     
}

