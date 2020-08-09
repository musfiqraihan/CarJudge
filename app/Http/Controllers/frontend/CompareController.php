<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CompareController extends Controller
{

  public function compares(Request $request)
  {
      $singlecar = DB::table('singlecar')
      ->join('brands','singlecar.brands_id','brands.id')
      ->join('boverviews','singlecar.car_model_id','boverviews.id')
      ->select('singlecar.*','brands.name','boverviews.car_model')
      ->get();

    return view('frontend.compares.compare',compact('singlecar'));
  }
  
}
