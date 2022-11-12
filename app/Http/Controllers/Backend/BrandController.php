<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
use Auth;
use App\Models\Admin;

class BrandController extends Controller
{
    //View all brands
    public function ViewAllBrands(){
        $brands=Brand::all();




        return view('admin.barnds.view_all_brnads',compact('brands'));
    }//end method

    //brand add
    public function BrandAdd(Request $request){

        //form validation
        $request->validate([
            'brand_name'=>'required',
            'brand_image'=>'required',
        ],[
            'brand_name.required'=>'You have to enter brand name.',
            'brand_image.required'=>'You have to enter brand image.',
        ]);


        //image upload
        if($request->file('brand_image')){
            $image=$request->file('brand_image');
            $nam_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/brands/'.$nam_gen);
            $save_url='upload/brands/'.$nam_gen;

        }

        $brand=new Brand();
        $brand->brand_name=$request->brand_name;
        $brand->brand_image=$save_url;
        $brand->brand_slug=strtolower(str_replace('','-',$request->brand_name));
        $brand->save();
        return redirect()->back()->with('message','Brand added successfully');

    }//end method

    //brand edit
    public function BrandEdit($id){
        $brand=Brand::find($id);

        return view('admin.barnds.brand_edit',compact('brand'));
    }//end method

    //image upload
    protected function imageUpload($request){
        $image=$request->file('brand_image');
                $nam_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/brands/'.$nam_gen);
                $save_url='upload/brands/'.$nam_gen;
                return $save_url;
    }//end method

    //brand store with image
    protected function brandStoreWithImage($brand,$save_url,$request){
        $brand->brand_name=$request->brand_name;
        $brand->brand_image=$save_url;
        $brand->brand_slug=strtolower(str_replace('','-',$request->brand_name));
        $brand->save();
    }//end method

    //brand store without image
    protected function brandStoreWithoutImage($brand,$request){
        $brand->brand_name=$request->brand_name;
            $brand->brand_slug=strtolower(str_replace('','-',$request->brand_name));
            $brand->save();
    }//end method

    //brand update
    public function BrandUpdate(Request $request){
        $brand=Brand::find($request->id);
        $old_image=$brand->brand_image;

        if($request->file('brand_image')){
            unlink($old_image);

            $save_url=$this->imageUpload($request);
               $this->brandStoreWithImage($brand,$save_url,$request);
         } else{
            $this->brandStoreWithoutImage($brand,$request);

        }
        return redirect()->route('view.all.brands')->with('message','Brand updated successfully');
    }//end method

    //brand delete
    public function BrandDelete($id){
        $brand=Brand::find($id);
        $image=$brand->brand_image;
        unlink($image);
        $brand->delete();
        return redirect()->back()->with('error','brand deleted successfully');

    }//end method



















}//end main
