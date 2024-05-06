<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Programs  ;
class Donors extends Model
{
    use HasFactory , SoftDeletes;  
    protected $fillable = [
        'name', 
        'email'   , 
        'mobile'   , 
        'country' , 
        'city' , 
        'message' ,
        'announcing_donor' , 
        'money'  ,
        'language'

  
];
public function programs()
{
    return $this->belongsToMany(Programs::class);
}
}
