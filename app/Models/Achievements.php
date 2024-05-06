<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievements extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable = [
        'image',
        'title', 
        'title_ar', 
        'count', 
        'language' 
  

  
];}
