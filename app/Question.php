<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }
  public function category(){
    return $this->belongsTo('App\Category');
  }
}
