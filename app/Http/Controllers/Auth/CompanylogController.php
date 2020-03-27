<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
//use App\Companylog;
use Auth;
use Hash;

class CompanylogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function index()
    {
       // $users = User::where('role', '!=', 'A')->get();
       return view('auth.companylogin');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/company';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   
    // *
    //  * Obtain the user information from GitHub.
    //  *
    //  * @return \Illuminate\Http\Response
     
    public function login()
    {

       
        $findUser=Companylog::where('username',$userSocial->username)->first();
       // var_dump($findUser); exit();
        if($findUser)
        {
             Auth::login($findUser);
                return '<script>if (window.opener) {window.opener.location.href="/quickquiz/public"; window.close();}</script>';

        }
        else
        {
      
       var_dump("hii"); exit();
        return '<script>if (window.opener) {window.opener.location.href="/quickquiz/public"; window.close();}</script>';
        }
        
    }
}
  

   