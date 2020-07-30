<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CarSearchController extends Controller
{
    public function search(Request $request)
    {
      $carsearch = $request->get('carsearch');
      $singlecar = DB::table('singlecar')
      ->join('brands','singlecar.brands_id','brands.id')
      ->join('boverviews','singlecar.car_model_id','boverviews.id')
      ->where('boverviews.car_model','like','%'.$carsearch.'%')
      ->first();

       return view('frontend.cardetails.cardetails',compact('singlecar'));
    }
}
