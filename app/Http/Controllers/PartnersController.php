<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Http\Requests\StorePartnersRequest;
use App\Http\Requests\UpdatePartnersRequest;
use Illuminate\Http\Request;
use App\Services\partnersDatatableService ; 
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App ;
class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request  , PartnersDatatableService $partnersDatatableService)
    {
        if ($request->ajax()) 
        {
            $data = Partners::select('*')->where('language' , App::getLocale()) ;
            
            try {
                return $partnersDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
         return view('Dashboard.partners.index' ) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.partners.create'  , ["CurrentLang"=>App::getLocale()]) ; 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnersRequest $request)
    {
         $create_Partners = Partners::create($request->getData()); 
        return $create_Partners? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partners = Partners::where('id' , $id)->first(); 
        return view('Dashboard.partners.edit' , ['partners' => $partners]  ,  ["CurrentLang"=>App::getLocale()]) ; 
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnersRequest $request)
    {
        $create_partners = Partners::where('id' ,$request['id'] )->update($request->getData());
        return $create_partners? parent::successResponse():  parent::errorResponse(); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $deleteRow =  Partners::find($id)->delete();
        return  $deleteRow ? $id :  parent::errorResponse();       
    }
}
