<?php

namespace App\Http\Controllers;

use App\Models\News;  //Images
use App\Models\Images;  //Images
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Yajra\DataTables\DataTables;
use App\Services\NewsDatatableService ; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Permission;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('permission:view news', ['only' => ['index']]);
        $this->middleware('permission:create news', ['only' => ['create','store']]);
        $this->middleware('permission:update news', ['only' => ['update','edit']]);
        $this->middleware('permission:delete news', ['only' => ['destroy']]);
    }
    public function index(Request $request  , NewsDatatableService $newsDatatableService)
    {

        if ($request->ajax()) 
        {
            $data = News::select('*')->where('language' , App::getLocale()) ;
            
            try {
                return $newsDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
       return view('Dashboard.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
    
     return view('Dashboard.news.create'  , ["CurrentLang"=>App::getLocale()]) ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
         
         $createNews = News::create($request->getData())  ;
               foreach ($request->file('images') as  $imagefile)
                {
                    $news = new News();
                    $path = 'uploads/images/news/';
                    $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                        $new_image = Images::create([
                            'url' => $path.$nameImage,
                            'parentable_id' => $createNews->id,
                            'parentable_type' => News::class
                        ]);
                        $new_image->parentable()->associate($createNews);
                        $new_image->save();

                }
         return $createNews? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id) 
    {   
        $news =News::select('*')->where('id' , $id)->first();
        if ($request->ajax()) 
        {
            $data = News::select('*')->where('id' , $id)->first();
             return DataTables::of($data)
                    ->addIndexColumn()
                   
                    ->rawColumns()
                    ->make(true); 
            
          
        }

        
          return view('Dashboard.news.edit'  , ['news' => $news ,'CurrentLang'=>App::getLocale()] );
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $update = News::where('id',$request['id'])->update($request->getData())  ;
        $images = $request->file('images') ; 
 
         if(isset($images))
        {
            foreach ($request->file('images') as  $imagefile)
            {
                     $path = 'uploads/images/news/';
                    $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                        $new_image = Images::create([
                            'url' => $path.$nameImage,
                            'parentable_id' =>  $request['id'],
                            'parentable_type' => News::class
                        ]);
                        // $new_image->parentable()->associate($createNews);
                        $new_image->save();


            }
     }
 
        return $update? parent::successResponse():  parent::errorResponse(); 

     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $deleteRowImagesRelatedNews =  News::find($id)->images()->each(function ($image, $key)
           {
             $image->delete();
           }); 
            $deleteRowNews= News::find($id)->delete();
              return  ($deleteRowImagesRelatedNews) && ($deleteRowNews)  ? parent::successResponse():  parent::errorResponse();
        
    }

    public function imagesDelete($id)
    {   
        $deleteRow =  Images::find($id)->delete($id);
        return  $deleteRow ? $id:  parent::errorResponse();
    }

    // NewsImages
    public function NewsImages(Request $request,$id) 
    {   
          if ($request->ajax()) 
        {
            $data = News::with('images')->where('id' , $id) ;
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

    public function NewsImagesDelete($id)
    { 
          $deleteRow =  Images::find($id)->delete();
         return  $deleteRow ? parent::successResponse():  parent::errorResponse();
    }
  
}
