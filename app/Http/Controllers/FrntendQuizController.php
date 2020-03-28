<?php

namespace App\Http\Controllers;

use App\Generatelinks;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class FrntendQuizController extends Controller
{
    //
    public function index(Request $request, $token = null)
    {
        if ($token) {
            $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
            $signInCheck = $request->session()->has('tokenid');
            if ($linkDetails && $signInCheck) {
                if (!isset($linkDetails->startTime)) {
                    $now = Carbon::now();
                    $linkDetails->startTime = $now;
                    $linkDetails->save();
                }
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
       return redirect()->route('mcq_home',$request->tokenid);
    }
}
