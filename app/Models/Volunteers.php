<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteers extends Model
{

    use HasFactory , SoftDeletes ;
    protected $table = "volunteers_orders" ; 
      protected $fillable = [
        'name' ,
        'mobile' ,
        'email' ,
        'address',
        'volunteered' , 
        'volunteered_place' , 
        'skills' , 
        'volunteer_skills' , 
        'beginning_volunteering' , 
        'end_volunteering' , 
        'study_experience_volunteer' , 
        'cv_volunteer',
        'language'






    
  ];}
