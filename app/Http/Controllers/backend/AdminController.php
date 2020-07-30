<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
  public function login()
  {
    return view('backend.admin.adminlogin');
  }



  public function loginprocess(Request $request)
  {
    $request->validate([
     'password' => 'required'
 ]);
 $name1 = $request->password;
 $name2 = 'admin';
if (strcmp($name1, $name2) == 0) {
  $notification=array(
    'message'=>'Successfully Logged In',
    'alert-type'=>'success'
  );
  return redirect()->route('dashboard')->with($notification);
   }
   else{
     $notification=array(
       'message'=>'Invalid Credentials!',
       'alert-type'=>'error'
     );
     return redirect()->back()->with($notification);
   }

  }

  public function adminlogout()
  {
      auth()->logout();
      $this->setSuccessMessage('Logged out Successfully');
      return redirect()->route('admin');
  }

  public function dashboard()
  {
    $subscribe=DB::table('subscribe')->get();
    return view('backend.admin.adminpanel',compact('subscribe'));
  }
  public function search(Request $request)
  {
    $search= $request->get('search');
    $subscribe=DB::table('subscribe')->where('name','like','%'.$search.'%')->paginate(10);
    return view('backend.admin.adminpanel',compact('subscribe'));
  }

}
