<?php

namespace App\Http\Controllers;

use App\Models\Volunteers;
use App\Http\Requests\StoreVolunteersRequest;
use App\Http\Requests\UpdateVolunteersRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) 
        {
            $data = Volunteers::select('*') ; 
            return DataTables::of($data)
            ->addColumn('cv_volunteer' , function($data){
                return '<td><a href="' . route('download', ["file"=>$data->cv_volunteer]) . '"   class="btn btn-outline-success">   <i class="fas fa-download"></i> Download</a></td>';
                })
            ->rawColumns(['cv_volunteer'])
            ->addIndexColumn()
            ->make(true); 
        }    
        return view('Dashboard.volunteers.index');
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
    public function store(StoreVolunteersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteers $volunteers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteers $volunteers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVolunteersRequest $request, Volunteers $volunteers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteers $volunteers)
    {
        //
    }
}
