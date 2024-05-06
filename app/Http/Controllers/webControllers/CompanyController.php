<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;
use App\Http\Requests\StoreCompaniesRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{

    public function index()
    {
        return view('webApplication.forms.company') ; 
    }
    public function store(Request  $request)
    {
        $this->validate1($request);
         if($request['number_page']==5)
        {
            $create_companies = Companies::create($this->getData($request->all()));
             return $create_companies ? parent::successResponse() :  parent::errorResponse(); 
        }
    }
    public  function validate1($request)
    {
        if($request['number_page'] == 0)
        {
    
        $validated_1 = $request->validate([
            'organization_name' => 'required|max:255',//organization_type
            'organization_type' => 'required|max:255',//organization_type  //main_branch_address
            'main_branch_address' => 'required|max:255',//organization_type  //main_branch_address
            'year_founded' => 'required|date'
        ]);

            return $validated_1 ? parent::successResponse() :  parent::errorResponse(); 

        }
    
        if($request['number_page'] == 1)
        {
            $validated_2 = $request->validate([
                'email' => 'required',//registration_number_ministry_interior
                'instagram' => 'required',//registration_number_ministry_interior
                'facebock' => 'required',//registration_number_ministry_interior
                'annual_budget' => 'required|integer',//registration_number_ministry_interior
                'number_of_centers' => 'required|integer',//registration_number_ministry_interior
                'number_of_employees' => 'required|integer',//registration_number_ministry_interior
            ]);
            return $validated_2 ? parent::successResponse() :  parent::errorResponse(); 
    
        }

        if($request['number_page'] == 2)
        {
            $validated_3= $request->validate([
                'center_locations' => 'required',//registration_number_ministry_interior
                'registration_number_ministry_interior' => 'required|integer',//registration_number_ministry_interior
                'registration_number_ministry_Finance' => 'required|integer',//registration_number_ministry_interior
            ]);
            return $validated_3 ? parent::successResponse() :  parent::errorResponse(); 
    
        }

        
        if($request['number_page'] == 3)
        {
            $validated_4 = $request->validate([
                'Number_current_projects' => 'required',//registration_number_ministry_interior
                'main_donors_projects' => 'required',// number_employees_organization  registration_number_ministry_interior
                'number_employees_organization' => 'required|integer',// number_employees_organization  registration_number_ministry_interior
             ]);
            return $validated_4 ? parent::successResponse() :  parent::errorResponse(); 
    
        }
    
        if($request['number_page'] == 4)
        {
            $validated_5 = $request->validate([
                'nationalities_of_beneficiaries' => 'required',//registration_number_ministry_interior
                'age_group_beneficiaries' => 'required',// number_employees_organization  registration_number_ministry_interior
                'strategic_goals' => 'required',// number_employees_organization  registration_number_ministry_interior
             ]);
            return $validated_5 ? parent::successResponse() :  parent::errorResponse(); 
    
        }
        if($request['number_page'] == 5)
        {
            $validated_6 = $request->validate([
                'registration_certificate_ministry_interior' => 'required',//registration_number_ministry_interior
                'company_organizational_structure' => 'required',// number_employees_organization  registration_number_ministry_interior
              ]);
            return $validated_6 ? parent::successResponse() :  parent::errorResponse(); 
    
        }

       
    
    
    }
    function getData($request)
    {      
        if(!empty($request['registration_certificate_ministry_interior'])){
            $path = 'uploads/files/company/';
            $nameImage = time()+rand(1,10000000).'.'. $request['registration_certificate_ministry_interior']->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $request['registration_certificate_ministry_interior'] ));
            $request['registration_certificate_ministry_interior'] = $path.$nameImage ; 
 
        }
        if(!empty($request['company_organizational_structure'])){
            $path = 'uploads/files/company/';
            $nameImage = time()+rand(1,10000000).'.'. $request['company_organizational_structure']->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $request['company_organizational_structure'] ));
            $request['company_organizational_structure'] = $path.$nameImage ; 
 
        }

      $array_social =['email'=>$request['email']  ,'instagram' => $request['instagram']  , 'facebock'=> $request['facebock']] ; 
      $json_social = json_encode($array_social);

      $request['social_media_sites'] = $json_social ; 
 
      return $request ; 
    }
 
}