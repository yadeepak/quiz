<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Answer;
use App\Generatelinks;
use Illuminate\Support\Facades\DB;

class GlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$glinks = Generatelinks::all();
        
        $glinks =  DB::table('generatelinks')
                ->select('topics.title','generatelinks.*')
                ->join('topics','topics.id','=','generatelinks.topic_id')
                ->get();
        $topics = Topic::pluck('title', 'id')->toArray();



        return view('admin.glink.index', compact('glinks','topics'));
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

       $input = $request->all();
        $request->validate([
          'topic_id' => 'required',
          'endtime' => 'required',
        ]);
        $six_digit_random_number = mt_rand(100000, 999999);
          $md5data = md5($six_digit_random_number);
          $token = substr($md5data,0,8);
          $input['token'] = $token;
       // $input = $request->all();
           $quiz = Generatelinks::create($input);
           
       // $input['show_ans'] = $request->show_ans;
        //return Topic::create($input);
        return back()->with('added', 'Link Generated');
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

          'topic_id' => 'required',
          'endtime' => 'required',
          
        ]);

          $links = Generatelinks::findOrFail($id);

          
          
          $links->topic_id = $request->topic_id;
          $links->endtime = $request->endtime;
          

          $links->save();

          return back()->with('updated','Link updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generatelink = Generatelinks::findOrFail($id);
        $generatelink->delete();
        return back()->with('deleted', 'Link deleted');
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
