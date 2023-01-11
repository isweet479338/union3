<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Mowja extends Model
{
   use SoftDeletes;


       public function word()
    {
        return $this->belongsTo('App\Word','word_id','id');
    }


}
