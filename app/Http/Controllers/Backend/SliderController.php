<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;

class SliderController extends Controller
{
    //view slider
    public function ViewSlider(){
        $sliders=Slider::all();
        return view('admin.slider.slider_view',compact('sliders'));
    }//end method


    //slider store
    public function SliderStore(Request $request){
        //form validation
        $request->validate([
            'slider_img'=>'required',

        ],[
            'slider_img.required'=>'You have to enter slider image.',

        ]);


        //image upload
            $image=$request->file('slider_img');
            $nam_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(870,370)->save('upload/slider/'.$nam_gen);
            $save_url='upload/slider/'.$nam_gen;



        $slider=new Slider();
        $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->slider_img=$save_url;

        $slider->save();
        return redirect()->back()->with('message','Slider added successfully');
    }//end method


    //slider edit
    public function SliderEdit($id){
        $slider=Slider::find($id);

        return view('admin.slider.slider_edit',compact('slider'));
    }//end method

    //slider update
    public function SliderUpdate(Request $request){
        $slider=Slider::find($request->id);
        $old_image=$slider->slider_img;
        if($request->file('slider_img')){
            unlink( $old_image);
            $image=$request->file('slider_img');
            $nam_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(870,370)->save('upload/slider/'.$nam_gen);
            $save_url='upload/slider/'.$nam_gen;

            $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->slider_img=$save_url;
        $slider->save();
        } else{
            $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->save();
        }

        return redirect()->route('manage.slider')->with('message','Slider updated successfully');

    }//end method


    //slider delete
    public function SliderDelete($id){
        $slider=Slider::find($id);
        $image=$slider->slider_img;
        unlink($image);
        $slider->delete();
        return redirect()->back()->with('warning','slider deleted successfully');
    }//end method


    //slider deactive
    public function SliderDeactive($id){
        $slider=Slider::find($id);
        $slider->status=0;
        $slider->save();
        return redirect()->back()->with('message','slider deactivated successfully');
    }//end method

    //slider active
    public function SliderActive($id){
        $slider=Slider::find($id);
        $slider->status=1;
        $slider->save();
        return redirect()->back()->with('message','slider activated successfully');

    }//end method





















}//main end
