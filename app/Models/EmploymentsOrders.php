<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmploymentsOrders extends Model
{
    use HasFactory , SoftDeletes;  
    protected $fillable = [
        'first_name', 
        'father_name',  
        'grandfather_name', 
        'family_name',  
        'mobile',     
        'email',  
        'gender', 
        'qualification',
        'Birthday', 
        'cv', 
        'language'
];
}
