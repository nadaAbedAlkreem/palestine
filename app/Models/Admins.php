<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;


class Admins extends Authenticatable
{
    use HasFactory ,
       SoftDeletes
      , HasRoles ,
      Notifiable;

     
      protected $fillable = [
          'full_name', 
          'email',  
          'password'  
    
  ];
  public function isAdmin()
  {
      return $this->hasRole('super-admin');
  }
}
