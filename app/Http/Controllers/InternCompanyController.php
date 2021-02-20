<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Company;
use App\Answer;
use App\User;
class InternCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $company = User::select('*')
        ->where('role', '=', 'C')
        ->where('company_type', '=', 'internship')
        ->orderBy('id', 'desc')->get();
        return view('admin.interncompany.indexx', compact('company'));
    }

    public function internreg(){

        return view('internreg');

    }

    public function companyreg(){

      return view('companyreg');

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

      $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'company_website' => 'required',
        'mobile' => 'required',
        'password'=>'required'
      ]);

       $input = $request->all();
   
        $password =  bcrypt($request->password);
        $input['password'] = $password;
        $input['role'] = 'C';
        $input['company_type'] = 'internship';
      if ($file = $request->file('company_img')) {

        $name = 'company_'.time().$file->getClientOriginalName();
        $file->move('images/company/', $name);
        $input['company_img'] = $name;

    }

       // $input = $request->all();
       $check = User::where('email' , $input['email'])->orWhere('mobile', $input['mobile'])->first();
       if($check){ 
        return redirect()->back()->withErrors(['email id or phone number already exists']);
       }else{
         $quiz = User::create($input);
       }   
      // $input['show_ans'] = $request->show_ans;
       //return Topic::create($input);
       return redirect()->back()->with('added', 'Company has been added');
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
       

          $topic = User::findOrFail($id);
          
          $topic->company_website = $request->company_website;
          $topic->email = $request->email;
          $topic->mobile = $request->mobile;

          if($request->changepass == '1'){
          $topic->password =  bcrypt($request->password);
          }

          $topic->city = $request->city;
          $topic->address = $request->address;
          $topic->name = $request->name;
         // $topic->company_img = $request->company_img;

          if($request->changeimg == '1'){
          if ($file = $request->file('company_img')) {
              
            $name = 'company_'.time().$file->getClientOriginalName();
            //var_dump($name); exit();
            if($request->company_img != null) {
             // var_dump($request->company_img); exit();
               // unlink(public_path().'/images/company/'.$request->company_img);
               $file->move('images/company/', $name);
               $topic['company_img'] = $name;
            }
           
          //  var_dump($name); exit();

          }
        }



         

          $topic->save();

          return back()->with('updated','Company updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = User::findOrFail($id);
        $company->delete();
        return back()->with('deleted', 'Company has been deleted');
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
