<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Requests\Storage ;
use App\Models\News ; 

class Slider extends Model
{
    use HasFactory , SoftDeletes ;

    protected $fillable = [
        'title', 
        'title_ar',  
        'description', 
        'description_ar' , 
        'rediract_to' , 
        'news_id' ,
        'text_button' , 
        'image'   , 
        'active' , 
        'publication_start' , 
        'publication_end' , 
        'language'
] ;
    public function news()
    {
        return $this->belongsTo(News::class);
    }
    public function active() 
    { 
        if ($this->active ==  0 ) {
        return '
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
        </div>' ; 
        }else
        {
            return  '
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
            </div>';
        }
    }

}
