<?php

namespace App\Http\Controllers;
use App\Generatelinks;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Topic;
use App\Question;
use App\User;
use Illuminate\Support\Facades\DB;
use Exception;

class FrntendQuizController extends Controller
{
    //
    public function index(Request $request, $token = null)
    {
       // $request->session()->flush();
        if ($token) {
            $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
            $signInCheck = $request->session()->has('tokenid');
            $testStart = $request->session()->has('testStart');
            $emailid = $request->session()->get('emailid');
            if ($linkDetails && $signInCheck && !$testStart) {
                $request->session()->put('isAllowed','2');
                $request->session()->put('testStart',true);
                $user = User::where(['email' => $emailid])->first();
                $topics = Topic::where(['id' => $linkDetails->topic_id])->first();
                $questions = Question::where('topic_id',$linkDetails->topic_id)->get();    
                
                return view('quiz.quizstart',compact('user','topics','questions'));
            } else  if ($linkDetails && !$testStart ) {
                return view('quiz.register',['tokenid'=>$token]);
            } else {
                return abort(404,'You do not have access , please contact support');
            }
        } else {
            return abort(404 ,'it seems you have enterd wrong url , or it may have been expired');
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
           $check = User::where('email' , $input['email'])->orWhere('mobile', $input['mobile'])->first();
           if($check ) return Redirect::back()->withErrors(['email id or phone number already exists']);
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
            'linkId' => $linkDetails->id,
           ]);
           $quizDetails = Topic::find($linkDetails->topic_id)->description;
             $desc = explode(',',$quizDetails); 
             if(!$request->session()->has('isAllowed')){
             $request->session()->put('isAllowed','1');  
             } 
          return view('quiz.quizhome',['tokenid'=>$token,'data'=>$request->all(),'desc'=>$desc]);
          }
        }

    public function proceed(Request $request)
    {   $isAccessible = $request->session()->get('isAllowed');
        if($isAccessible !=='1') return response(['allowed'=>false]);
        $linkDetails = Generatelinks::where(['token' => $request->tokenid, 'expired' => 0])->first();
        if (!isset($linkDetails->startTime)) {
            $now = Carbon::now();
            $linkDetails->startTime = $now;
            $linkDetails->save();
        }
        $request->session()->put('tokenid',$request->tokenid);
        $request->session()->put('emailid',$request->student_email);
        return response(['allowed'=>true]);
    }


    public function submitTest(Request $request){
        $signInCheck = $request->session()->has('tokenid');
       if(!$signInCheck) return abort(404);
        $token = $request->session()->get('tokenid');
        $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
            $emailid = $request->session()->get('emailid');
            $user = User::where(['email' => $emailid])->first();
            $topics = Topic::where(['id' => $linkDetails->topic_id])->first();
            $questions = Question::where('topic_id',$linkDetails->topic_id)->get();  
            $rightQ = 0;
            $wrongQ = 0; 
            for($i=0;$i<count($questions);$i++){
            if($answer = $request['optradio'.$i]){
                $correctAns = $questions[$i]['answer'];
                if($correctAns === strtoupper($answer)){
                    $rightQ +=1; 
                }else {
                    $wrongQ +=1; 
                }
            }
            }
            $request->session()->flush();//remove all sessions data
            $unAttemptedCount = count($questions) - ($rightQ + $wrongQ);
            $data = ['rightQ'=>$rightQ,'wrongQ'=>$wrongQ,'unAttemptedCount'=>$unAttemptedCount,'total'=>count($questions)];  
            return view('quiz.finish',compact('data','user'));      
    }
}
