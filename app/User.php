<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','company_website', 'email', 'password', 'mobile', 'mobile_2', 'school', 'address', 'city', 'percent_10', 'dob', 'appearing', 'experience', 'college', 'gender', 'percent_11', 'role','linkId','company_img','company_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function answers() {
      return $this->hasOne('App\Answer');
    }

    public function topic() {
      return $this->belongsToMany('App\Topic','topic_user')
        ->withPivot('amount','transaction_id','status')
        ->withTimestamps();
    }

    public function is_admin() {
      if (Auth::check()) {
        if (Auth::user()->role == 'A' || Auth::user()->role == 'C') {
          return true;
        }
        return false;
      }
      return false;
    }
}
