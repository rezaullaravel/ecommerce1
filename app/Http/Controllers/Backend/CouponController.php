<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Coupon;
use Carbon\Carbon;

class CouponController extends Controller
{
    //coupon view
    public function CouponView(){
        $coupons=Coupon::all();
        return view('admin.coupons.view_all_coupons',compact('coupons'));
    }//end method


    //coupon store
    public function CouponStore(Request $request){
         $request->validate(
            [
                'coupon_name'=>'required',
                'coupon_discount'=>'required',
                'coupon_validity'=>'required',
            ],[
                'coupon_name.required'=>'Input Coupon Name',
                'coupon_discount.required'=>'Input Discount ',
                'coupon_validity.required'=>'Input date'

            ]
            );
            Coupon::insert([
                'coupon_name'=>strtoupper($request->coupon_name),
                'coupon_discount'=>$request->coupon_discount,
                'coupon_validity'=>$request->coupon_validity,
                'created_at'=>Carbon::now()

            ]);
            $notification=array(
                'message' =>'Coupon Added Successfully',
                'alert-type' =>'success'
            );
            return redirect()->back()->with($notification);
    }//end method


    //coupon edit
    public function CouponEdit($id){
        $coupon=Coupon::find($id);
        return view('admin.coupons.coupon_edit',compact('coupon'));
    }//end method


    //coupon update
    public function CouponUpdate(Request $request){
         $coupon_id = $request->id;
          Coupon::findOrFail( $coupon_id)->update(
              [
                'coupon_name'=>strtoupper($request->coupon_name),
                'coupon_discount'=>$request->coupon_discount,
                'coupon_validity'=>$request->coupon_validity,
                'created_at'=>Carbon::now()

              ]
              );
             
              return redirect()->route('view.all.coupons')->with('info','Coupon updated successfully');
    }//end method


    //coupon delete
    public function CouponDelete($id){
        $coupon=Coupon::find($id)->delete();
        return redirect()->back()->with('sms','Coupon deleted successfully');
    }//end method

}//main end
