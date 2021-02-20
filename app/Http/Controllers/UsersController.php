<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', '!=', 'A')->orderBy('id', 'desc')->get();
        return view('admin.users.indexx', compact('users'));

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
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'mobile' => 'unique:users',
          'password' => 'required|string|min:6',
        ]);

        $input = $request->all();

        User::create([
          'name' => $input['name'],
          'email' => $input['email'],
          'password' => bcrypt($input['password']),
          'mobile' => $input['mobile'],
          'address' => $input['address'],
          'city' => $input['city'],
          'role' => $input['role'],
        ]);

        return back()->with('added', 'User has been added');
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
        $user = User::findOrFail($id);

        $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string',
         // 'password' => 'required|string|min:6',
        //'mobile' => 'unique:users',
        ]);

        $input = $request->all();

          $user->company_website = $request->company_website;
          $user->email = $request->email;
          $user->mobile = $request->mobile;

          if($request->changepass == '1'){
          $user->password =  bcrypt($request->password);
          }

          $user->city = $request->city;
          $user->address = $request->address;
          $user->name = $request->name;
          
          if($request->changeimg == '1'){
          if ($file = $request->file('company_img')) {
            $name = 'company_'.time().$file->getClientOriginalName();
           
            if($request->company_img != null) {
            
               $file->move('images/company/', $name);
               $user->company_img = $name;
            }
          }
        }
                     $user->save();
    

        return back()->with('updated', 'Your Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('deleted', 'User has been deleted');
    }

}
