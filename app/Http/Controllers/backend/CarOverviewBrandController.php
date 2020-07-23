<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CarOverviewBrandController extends Controller
{
  public function addcar()
  {
    $brands=DB::table('brands')->get();
    return view('backend.carsoverview.addbrandcars',compact('brands'));
  }

  public function storecar(Request $request)
  {
    $validatedData = $request->validate([
      'car_model'=>'required|max:100|unique:boverviews,car_model',
      'car_price'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:8',
      'body_type'=>'required|max:50',
      'transmission'=>'required|max:50',
      'fuel'=>'required|max:50',
      'year'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:4|max:4',
      'engine'=>'required|max:50',
      'seat'=>'regex:/^([2-8\s\-\+\(\)]*)$/',
      'car_image'=>'required | mimes:png,PNG,jpg,JPG,jpeg,JPEG|max:1000'
    ]);
    $data=array();
    $data['brands_id']=$request->brands_id;
    $data['car_model']=$request->car_model;
    $data['car_price']=$request->car_price;
    $data['body_type']=$request->body_type;
    $data['transmission']=$request->transmission;
    $data['fuel']=$request->fuel;
    $data['year']=$request->year;
    $data['engine']=$request->engine;
    $data['seat']=$request->seat;
    $image = $request->file('car_image');
      if ($image) {
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='images/cars/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['car_image']=$image_url;
        DB::table('boverviews')->insert($data);
        session()->flash('message', 'Data inserted Successfully.');
        session()->flash('type', 'success');
        return redirect()->route('dashboard');
      }
      else{
        DB::table('boverviews')->insert($data);
        session()->flash('message', 'Data inserted Successfully.');
        session()->flash('type', 'success');
        return redirect()->route('dashboard');
      }

  }

  public function allcar()
  {
    $boverviews=DB::table('boverviews')->join('brands','boverviews.brands_id','brands.id')
              ->select('boverviews.*','brands.name')
              ->get();
          return view('backend.carsoverview.allcarsoverviews',compact('boverviews'));
  }

  public function deletecar($id)
       {
         $boverviews=DB::table('boverviews')->where('id',$id)->first();

         $image = $boverviews->car_image;

         $delete=DB::table('boverviews')->where('id',$id)->delete();
         if ($delete) {
           unlink($image);
           session()->flash('message', 'Deleted Successfully.');
           session()->flash('type', 'success');
           return redirect()->back();
         }else{
           return back()->with('error', 'Something wrong -_-');
         }
       }


  public function editcar($id)
  {
    $brands=DB::table('brands')->get();
    $boverviews=DB::table('boverviews')->where('id',$id)->first();
    return view('backend.carsoverview.editbrandcars',compact('brands','boverviews'));
  }

  public function updatecar(Request $request,$id){
    $validatedData = $request->validate([
      'car_model'=>'max:100',
      'car_price'=>'regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:8',
      'body_type'=>'max:50',
      'transmission'=>'max:50',
      'fuel'=>'max:50',
      'year'=>'regex:/^([0-9\s\-\+\(\)]*)$/|min:4|max:4',
      'engine'=>'max:50',
      'seat'=>'regex:/^([2-8\s\-\+\(\)]*)$/',
      'car_image'=>'mimes:png,PNG,jpg,JPG,jpeg,JPEG|max:1000'
    ]);

    $data=array();
    $data['brands_id']=$request->brands_id;
    $data['car_model']=$request->car_model;
    $data['car_price']=$request->car_price;
    $data['body_type']=$request->body_type;
    $data['transmission']=$request->transmission;
    $data['fuel']=$request->fuel;
    $data['year']=$request->year;
    $data['engine']=$request->engine;
    $data['seat']=$request->seat;
    $image = $request->file('car_image');
      if ($image) {
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='images/cars/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['car_image']=$image_url;
        unlink($request->old_photo);
        DB::table('boverviews')->where('id',$id)->update($data);
        session()->flash('message', 'Data updated Successfully.');
        session()->flash('type', 'success');
        return redirect()->route('allcaroverview');
      }
      else{
        $data['car_image']=$request->old_photo;
            DB::table('boverviews')->where('id',$id)->update($data);
        session()->flash('message', 'Data inserted Successfully.');
        session()->flash('type', 'success');
        return redirect()->route('allcaroverview');
      }

  }

}
