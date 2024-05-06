<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use App\Http\Requests\StoreAchievementsRequest;
use App\Http\Requests\UpdateAchievementsRequest;
use Illuminate\Http\Request;
use App\Services\AchievementsDatatableService ; 
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\App;

class AchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request  ,
     AchievementsDatatableService $AchievementsDatatableService)
    {
        if ($request->ajax()) 
        {
            $data = Achievements::select('*')->where('language' , App::getLocale()) ;
            try
             {
                return $AchievementsDatatableService->handle($request,$data);
             } catch (Throwable $e)
             {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
             }
        }
       return view('Dashboard.achievements.index'  ,  ["CurrentLang"=>App::getLocale()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.achievements.create'  ,  ["CurrentLang"=>App::getLocale()]) ; 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAchievementsRequest $request)
    {
        $create_achievements = Achievements::create($request->getData()); 
        return $create_achievements? parent::successResponse():  parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievements $achievements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $achievements = Achievements::where('id' , $id)->first(); 
        return view('Dashboard.achievements.edit' , ['achievements' => $achievements  ,  "CurrentLang"=>App::getLocale()]) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchievementsRequest $request)
    {
 
        $create_achievements = Achievements::where('id' ,$request['id'] )->update($request->getData());
        return $create_achievements? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteRow =  Achievements::find($id)->delete();
        return  $deleteRow ? $id :  parent::errorResponse();       
    }
}
