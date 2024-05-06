<?php
namespace App\Traits;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

trait DownloadFile
{
    public function download(Request $request)
    { 
        return response()->download(public_path('storage2/'.$request->file));

    }
}