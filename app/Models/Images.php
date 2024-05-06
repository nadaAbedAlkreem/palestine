<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Images extends Model
{
    use HasFactory  ,SoftDeletes;  
    protected $fillable = [
        'url', 
        'parentable_id',  
        'parentable_type'  
  
];

public function parentable(): MorphTo
{
    return $this->morphTo();
}
}
