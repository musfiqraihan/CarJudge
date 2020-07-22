<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
  $this->setSuccessMessage('Successfully Logged In');
  return redirect()->route('dashboard');
   }
   else{
     $this->setErrorMessage('Invalid Credentials.');
     return redirect()->back();
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
    return view('backend.admin.adminpanel');
  }

}
