<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Http\Requests\StoreCompaniesRequest;
use App\Http\Requests\UpdateCompaniesRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

  
class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Companies::select('*')->get() ; 
        //   dd($data[0]->social_media_sites.toCharArray());
         if ($request->ajax()) 
        {
            $data = Companies::select('*') ; 
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('registration_certificate_ministry_interior' , function ($data){
                $nameImage = $data->registration_certificate_ministry_interior; 
                 $url=asset("/storage2/$nameImage");

                return ' 
                <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image:url('.$url.');"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                        <!--begin::Title-->
                        <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">'.$data->name.'</a>
                        <!--end::Title-->
                    </div>
                </div>
      
           ' ;
           })  
           ->addColumn('company_organizational_structure' , function ($data){
            $nameImage = $data->company_organizational_structure; 
             $url=asset("/storage2/$nameImage");

            return ' 
            <div class="d-flex align-items-center">
                <!--begin::Thumbnail-->
                <a href="" class="symbol symbol-50px">
                    <span class="symbol-label" style="background-image:url('.$url.');"></span>
                </a>
                <!--end::Thumbnail-->
                <div class="ms-5">
                    <!--begin::Title-->
                    <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">'.$data->name.'</a>
                    <!--end::Title-->
                </div>
            </div>
  
       ' ;
       })  
           ->rawColumns([ 'action'  , 'registration_certificate_ministry_interior', 'company_organizational_structure'])
            ->make(true); 
        }    
        return view('Dashboard.companies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompaniesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Companies $companies)
    {
        //
    }
   
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompaniesRequest $request, Companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companies $companies)
    {
        //
    }
}
