<?php

namespace App\Http\Controllers;

use App\Models\EmploymentsOrders;
use App\Http\Requests\StoreEmploymentsOrdersRequest;
use App\Http\Requests\UpdateEmploymentsOrdersRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class EmploymentsOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {
  
        if ($request->ajax()) 
        {
            $data = EmploymentsOrders::select('*') ; 
            return DataTables::of($data)
            ->addColumn('cv' , function($data){
            return '<td><a href="' . route('download', ["file"=>$data->cv]) . '"   class="btn btn-outline-success">   <i class="fas fa-download"></i> Download</a></td>';
            })
            ->addIndexColumn()
            ->rawColumns(['cv'])
            ->make(true); 
        }    
        return view('Dashboard.employmentsOrders.index');
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
    public function store(StoreEmploymentsOrdersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmploymentsOrders $employmentsOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmploymentsOrders $employmentsOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmploymentsOrdersRequest $request, EmploymentsOrders $employmentsOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmploymentsOrders $employmentsOrders)
    {
        //
    }
}
