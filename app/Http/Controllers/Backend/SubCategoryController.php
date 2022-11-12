<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubCategory;

use RealRashid\SweetAlert\Facades\Alert;

class SubCategoryController extends Controller
{
    //view all subcategories
    public function ViewAllSubcategories(){
        $categories=Category::orderBy('category_name','ASC')->get();
        $subcategories=Subcategory::all();


        return view('admin.category.subcategory_view',compact('categories','subcategories'));
    }//end method

    //subcategory add
    public function SubcategoryAdd(Request $request){
        $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required',
        ],[
            'category_id.required'=>'You have to select a category.',
            'subcategory_name.required'=>'You have to enter subcategory name.',
        ]);




        $subcategory=new Subcategory();
        $subcategory->category_id=$request->category_id;
        $subcategory->subcategory_name=$request->subcategory_name;


        $subcategory->subcategory_slug=strtolower(str_replace('','-',$request->subcategory_name));
        $subcategory->save();

        return redirect()->back()->with('warning','subcategory added successfully');
    }//end method

    //subcategory edit
    public function SubcategoryEdit($id){
        $subcategory=Subcategory::find($id);
         $categories=Category::orderBy('category_name','ASC')->get();
        return view('admin.category.subcategory_edit',compact('subcategory','categories'));
    }//end method

    //subcategory update
    public function SubcategoryUpdate(Request $request){
        $subcategory=Subcategory::find($request->id);

         $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required',
        ],[
            'category_id.required'=>'You have to select a category.',
            'subcategory_name.required'=>'You have to enter subcategory name.',
        ]);

         $subcategory->category_id=$request->category_id;
        $subcategory->subcategory_name=$request->subcategory_name;


        $subcategory->subcategory_slug=strtolower(str_replace('','-',$request->subcategory_name));
        $subcategory->save();

        return redirect()->route('view.subcategories')->with('warning','subcategory updated successfully');

    }//end method

    //delete subcategory
    public function SubcategoryDelete($id){
        $subcategory=Subcategory::find($id);
        $subcategory->delete();
        Alert::info('Subcategory deleted successfully');
        return redirect()->back();

    }//end method

//################### All sub subcategory method start##################################
    //sub subcategory view
    public function ViewAllSubSubcategories(){
        $categories=Category::orderBy('category_name','ASC')->get();
        $subsubcategories=SubSubCategory::all();
        return view('admin.category.sub_subcategory_view',compact('categories','subsubcategories'));
    }//end method

    //method for ajax route(subcategory auto select)
    public function GetSubCategories($category_id){
        $subcategories=Subcategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcategories);
    }//end method

    //method for ajax route sub subcategory auto select
    public function GetSubsubCategories($subcategory_id){
        $subsubcategories=SubSubCategory::where('subcategory_id',$subcategory_id)->orderBy('subsubcategory_name','ASC')->get();
        return json_encode($subsubcategories);
    }//end method

    //add sub subcategory
    public function SubsubcategoryAdd(Request $request){
        //form validation
        $request->validate([
            'category_id'=>'required',
            'subsubcategory_name'=>'required',

        ],[
            'category_id.required'=>'please select any category.',
            'subsubcategory_name.required'=>'please enter subsubcategory name.',
        ]);

        $subsubcategory=new SubSubCategory();
        $subsubcategory->category_id=$request->category_id;
        $subsubcategory->subcategory_id=$request->subcategory_id;
        $subsubcategory->subsubcategory_name=$request->subsubcategory_name;
        $subsubcategory->subsubcategory_slug=strtolower(str_replace('','-',$request->subsubcategory_name));
        $subsubcategory->save();
        return redirect()->back()->with('message','sub subcategory added successfully');

    }//end method

    //sub subcategory edit
    public function SubsubcategoryEdit($id){
        $categories=Category::orderBy('category_name','ASC')->get();
        $subcategories=Subcategory::orderBy('subcategory_name','ASC')->get();
        $subsubcategory=SubSubCategory::find($id);
        return view('admin.category.sub_subcategory_edit',compact('categories','subcategories','subsubcategory'));
    }//end method

    //sub subcategory update
    public function SubsubcategoryUpdate(Request $request){
        $subsubcategory=SubSubCategory::find($request->id);
        $subsubcategory->category_id=$request->category_id;
        $subsubcategory->subcategory_id=$request->subcategory_id;
        $subsubcategory->subsubcategory_name=$request->subsubcategory_name;
        $subsubcategory->subsubcategory_slug=strtolower(str_replace('','-',$request->subsubcategory_name));
        $subsubcategory->save();
        return redirect()->route('view.subsubcategories')->with('info','sub subcategory updated successfully');

    }//end method

    //sub subcategory delete
    public function SubsubcategoryDelete($id){
        SubSubCategory::find($id)->delete();
        return redirect()->back()->with('warning','sub subcategory deleted successfully');
    }//


















//################### All sub subcategory method end ###################################


















}//main end
