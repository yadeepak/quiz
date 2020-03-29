<?php

namespace App\Http\Controllers;

use App\Generatelinks;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Session;
use App\Topic;
class FrntendQuizController extends Controller
{
    //
    public function index(Request $request, $token = null)
    {
        if ($token) {
            $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
            $signInCheck = $request->session()->has('tokenid');
            if ($linkDetails && $signInCheck) {
                return view('quiz.quizstart');
            } else  if ($linkDetails && !$signInCheck) {
                return view('quiz.register',['tokenid'=>$token]);
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }

    public function registerSubmit(Request $request)
    { 

        $request->session()->put('tokenid',$request->tokenid);
       // return redirect()->route('mcq_home',$request->tokenid);

       $input = $request->all();

       User::create([
         'name' => $input['name'],
         'email' => $input['email'],
         'dob' => $input['dob'],
         'gender' => $input['gender'],
         'college' => $input['college'],
         'experience' => $input['experience'],
         'appearing' => $input['appearing'],
         'mobile' => $input['mobile'],
         'address' => $input['address'],
         'role' => "U",
        ]);

       return back()->with('added', 'User has been added');

    }
}
