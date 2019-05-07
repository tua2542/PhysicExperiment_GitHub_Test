<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Member extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = "member";
   
   protected $fillable = [
       'firstname', 'lastname', 'email', 'password'
   ];

   protected $hidden = [
       'password'
   ];

   public $timestamps = false;
}
