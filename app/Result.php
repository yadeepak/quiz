<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable = [
        'topic_id', 'user_id', 'rightQ', 'wrongQ', 'unattemptedQ','totalQ'
      ];
  
      public function user(){
        return $this->hasOne('App\User','id','user_id');
      }
  
  
      public function topic() {
        return $this->belongsTo('App\Topic');
      }
}