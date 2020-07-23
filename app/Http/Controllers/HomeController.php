<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
  public function home(Request $request)
  {
    $boverviews=DB::table('boverviews')->join('brands','boverviews.brands_id','brands.id')
              ->select('boverviews.*','brands.name')
              ->get();
          return view('welcome',compact('boverviews'));
  }
}
