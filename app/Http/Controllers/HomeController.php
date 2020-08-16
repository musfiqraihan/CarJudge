<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

public function profile($id)
{
   $user = User::find($id);
   return view('frontend.users.profile')->withUser($user);
}

public function EditProfile($id)
{
  $user = User::find($id);
  return view('frontend.users.editprofile')->withUser($user);
}

public function passchange(Request $request)
{
  if(Auth::user()){
    $user = User::find(Auth::user()->id);
    if($user)
    {
      return view('frontend.users.changepass')->withUser($user);
    }else{
      return redirect()->back();
    }

  }else{
    return redirect()->back();
  }

}

public function updatepass(Request $request)
{
    $user = User::find(Auth::user()->id);
    if($user){
      if(Hash::check($request['oldpassword'], $user->password)){

        $user->password = Hash::make($request['password']);
        $user->save();
        $notification=array(
            'message'=>'The entered does not match Your current password',
            'alert-type'=>'error'
        );
        return view('frontend.users.profile',compact('user'))->with($notification);
      }else{
        $notification=array(
            'message'=>'The entered does not match Your current password',
            'alert-type'=>'error'
        );
      return redirect()->back()->with($notification);
      }
    }else{
          return redirect()->back();
    }
}



public function updateProfile(Request $request)
{
  $user = User::find(Auth::user()->id);
  if($user)
  {
    $validate = $request->validate([
        'name' => 'max:100',
        'email' => 'string|email',
        'phone' => 'min:11|max:13'
     ]);

    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->phone = $request['phone'];

    $user->save();
    $notification=array(
        'message'=>'Profile Updated Successfully',
        'alert-type'=>'success'
    );
    return view('frontend.users.profile',compact('user'))->with($notification);
    }else{
      return redirect()->back();
  }
}





    public function index()
    {
      $brands = DB::table('brands')->get();
      $singlecar = DB::table('singlecar')
      ->join('brands','singlecar.brands_id','brands.id')
      ->join('boverviews','singlecar.car_model_id','boverviews.id')
      ->select('singlecar.*','brands.name','boverviews.car_model')
      ->get();
      return view('home',compact('brands','singlecar'));
    }
}
