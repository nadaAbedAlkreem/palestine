<?php 
use App\Models\Settings;
use Illuminate\Support\Facades\App;



if(!function_exists('getDataSetting'))
{ 
    function getDataSetting(){
         $settings = Settings::select('*')->get();  
         return ["settings"=>$settings  , "CurrentLang" => App::getLocale()]; 
    }


}
    
