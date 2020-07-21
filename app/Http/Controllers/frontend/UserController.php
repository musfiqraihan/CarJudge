<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
  public function userRegistration()
  {
    return view('frontend.users.userregister');
  }
  public function processRegister(Request $request)
  {
    $request->validate([
     'full_name' => 'required',
     'email' => 'required|email|unique:users,email',
     'mobile_number' => 'required|min:6|max:13|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,mobile_number',
     'password' => 'required|min:8|confirmed'
 ],[
   'full_name.required' => 'We need to know your full name!'
 ]);

  $data =[
    'full_name'  =>$request->input('full_name'),
    'email'  =>strtolower($request->input('email')),
    'mobile_number' =>$request->input('mobile_number'),
    'password' => bcrypt($request->input('password')),
];

  try{
     DB::table('users')->insert($data);
     session()->flash('message', 'User account created.');
     session()->flash('type', 'success');

     return redirect()->route('userloginpage');

  } catch(Exception $e){
    session()->flash('message', $e->getMessage());
    session()->flash('type', 'danger');

    return redirect()->back();
  }
    //return $request->all();
  }

  public function userLogin()
  {
      return view('frontend.users.userlogin');
  }
  public function processLogin()
  {
    $request->validate([
     'full_name' => 'required',
     'email' => 'required|email|unique:users,email',
     'mobile_number' => 'required|min:6|max:13|unique:users,mobile_number',
     'password' => 'required|min:8|confirmed'
  ]);



      return view('frontend.users.dashboard');
  }

}
