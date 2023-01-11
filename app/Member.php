<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Member extends Model
{
   use SoftDeletes;
  
    public function submembers()
    {
        return $this->hasMany('App\SubMember');
    }
}
