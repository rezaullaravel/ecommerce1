<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //all category view
    public function ViewAllCategories(){
        $categories=Category::all();
        return view('admin.category.category_view',compact('categories'));
    }//end method

    //category add
    public function CategoryAdd(Request $request){
        $request->validate([
            'category_name'=>'required',
            'category_icon'=>'required',
        ],[
            'category_name.required'=>'You have to enter category name.',
            'category_icon.required'=>'You have to enter category icon.',
        ]);
        

    

        $category=new Category();
        $category->category_name=$request->category_name;
        $category->category_icon=$request->category_icon;
       
        $category->category_slug=strtolower(str_replace('','-',$request->category_name));
        $category->save();
          
        return redirect()->back()->with('message','category added successfully');

    }//end method

    //category edit
    public function CategoryEdit($id){
        $category=Category::find($id);
        return view('admin.category.category_edit',compact('category'));
    }//end method

    //category update
    public function CategoryUpdate(Request $request){
       $category=Category::find($request->id);
       //form validation
       $request->validate([
            'category_name'=>'required',
            'category_icon'=>'required',
        ],[
            'category_name.required'=>'You have to enter category name.',
            'category_icon.required'=>'You have to enter category icon.',
        ]);

       //category save
       $category->category_name=$request->category_name;
        $category->category_icon=$request->category_icon;
       
        $category->category_slug=strtolower(str_replace('','-',$request->category_name));
        $category->save();
           

        return redirect()->route('view.categories')->with('message','category updated successfully');
    }//end method

    //category delete
    public function CategoryDelete($id){

       $category=Category::find($id)->delete();
       
       return redirect()->route('view.categories')->with('message','category deleted successfully');
    }//



















}//main end
