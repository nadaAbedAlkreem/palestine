<?php

namespace App\Http\Controllers;

use App\Models\VisualLibraries;
use App\Http\Requests\StoreVisualLibrariesRequest;
use App\Http\Requests\UpdateVisualLibrariesRequest;
use App\Services\VisualLibrariesDatatableService ; 
use Yajra\DataTables\DataTables;
use App\Models\Images;  //Images
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App ; 
 


class VisualLibrariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VisualLibrariesDatatableService  $visualLibrariesDatatableService  , Request $request)
    {


        if ($request->ajax()) 
        {
            $data = VisualLibraries::select('*')->where('language' ,  App::getLocale()) ;
             
            try {
                return $visualLibrariesDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
        return view('Dashboard.visualLibraries.index' , ['CurrentLang' => App::getLocale()]) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Dashboard.visualLibraries.create'  , ['CurrentLang' => App::getLocale()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisualLibrariesRequest $request)
    {
        $create_visualLibraries= VisualLibraries::create($request->getData())  ;
        foreach ($request->file('images') as  $imagefile)
         {
              $path = 'uploads/images/visaulLibraries/';
             $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
             Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                 $new_image = Images::create([
                     'url' => $path.$nameImage,
                     'parentable_id' => $create_visualLibraries->id,
                     'parentable_type' => VisualLibraries::class
                 ]);
                 $new_image->parentable()->associate($create_visualLibraries);
                 $new_image->save();

         }
  return $create_visualLibraries? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(VisualLibraries $visualLibraries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisualLibraries $visualLibraries , $id )
    {
         
           $visualLibraries_row = $visualLibraries::with('images')->select('*')->where('id' , $id)->first();
                    
            return view('Dashboard.visualLibraries.edit' , ['visualLibrary' =>$visualLibraries_row     ,  'CurrentLang' => App::getLocale()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisualLibrariesRequest $request, VisualLibraries $visualLibraries)
    {
        $request_data = $request->except(['images','avatar_remove' ,'_token' , 'id']);
         $update = VisualLibraries::where('id',$request['id'])->update($request_data)  ;
        $images = $request->file('images') ; 
        if(isset($images))
        {
             foreach ($request->file('images') as  $imagefile)
            {
                     $path = 'uploads/images/visaulLibraries/';
                    $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                        $new_image = Images::create([
                            'url' => $path.$nameImage,
                            'parentable_id' =>  $request['id'],
                            'parentable_type' => VisualLibraries::class
                        ]);
                        // $new_image->parentable()->associate($createNews);
                        $new_image->save();


            }
     }
 
        return $update? parent::successResponse():  parent::errorResponse(); 
    }


    public function VisualLibrariesImages(Request $request,$id) 
    {   
          if ($request->ajax()) 
        {
            $data = VisualLibraries::with('images')->where('id' , $id) ;
             return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('images' , function ($data){  
                        $html = '';
                        foreach ($data->images as $image) {
                            $nameImage = $image->url;
                            $url = asset("/storage2/$nameImage");
                     
                            $html .= '
                                <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="">
                                    <div   class="image-input-wrapper w-100px h-100px" style="background-image:url(' . $url . ');"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                         <button name="bstable-actions" class="deleteRecord btn btn-xs btn show_confirm"    data-id="'.$image->id.'" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg> </button>
                                    </label>  
                                </div>
                            </div>
                            ';
                        }
                    
                        return $html;
                   })  
                   ->rawColumns(['images'])
                   ->make(true); 
            
          
        }
      
    }

    public function VisualLibrariesImagesDelete($id)
    { 
          $deleteRow =  Images::find($id)->delete();
         return  $deleteRow ? parent::successResponse():  parent::errorResponse();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisualLibraries $visualLibraries , $id)
    {
         $delete_row= $visualLibraries::find($id)->first();
           return  ($delete_row->delete() )  ? parent::successResponse():  parent::errorResponse();
      
         
    }
}
