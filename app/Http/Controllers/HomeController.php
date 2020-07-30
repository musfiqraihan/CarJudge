<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
  public function home(Request $request)
  {
    $brands = DB::table('brands')->get();
    $singlecar = DB::table('singlecar')
    ->join('brands','singlecar.brands_id','brands.id')
    ->join('boverviews','singlecar.car_model_id','boverviews.id')
    ->select('singlecar.*','brands.name','boverviews.car_model')
    ->get();
    return view('welcome',compact('brands','singlecar'));

  }
}
