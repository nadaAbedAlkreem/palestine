<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use App\Http\Requests\StoreProgramsRequest;
use App\Http\Requests\UpdateProgramsRequest;
use Yajra\DataTables\DataTables;
use App\Services\ProgramsDatatableService ; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Images;  
use App ; 
class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request  , ProgramsDatatableService $programsDatatableService)
    {
        if ($request->ajax()) 
        {
            $data = Programs::select('*')->where('language' , App::getLocale()) ;
            
            try {
                return $programsDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
         return view('Dashboard.programs.index') ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.programs.create' , ["CurrentLang"=>App::getLocale()]) ; 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramsRequest $request)
    {
        $create_programs = Programs::create($request->getData()); 
        return $create_programs? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $programs = Programs::where('id' , $id)->first(); 
        return view('Dashboard.programs.edit' , ['programs' => $programs  , "CurrentLang"=>App::getLocale()]) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramsRequest $request)
    {
        $create_programs= Programs::where('id' ,$request['id'] )->update($request->getData());
        return $create_programs? parent::successResponse():  parent::errorResponse(); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteRow =  Programs::find($id)->delete();
        return  $deleteRow ? $id :  parent::errorResponse();  
    }
}
