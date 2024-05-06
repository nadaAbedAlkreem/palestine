<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Settings ;
use App ; 

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests , ValidatesRequests;
    public function download(Request $request)
    { 
        return response()->download(public_path('storage2/'.$request->file));

    }
    public static function successResponse(string $message_en = 'Operation Ran Successfully!' )
    {
        return response()->json([
            'message' => $message_en,
        ], Response::HTTP_OK);
    }
     

    public static function errorResponse(string $message_en = 'Something went wrong, Please try again.')
    {
        return response()->json([
            'message' =>   $message_en ,
        ], Response::HTTP_BAD_REQUEST);
    }


}
