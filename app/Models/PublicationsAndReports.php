<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class PublicationsAndReports extends Model
{
    use HasFactory,SoftDeletes;  
    protected $fillable = [
        'title', 
        'title_ar',  
        'images'  , 
        'file' ,
        'language'
  
];

public function images(): MorphMany
{
    return $this->morphMany(Images::class, 'parentable');
}
}
