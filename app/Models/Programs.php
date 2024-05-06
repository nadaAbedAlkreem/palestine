<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Donors  ;

class Programs extends Model
{
    use HasFactory  , SoftDeletes;  
    protected $fillable = [
        'image', 
        'title',  
        'title_ar',  
        'brief' ,
        'brief_ar' ,  
        'strategic_objective' ,  
        'strategic_objective_ar' ,  
        'special_objectives' ,  
        'special_objectives_ar' ,  
        'ativities_events' ,  
        'ativities_events_ar' ,  
        'language'
  
];
public function donors()
{
    return $this->belongsToMany(Donors::class);
}
}
