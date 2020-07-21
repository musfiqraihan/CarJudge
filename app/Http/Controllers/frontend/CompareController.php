<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompareController extends Controller
{
  public function compares()
  {
    return view('frontend.compares.compare');
  }
}
