<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MainInput extends Model
{
   use SoftDeletes;

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
