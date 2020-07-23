<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{
  public function add()
  {
    return view('backend.brands.addbrandcars');
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name'=>'bail|required|unique:brands|max:15',
      'image'=>'required|mimes:png,PNG|max:1000'
    ]);
    $data=array();
    $data['name']=$request->name;
    $image = $request->file('image');
      if ($image) {
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='images/brand/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['image']=$image_url;
        DB::table('brands')->insert($data);
        $this->setSuccessMessage('Successfully inserted data');
        return redirect()->route('brands.show');
      }else{
        $this->setSuccessMessage('Successfully inserted data');
        return redirect()->route('brands.show');
      }
 }
       public function show()
       {
         $brands=DB::table('brands')->get();
         return view('backend.brands.showbrandcars',compact('brands'));
       }
       public function delete($id)
       {
         $brands=DB::table('brands')->where('id',$id)->first();
         $image=$brands->image;

         $delete=DB::table('brands')->where('id',$id)->delete();
         if ($delete) {
           unlink($image);
           return back()->with('success', 'Deleted Successfully ^_^');
         }else{
           return back()->with('error', 'Something wrong -_-');
         }
       }
       public function edit($id)
       {
         $brands=DB::table('brands')->where('id',$id)->first();
         return view('backend.brands.editbrandcars',compact('brands'));
       }
       public function update(Request $request,$id)
       {
         $validatedData = $request->validate([
           'name'=>'required|unique:brands|max:15',
           'image'=>'mimes:png,PNG|max:1000'
         ]);
         $data=array();
         $data['name']=$request->name;
         $image = $request->file('image');
           if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='images/brand/';
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
             $data['image']=$image_url;
             unlink($request->old_photo);
             DB::table('brands')->where('id',$id)->update($data);
             $this->setSuccessMessage('Successfully edited data');
             return redirect()->route('brands.show');
       }else{
             $data['image']=$request->old_photo;
             DB::table('brands')->where('id',$id)->update($data);
             $this->setSuccessMessage('Successfully edited data');
             return redirect()->route('brands.show');
           }
       }
}
