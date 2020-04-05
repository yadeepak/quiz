<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generatelinks extends Model
{
    protected $fillable = [
      'topic_id', 'token', 'endtime',
    ];

    public function question(){
      return $this->hasOne('App\Question');
    }

    public function answer(){
      return $this->hasOne('App\Answer');
    }
    
    public function user() {
      return $this->belongsToMany('App\User','topic_user')
         ->withPivot('amount','transaction_id', 'status')
        ->withTimestamps();
    }

    public function student(){
      return $this->hasMany('App\User','linkId','id');
    }

}
