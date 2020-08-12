<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
