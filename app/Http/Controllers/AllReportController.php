<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Topic;
use App\Answer;
use App\Question;

class AllReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role === 'C'){
            $topics = Topic::where('created_by',Auth::id())->get();
            $topics->load(['question' => function ($q) use (&$questions) {
                $questions = $q->get();
            }]);
            if($topics){
        $passedStudents = array();  
                $students = array();
        foreach($topics as $key =>$topic){

          $topic->load(['generatedLink.student'=>function($q) use (&$students){
            array_push($students,$q->count());

            }]);
            $topic->load(['result'=>function($q) use (&$passedStudents){
                array_push($passedStudents,$q->where('passed',1)->count());
             }]);
            }
          }
        
    } else {
        $topics = Topic::all();
        $questions = Question::all();
        $students = array();
        $passedStudents = array();  
        foreach($topics as $key =>$topic){
         $topic->load(['result.user' => function ($q) use (&$students) {
            array_push($students,$q->count());
            
        }]);

        $topic->load(['result'=>function($q) use (&$passedStudents){
            array_push($passedStudents,$q->where('passed',1)->count());
         }]);
    }
         // dd($passedStudents);
    }
  

        return view('admin.all_reports.index', compact('topics', 'questions','students','passedStudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        $results = $topic->result;
        $topic->load(['result.user' => function ($q) use (&$users) {
            $users = $q->get();
        }]);
        $answers = Answer::where('topic_id', $topic->id)->get();
        $students = User::where('id', '!=', Auth::id())->get();
        $c_que = Question::where('topic_id', $id)->count();

        $filtStudents = collect();
        foreach ($students as $student) {
          foreach ($answers as $answer) {
            if ($answer->user_id == $student->id) {
              $filtStudents->push($student);
            }
          }
        }

        $filtStudents = $filtStudents->unique();
        $filtStudents = $filtStudents->flatten();

        return view('admin.all_reports.show', compact('results', 'users', 'c_que', 'topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($topicid,$userid)
    {   
         $topicid.$userid;
         $answer = Answer::where('user_id',$userid)->where('topic_id',$topicid)->delete();
        
        return back()->with('deleted','Response Reset Successfully !');
    }
}
