<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Slider;
use App\Models\Product;
use App\Models\MultiImg;
use App\Models\Brand;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    //Homepage view
    public function index(){
        $categories=Category::orderBy('category_name','ASC')->get();
        $sliders=Slider::where('status',1)->get();


        $products=Product::where('status',1)->orderBy('id','DESC')->get();
        $featuredProducts=Product::where('featured',1)->orderBy('id','DESC')->limit(12)->get();
        //$hotdealsProducts=Product::where('hot_deals',1)->orderBy('id','DESC')->limit(12)->get();
        $speacialOffers=Product::where('special_offer',1)->orderBy('id','DESC')->limit(3)->get();
        $speaciaDeals=Product::where('special_deals',1)->orderBy('id','DESC')->limit(3)->get();

        //single category product view
        $skip_category_0=Category::skip(0)->first();
        $skip_product_0=Product::where('status',1)->where('category_id',$skip_category_0->id)->orderBy('id','DESC')->get();

         //single category product view
        $skip_category_2=Category::skip(2)->first();
        $skip_product_2=Product::where('status',1)->where('category_id',$skip_category_2->id)->orderBy('id','DESC')->get();

        //single brand product view
        $skip_brand_0=Brand::skip(1)->first();
        $skip_brand_product_0=Product::where('status',1)->where('brand_id',$skip_brand_0->id)->orderBy('id','DESC')->get();

        //for hot deals
        $hotdealsProducts=Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(6)->get();
        
        
        
        return view('frontend.index',compact('categories','sliders','products','featuredProducts','hotdealsProducts','speacialOffers','speaciaDeals','skip_category_0','skip_product_0','skip_category_2','skip_product_2','skip_brand_0','skip_brand_product_0'));
    }//end method


    //User logout
    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }//end method

    //User profile edit
    public function UserProfileEdit(){
        $id=Auth::User()->id;
        $user=User::find($id);
        return view('frontend.user_profile_edit',compact('user'));

    }//end method

    //User profile update
    public function UserProfileUpdate(Request $request){
        $id=Auth::User()->id;
        $user=User::find($id);
        $user->name=$request->name;
         $user->email=$request->email;
         $user->phone=$request->phone;
         //image upload
         if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$user->profile_photo_path));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images/',$filename));
             $user['profile_photo_path']= $filename;

         }//image upload end

         $user->save();
         return redirect()->route('dashboard')->with('message','Profile updated Successfully');

    }//end method

    //User password change
    public function UserPasswordChange(){
        return view('frontend.user_password_change');
    }//end method

    //User password update
    public function UserPasswordUpdate(Request $request){
        $validation=$request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed',
        ]);

        $hashedPassword=Auth::User()->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $user=Auth::User();
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        } else{
            return redirect()->back();
        }
    }//end method


    //product detail
    public function ProductDetail($id){
        $categories=Category::orderBy('category_name','ASC')->get();
        $product=Product::find($id);

        //product color
         $product_color = $product->product_color;
          $product_color_all = explode (',',$product_color);

          //product size
          $product_size = $product->product_size;
          $product_size_all = explode (',',$product_size);


           // for related product show
          $cat_id = $product->category_id;
          $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();

        $multiimgs=MultiImg::where('product_id',$id)->get();

        return view('frontend.product.product_details',compact('categories','product','multiimgs','product_color_all','product_size_all','relatedProduct'));
    }//end method


    //tag wise product
    public function TagWiseProduct($product_tags){
        $categories=Category::orderBy('category_name','ASC')->get();
        $products=Product::where('status',1)->where('product_tags',$product_tags)->orderBy('id','DESC')->paginate(1);
        return view('frontend.tag.tag_view',[
            'categories'=>$categories,
            'products'=>$products,
        ]);
    }//end method


    //sub catwise product
    public function SubCatwiseProduct($id){
        $products = Product::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->paginate(1);
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('frontend.product.SubCatwiseProduct_view',compact('categories','products'));

    }//end method


    //sub sub catwise product
    public function SubSubCatwiseProduct($id){
       $products = Product::where('status',1)->where('subsubcategory_id',$id)->orderBy('id','DESC')->paginate(1);
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('frontend.product.SubSubCatwiseProduct_view',compact('categories','products'));
    }//end method


    // Product View With Ajax
 public function ProductViewAjax($id){


  $product = Product::with('category', 'brand')->findOrFail($id);



  $color = $product->product_color;
  $product_colors = explode(',', $color);


  $size = $product->product_size;
  $product_sizes = explode(',', $size);

  return response()->json(array(
    'product' =>$product,
    'color' => $product_colors,
    'size' => $product_sizes,
// problem is same varibale


  ));

 } // end mathod















}//main end
