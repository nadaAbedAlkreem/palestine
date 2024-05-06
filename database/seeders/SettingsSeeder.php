<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::create(['key' => 'logo', 'value' =>'', 'groub' => 'home'   ,'type_field'=> 'image' ]);
        Settings::create(['key' => 'name', 'value' =>'', 'groub' => 'home'   ,'type_field'=> 'image' ]);
        Settings::create(['key' => 'about_us', 'value' =>'', 'groub' => 'home'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'loaction', 'value' =>'', 'groub' => 'home'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'about_us_ar', 'value' =>'', 'groub' => 'home'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'loaction_ar', 'value' =>'', 'groub' => 'home'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'mobile', 'value' =>'', 'groub' => 'home'  ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'Twitter', 'value' =>''    , 'groub' => 'home'   ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'facebook', 'value' =>''    , 'groub' => 'home'   ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'gmail', 'value' =>''    , 'groub' => 'home'  ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'Instagram', 'value' =>''    , 'groub' => 'home'  ,'type_field'=> 'input' ]);
      
      
        Settings::create(['key' => 'values_principles_header', 'value' =>''    , 'groub' => 'values_principles'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'values_principles_body', 'value' =>''    , 'groub' => 'values_principles'  ,'language'=> 'en' ,'type_field'=> 'textarea' ]);
        Settings::create(['key' => 'values_principles_header_ar', 'value' =>''    , 'groub' => 'values_principles'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'values_principles_body_ar', 'value' =>''    , 'groub' => 'values_principles'  ,  'language'=> 'ar','type_field'=> 'textarea' ]);
       
       
        Settings::create(['key' => 'goals_header', 'value' =>''    , 'groub' => 'goals'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'goals_body', 'value' =>''    , 'groub' => 'goals'  ,'language'=> 'en' ,'type_field'=> 'textarea' ]);
        Settings::create(['key' => 'goals_header_ar', 'value' =>''    , 'groub' => 'goals'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'goals_body_ar', 'value' =>''    , 'groub' => 'goals'  ,  'language'=> 'ar' ,'type_field'=> 'textarea' ]);
      
    
        Settings::create(['key' => 'association_header', 'value' =>''    , 'groub' => 'association'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'association_body', 'value' =>''    , 'groub' =>   'association'  ,'language'=> 'en' ,'type_field'=> 'textarea' ]);
        Settings::create(['key' => 'association_image', 'value' =>''    , 'groub' =>  'association'  ,'language'=> 'en' ,'type_field'=> 'image' ]);
        Settings::create(['key' => 'association_header_ar', 'value' =>''    , 'groub' => 'association'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'association_body_ar', 'value' =>''    , 'groub' =>   'association'  ,'language'=> 'ar' ,'type_field'=> 'textarea' ]);
        Settings::create(['key' => 'association_image_ar', 'value' =>''    , 'groub' =>  'association'  ,'language'=> 'ar' ,'type_field'=> 'image' ]);
     
     
        Settings::create(['key' => 'message_header_ar', 'value' =>''    , 'groub' => 'message'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'message_body_ar', 'value' =>''    ,   'groub' => 'message'  ,  'language'=> 'ar' ,'type_field'=> 'textarea']);
        Settings::create(['key' => 'message_image_ar', 'value' =>''    , 'groub' => 'message'  , 'language'=> 'ar' ,'type_field'=> 'image' ]);
        Settings::create(['key' => 'message_header', 'value' =>''    , 'groub' => 'message'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'message_body', 'value' =>''    ,   'groub' => 'message'  , 'language'=>'en' ,'type_field'=> 'textarea']);
        Settings::create(['key' => 'message_image', 'value' =>''    , 'groub' => 'message'  , 'language'=> 'en' ,'type_field'=> 'image' ]);
    
    
        Settings::create(['key' => 'vision_header', 'value' =>''    , 'groub' => 'vision'  ,'language'=> 'en' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'vision_body', 'value' =>''    , 'groub' => 'vision'  ,  'language'=> 'en' ,'type_field'=> 'textarea' ]);
        Settings::create(['key' => 'vision_image', 'value' =>''    , 'groub' => 'vision'  , 'language'=> 'en' ,'type_field'=> 'image' ]);

       
        Settings::create(['key' => 'vision_header_ar', 'value' =>''    , 'groub' => 'vision'  ,'language'=> 'ar' ,'type_field'=> 'input' ]);
        Settings::create(['key' => 'vision_body_ar', 'value' =>''    , 'groub' => 'vision'  ,  'language'=> 'ar' ,'type_field'=> 'textarea' ]);
        Settings::create(['key' => 'vision_image_ar', 'value' =>''    , 'groub' => 'vision'  , 'language'=> 'ar' ,'type_field'=> 'image' ]);







    }
}
