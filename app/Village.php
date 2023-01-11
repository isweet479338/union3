<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Village extends Model
{
    use SoftDeletes;

    public function word()
    {
        return $this->belongsTo('App\Word','word_id','id');
    }
    public function mowja()
    {
        return $this->belongsTo('App\Mowja','mowja_id','id');
    }












}
