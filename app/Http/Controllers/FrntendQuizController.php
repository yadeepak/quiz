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

       $token = $request->tokenid;
       if($token){
         $request->validate([
             'name' => 'required',
             'dob' => 'required',
             'email' => 'required|email',
             'gender' => 'required',
             'experience' => 'required',
             'college' => 'required',
             'mobile' => 'required',
             'appearing' => 'required',
           ]);
           $input = $request->all();
           $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
          
        $user =   User::firstOrCreate([
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
            'linkId' => $linkDetails->id,
           ]);
           $quizDetails = Topic::find($linkDetails->topic_id)->description;
             $desc = explode(',',$quizDetails);    
          return view('quiz.quizhome',['tokenid'=>$token,'data'=>$request->all(),'desc'=>$desc]);
          }
        }

    public function proceed(Request $request)
    {
        $linkDetails = Generatelinks::where(['token' => $request->tokenid, 'expired' => 0])->first();
        if (!isset($linkDetails->startTime)) {
            $now = Carbon::now();
            $linkDetails->startTime = $now;
            $linkDetails->save();
        }
        $request->session()->put('tokenid',$request->tokenid);
        $request->session()->put('emailid',$request->student_email);
        return redirect()->route('mcq_home',$request->tokenid);
    }
}
