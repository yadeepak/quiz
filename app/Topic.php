<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
      'title', 'per_q_mark', 'description', 'timer','show_ans','amount','created_by','creator','minpercentage','round',
    ];

    public function question(){
      return $this->hasMany('App\Question','topic_id','id');
    }

    public function answer(){
      return $this->hasOne('App\Answer');
    }
    public function result() {
      return $this->hasMany('App\Result','topic_id');
    } 
    public function generatedLink(){
      return $this->hasMany('App\Generatelinks','topic_id','id');
    }
    public function user() {
      return $this->belongsToMany('App\User','topic_user');
    }

    public function student(){
      return $this->hasMany('App\User','linkId','id');
    }
}
