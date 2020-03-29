<?php

namespace App\Http\Controllers;

use App\Generatelinks;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
      //  dd($request->all());
      $token = $request->tokenid;
      if($token){
        $request->validate([
            'student_name' => 'required',
            'mob_number' => 'required',
            'email_id' => 'required|email',
            'city' => 'required',
            'stream' => 'required',
          ]);
          $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
          $quizDetails = Topic::find($linkDetails->topic_id)->description;
            $desc = explode(',',$quizDetails);    
               //   if (!isset($linkDetails->startTime)) {
        //     $now = Carbon::now();
        //     $linkDetails->startTime = $now;
        //     $linkDetails->save();
        // }
        //   $request->session()->put('tokenid',$request->tokenid);
        }
       return view('quiz.quizhome',['tokenid'=>$token,'data'=>$request->all(),'desc'=>$desc]);
       //return redirect()->route('mcq_home',$request->tokenid);
    }
}
