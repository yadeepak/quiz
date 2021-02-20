<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
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
      } else {
        $topics = Topic::orderBy('id', 'desc')->get();
        // dd($topics);
      }
        return view('admin.quiz.index', compact('topics'));
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

    /**Topic
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $input = $request->all();
        $request->validate([
          'title' => 'required|string',
          'per_q_mark' => 'required',
          'minpercentage' => 'required',
        ]);

        if(isset($request->quiz_price)){
          $request->validate([
            'amount' => 'required'
          ]);
        }

        if(isset($request->quiz_price)){
          $input['amount'] = $request->amount;
        }else{
          $input['amount'] = null;
        }

        if(isset($request->show_ans)){
          $input['show_ans'] = "1";
        }else{
          $input['show_ans'] = "0";
        }
        $input['round'] = $request->round;
        $input['created_by'] = Auth::id();
        $input['creator'] = Auth::user()->name;
       // $input = $request->all();
           $quiz = Topic::create($input);
           
       // $input['show_ans'] = $request->show_ans;
        //return Topic::create($input);
        return back()->with('added', 'Quiz has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate([

          'title' => 'required|string',
          'per_q_mark' => 'required',
          'minpercentage' => 'required'
          
        ]);

        if(isset($request->pricechk)){
          $request->validate([
            'amount' => 'required'
          ]);
        }

          $topic = Topic::findOrFail($id);
          
          $topic->title = $request->title;
          $topic->description = $request->description;
          $topic->per_q_mark = $request->per_q_mark;
          $topic->timer = $request->timer;
          $topic->minpercentage = $request->minpercentage;
          $topic->round = $request->round;

          if(isset($request->show_ans)){
            $topic->show_ans = 1;
          }else{
            $topic->show_ans = 0;
            
          }

          if(isset($request->pricechk)){
            $topic->amount = $request->amount;
          }else{
            $topic->amount = NULL;
          }

         

          $topic->save();

          return back()->with('updated','Quiz updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();
        return back()->with('deleted', 'Quiz has been deleted');
    }

    public function deleteperquizsheet($id)
    {
      $findanswersheet = Answer::where('topic_id','=',$id)->get();

      if($findanswersheet->count()>0){
        foreach ($findanswersheet as $value) {
          $value->delete();
        }
      
        return back()->with('deleted','Answer Sheet Deleted For This Quiz !');

      }else{
        return back()->with('added','No Answer Sheet Found For This Quiz !');
      }
      

    }
}
