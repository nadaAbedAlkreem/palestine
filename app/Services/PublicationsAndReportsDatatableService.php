<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use App\Models\PublicationsAndReports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\DataTables;



class PublicationsAndReportsDatatableService extends Controller
{
    public function handle( $request,$data)
    {
             return DataTables::of($data)
                    ->addIndexColumn()
                    
                    ->filter(function ($instance) use ($request) {
                    
                       })
                     ->addColumn('action', function ($data)
                      {
                        

                          return '
                            
                                    <button type="button"  class="btn btn-xs btn"   
                                     ><a href = "publicationsAndReports/'.$data->id.'/edit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                     <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                    </svg></a>
                       
                                    <button name="bstable-actions" class="deleteRecord btn btn-xs btn show_confirm"    data-id="'.$data->id.'" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg> </button>
                                  
                            ';
                      })

                   
                      ->addColumn('title' , function ($data){
                        $nameImage = $data->images; 
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
                                    <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">'.$data->title.'</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                    
                        ' ;
                   })  
                //    <td><a href="{{url('/download',$data->file)}}">Download</a></td>
                ->addColumn('file' , function($data){
                    return '<td><a href="' . route('download', ["file"=>$data->file]) . '"   class="btn btn-outline-success">   <i class="fas fa-download"></i> Download</a></td>';
                })


                   ->addColumn('title_ar' , function ($data){
                    $nameImage = $data->images; 
                     $url=asset("/storage2/$nameImage");
                        return ' 
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url('.$url.');"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a   class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">'.$data->title_ar.'</a>
                                <!--end::Title-->
                            </div>
                        </div>
                
                    ' ;
               })  
                   
               
                    ->rawColumns([ 'action' ,'file' , 'title'  , 'title_ar' ])
                    ->make(true); 
           
    }
 
 
}