<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CompareController extends Controller
{
  public function compares(Request $request)
  {
    $brands = DB::table('brands')->get();
    $boverviews = DB::table('boverviews')->get();
    $singlecar = DB::table('singlecar')
    ->join('brands','singlecar.brands_id','brands.id')
    ->join('boverviews','singlecar.car_model_id','boverviews.id')
    ->select('singlecar.*','brands.name','boverviews.car_model')
    ->get();
    return view('frontend.compares.compare',compact('singlecar','boverviews','brands'));
  }

  public function search1(Request $request)
  {
    $search1 = $request->get('search1');
    $singlecar = DB::table('singlecar')
    ->join('brands','singlecar.brands_id','brands.id')
    ->join('boverviews','singlecar.car_model_id','boverviews.id')
    ->select('singlecar.*','brands.name','boverviews.car_model')
    ->where('boverviews.car_model','like','%'.$search1.'%')
    ->get();

     return view('frontend.compares.compare',compact('singlecar'));
  }
}
