<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubCategory;
use Carbon\Carbon;
use App\Models\MultiImg;
 use App\Models\Product;
use Image;


class ProductController extends Controller
{
    //add product
    public function ProductAdd(){
        $brands=Brand::all();
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $subsubcategories=SubSubCategory::all();
        return view('admin.product.product_add',compact('brands','categories','subcategories','subsubcategories'));
    }//end method


    //product store
    public function ProductStore(Request $request){
       //thumbnail image upload
        $image = $request->file('product_thambnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/products/thambnail/'.$name_gen);
        $save_url = 'upload/products/thambnail/'.$name_gen;

        // Product::insert([
            $product_id = Product::insertGetId([
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'subsubcategory_id' => $request->subsubcategory_id,
                'product_name' => $request->product_name,
                'product_slug_name' =>  strtolower(str_replace(' ', '-', $request->product_name)),
                'product_code' => $request->product_code,
                'product_qty' => $request->product_qty,
                'product_tags' => $request->product_tags,
                'product_size' => $request->product_size,
                'product_color' => $request->product_color,
                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'product_short_desc' => $request->product_short_desc,
                'product_long_desc' => $request->product_long_desc,
                'hot_deals' => $request->hot_deals,
                'featured' => $request->featured,
                'special_offer' => $request->special_offer,
                'special_deals' => $request->special_deals,
                'product_thambnail' => $save_url,
                'status' => 1,
                'created_at' => Carbon::now(),

          ]);

          //  Multiple Image
        $images = $request->file('multi_img');
        foreach ($images as $img) {
          $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(917,1000)->save('upload/products/multi-image/'.$make_name);
        $uploadPath = 'upload/products/multi-image/'.$make_name;





        MultiImg::insert([

                  'product_id' => $product_id,
                  'photo_name' => $uploadPath,
                  'created_at' => Carbon::now(),

                ]);

                }

                return redirect()->back()->with('message','Product added successfully');

    }//end method























}//main end
