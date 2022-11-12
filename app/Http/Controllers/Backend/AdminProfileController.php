<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    //admin profile
    public function AdminProfile(){
              $admin=Admin::find(1);
              //return $admin;
              //exit();
        return view('admin.admin_profile_view',[
            'admin'=> $admin
        ]);
    }//end method

    //admin profile edit
    public function AdminProfileEdit(){
         $admin=Admin::find(1);
        return view('admin.admin_profile_edit',[
            'admin'=>$admin
        ]);

    }//end method


    //admin profile update
    public function AdminProfileUpdate(Request $request){
        $admin=Admin::find(1);
        $admin->name=$request->name;
         $admin->email=$request->email;
         //image upload
         if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images/'.$admin->profile_photo_path));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images/',$filename));
             $admin['profile_photo_path']= $filename;

         }//image upload end

         $admin->save();
         return redirect()->route('admin.profile')->with('info','Profile updated Successfully');


    }//end method


    //Admin password change
    public function AdminPasswordChange(){
        return view('admin.admin_password_change');
    }//end method


    //Admin password update
    public function AdminPasswordUpdate(Request $request){
        $validation=$request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed',
        ]);

        $hashedPassword=Admin::find(1)->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $admin=Admin::find(1);
            $admin->password=Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        } else{
            return redirect()->back();
        }
    }//end method













}//main end
