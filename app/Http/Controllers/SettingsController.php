<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexHome()
    {
        $setting = Settings::select('*')->where('groub' , 'home')->get();
         return view('Dashboard.setting.home' , ['setting' => $setting, 'CurrentLang' => App::getLocale()]) ; 
    }
    public function indexValuesPrinciples()
    {
        $setting = Settings::select('*')->where('groub', 'values_principles')->get();
         return view('Dashboard.setting.valuesPrinciples' , ['setting' => $setting ,'CurrentLang' => App::getLocale() ]) ; 
    }
    public function indexGoals()
    {
        $setting = Settings::select('*')->where('groub' , 'goals')->get();
         return view('Dashboard.setting.goals' , ['setting' => $setting ,'CurrentLang' => App::getLocale() ]) ; 
    }
    public function indexAssociation()
    {

        $setting = Settings::select('*')->where('groub' , 'association')->get();
         return view('Dashboard.setting.association' , ['setting' => $setting  , 'CurrentLang' => App::getLocale() ]) ; 
    }
    public function indexMessage()
    {
        $setting = Settings::select('*')->where('groub' , 'message')->get();
         return view('Dashboard.setting.message' , ['setting' => $setting  ,'CurrentLang' => App::getLocale()]) ; 
    }
    public function indexVision()
    {
        $setting = Settings::select('*')->where('groub' , 'vision')->get();
          return view('Dashboard.setting.vision' , ['setting' => $setting , 'CurrentLang' => App::getLocale()]) ; 
    }
    public function updateMessage(UpdateSettingsRequest $request, Settings $settings)
    {   
    
  
           foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
            {   
                if (strpos($key, "image")) 
                {
                     $path = 'uploads/images/setting/';
                    $nameImage = time()+rand(1,10000000).'.'.$request->file($key)->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($key) ));
                    $data = Settings::where('key', $key)->first();
                      $data->value =  $path.$nameImage ;
                    $data->update();

                }else
                {
                    $data = Settings::where('key',  $key)->first();
                    $data->value = $value;
                    $data->update();

                }
            }

          return  $data->update() ? parent::successResponse():  parent::errorResponse(); 
     }

 
     
    public function updateHome(UpdateSettingsRequest $request, Settings $settings)
    {   
        
            foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
            {
                
                 if  ($key == "logo"  || $key == "name")
                {
                  
                    $path = 'uploads/images/setting/';
                    $nameImage = time()+rand(1,10000000).'.'.$request->file($key)->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($key) ));
                    $data = Settings::where('key', $key)->first();
 
                    $data->value =  $path.$nameImage ;
                    $data->update();

                }else
                {
                    $data = Settings::where('key',  $key)->first();
                    $data->value = $value;
                    $data->update();

                }
            }

          return  $data->update() ? parent::successResponse():  parent::errorResponse(); 
    }
    public function updateAssociation(UpdateSettingsRequest $request, Settings $settings)
    {   
           foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
            {
                
                if (strpos($key, "image")) 
                {
                     $path = 'uploads/images/setting/';
                    $nameImage = time()+rand(1,10000000).'.'.$request->file($key)->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($key) ));
                    $data = Settings::where('key', $key)->first();
                      $data->value =  $path.$nameImage ;
                    $data->update();

                }else
                {
                    $data = Settings::where('key',  $key)->first();
                    $data->value = $value;
                    $data->update();

                }
            }

          return  $data->update() ? parent::successResponse():  parent::errorResponse(); 
    }
    public function updateVision(UpdateSettingsRequest $request, Settings $settings)
    {   
           foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
            {
                
                if (strpos($key, "image")) 
                {
                     $path = 'uploads/images/setting/';
                    $nameImage = time()+rand(1,10000000).'.'.$request->file($key)->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($key) ));
                    $data = Settings::where('key', $key)->first();
                      $data->value =  $path.$nameImage ;
                    $data->update();

                }else
                {
                    $data = Settings::where('key',  $key)->first();
                    $data->value = $value;
                    $data->update();

                }
            }

          return  $data->update() ? parent::successResponse():  parent::errorResponse(); 
    }
    public function updateValuesPrinciples(UpdateSettingsRequest $request, Settings $settings)
    {   
           foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
            {
                
                if (strpos($key, "image")) 
                {
                     $path = 'uploads/images/setting/';
                    $nameImage = time()+rand(1,10000000).'.'.$request->file($key)->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($key) ));
                    $data = Settings::where('key', $key)->first();
                      $data->value =  $path.$nameImage ;
                    $data->update();

                }else
                {
                    $data = Settings::where('key',  $key)->first();
                    $data->value = $value;
                    $data->update();

                }
            }

          return  $data->update() ? parent::successResponse():  parent::errorResponse(); 
    }
    public function updateGoals(UpdateSettingsRequest $request, Settings $settings)
    {   
            foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
            {
                // if (strpos($key, "image")) 
                // {
                //      $path = 'uploads/images/setting/';
                //     $nameImage = time()+rand(1,10000000).'.'.$request->file($key)->getClientOriginalExtension();
                //     Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($key) ));
                //     $data = Settings::where('key', $key)->first();
                //       $data->value =  $path.$nameImage ;
                //     $data->update();

                // // }else
                // {
                    $data = Settings::where('key',  $key)->first();
           
                    $data->value = $value;
                    $data->update();

                // }
            }

          return  $data->update() ? parent::successResponse():  parent::errorResponse(); 
    }
 
}
 