<?php

namespace App\Http\Controllers;
use App\Generatelinks;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Topic;
use App\Question;
use App\User;
use Exception;
use App\Result;
class FrntendQuizController extends Controller
{
    //
    public function index(Request $request, $token = null)
    {
       // $request->session()->flush();
        if ($token) {
            $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
            $round = $linkDetails->topic->round;
            $signInCheck = $request->session()->has('tokenid');
            $testStart = $request->session()->has('testStart');
            $emailid = $request->session()->get('emailid');
            if ($linkDetails && $signInCheck ) {
                $request->session()->put('isAllowed','2');
                $request->session()->put('testStart',true);
                $user = User::where(['email' => $emailid])->first();
                $topics = Topic::where(['id' => $linkDetails->topic_id])->first();
                $questions = Question::where('topic_id',$linkDetails->topic_id)->get();    
                
                return view('quiz.quizstart',compact('user','topics','questions','round'));
            } else  if ($linkDetails && !$testStart ) {
                return view('quiz.register',['tokenid'=>$token,'round'=>$round]);
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
       $round = $request->round;
       $validate = [
        'name' => 'required',
        'dob' => 'required',
        'email' => 'required|email',
        'gender' => 'required',
        'experience' => 'required',
        'college' => 'required',
        'mobile' => 'required|max:10|min:10',
        'appearing' => 'required',
       ];
       if($round==="2"){
           $validate = [
            'email' => 'required|email',
           ];
       }
       if($token){
        if($request->validate($validate)) {

            $input = $request->all();
            $input['linkId'] = 'dummy'; //to do not  match in round 1
            if($round==="2"){
                $input = User::where('email' , $request->email)->first();
                if(!$input){
                return abort(404,'You do not have access to this page or this page may have expired');
                }
                $isAppeared = $input->result??0;
                if(!$isAppeared || $isAppeared->passed === 0){
                    return abort(404,'It seems you could not clear first round.');
                }
                //dd('hello2');
            }else{
                $check = User::where('email' , $input['email'])->orWhere('mobile', $input['mobile'])->first();
                if($check ) return Redirect::back()->withInput($input)->withErrors(['email id or phone number already exists']);    
            }
            $linkDetails = Generatelinks::where(['token' => $token, 'expired' => 0])->first();
            $resp = User::where('email' , $request->email)->latest()->first();
            if($resp){
                $input = $resp;
            }
            if($linkDetails->id == $input['linkId']){
                return abort(404,'You already have appeared for this test.');
            }
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
           return view('quiz.quizhome',['tokenid'=>$token,'data'=>$input,'desc'=>$desc]);
            
        }

           else{
            return Redirect::back()->withInput(Input::all());

           }

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
            $user = User::where(['email' => $emailid])->latest()->first();
            $topics = Topic::where(['id' => $linkDetails->topic_id])->first();

            if($topics['round'] == 2){
                $filedbname = $user['name'].'_'.$user['mobile'].'.txt';
                $filename = public_path().'/round2_files/'.$user['name'].'_'.$user['mobile'].'.txt';
                $myfile = fopen($filename, "x") or die("Unable to open file!");
            }

            $questions = Question::where('topic_id',$linkDetails->topic_id)->get();  
            $rightQ = 0;
            $wrongQ = 0; 
            $count = count($questions)*$topics['per_q_mark'];
            for($i=0;$i<count($questions);$i++){
                if($answer = $request['optradio'.$i]){
                    $correctAns = $questions[$i]['answer'];
                    if($correctAns === strtoupper($answer)){
                        $rightQ +=1; 
                    }else {
                        $wrongQ +=1; 
                    }
                }

                if($answer = $request['code'.$i]){
                    $txt = ($i+1).") ".$questions[$i]['question']."\n\nAnswer: \n\n";
                    $txt .= $answer."\n\n";
                    fwrite($myfile, $txt);
                }

            }

            if($topics['round'] == 1){
            $passingPercentage = $topics['minpercentage'];
            $pass = true;
            $marksObtained = $rightQ*$topics['per_q_mark'];
            $studentPercentage = ($marksObtained*100)/$count;
            $studentPercentage = round($studentPercentage , 2);
            if($passingPercentage > $studentPercentage){
                $pass = false;
            }
            $unAttemptedCount = count($questions) - ($rightQ + $wrongQ);

                $values = [
                    'rightQ'=>$rightQ,
                    'wrongQ'=>$wrongQ,
                    'unattemptedQ'=>$unAttemptedCount,
                    'totalQ'=>count($questions),
                    'user_id'=> $user->id,
                    'topic_id'=> $linkDetails->topic_id,
                    'percentage'=> $studentPercentage,
                    'passed'=> $pass,
                    'token'=> $token,
                ];
                $data = ['rightQ'=>$rightQ,'wrongQ'=>$wrongQ,'unAttemptedCount'=>$unAttemptedCount,'total'=>count($questions),
                'pass'=>$pass,'percentage'=>$studentPercentage,'round'=>1];  
            }

            if($topics['round'] == 2){
                
                $values = [
                    'rightQ'=>0,
                    'wrongQ'=>0,
                    'unattemptedQ'=>0,
                    'totalQ'=>count($questions),
                    'user_id'=> $user->id,
                    'topic_id'=> $linkDetails->topic_id,
                    'percentage'=> 0,
                    'token'=> $token,
                    'filename'=> $filedbname
                ];
                $data = ['round'=>2];
            }

            Result::create($values);
            $request->session()->flush();//remove all sessions data
            
            return view('quiz.finish',compact('data','user'));      
    }


}
