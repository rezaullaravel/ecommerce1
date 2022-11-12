<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Models\User;
use App\Models\Admin;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\PageCartController;
use Illuminate\Support\Facades\Session;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend home page
/*
Route::get('/', function () {
    return view('frontend.index');
})->name('/');
*/

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});



//Admin
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {

    $id=Auth::User()->id;
    $user=Admin::find($id);

    $name=$user->name;
    $image=$user->profile_photo_path;

    Session::put('name',$name);
    Session::put('image',$image);
    return view('admin.index',compact('user'));
})->name('admin.dashboard');


//User
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id=Auth::User()->id;
    $user=User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');


//Admin all route
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

//Admin profile
Route::get('/admin/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');

//Admin profile edit
Route::get('admin/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');

//Admin profile update
Route::post('admin/profile/update',[AdminProfileController::class,'AdminProfileUpdate'])->name('admin.profile.update');

//Admin password change
Route::get('admin/password/change',[AdminProfileController::class,'AdminPasswordChange'])->name('admin.password.change');

//Admin password update
Route::post('admin/password/update',[AdminProfileController::class,'AdminPasswordUpdate'])->name('admin.password.update');



/*=============User all route===============================*/
Route::get('/',[IndexController::class,'index'])->name('/');

//User logout
Route::get('user/logout',[IndexController::class,'UserLogout'])->name('user.logout');

//User profile edit
Route::get('user/profile/edit',[IndexController::class,'UserProfileEdit'])->name('user.profile.edit');

//User profile update
Route::post('user/profile/update',[IndexController::class,'UserProfileUpdate'])->name('user.profile.update');

//User password change
Route::get('user/password/change',[IndexController::class,'UserPasswordChange'])->name('user.password.change');

//User password update
Route::post('user/password/update',[IndexController::class,'UserPasswordUpdate'])->name('user.password.update');

/*=========User all route end====================================*/

/*=========All brands route======================== */
Route::middleware(['auth:sanctum,admin', 'verified'])->prefix('brands')->group(function () {
    Route::get('/view',[BrandController::class,'ViewAllBrands'])->name('view.all.brands');

    //brand add
    Route::any('/add',[BrandController::class,'BrandAdd'])->name('brand.add');

    //brand edit
    Route::get('/edit/{id}',[BrandController::class,'BrandEdit'])->name('brand.edit');

    //brand update
    Route::post('/update',[BrandController::class,'BrandUpdate'])->name('brand.update');

    //brand delete
    Route::get('/delete/{id}',[BrandController::class,'BrandDelete'])->name('brand.delete');

});
/*=========All brands route end======================== */


/*=========All category,subcategoy, subsubcategory route======================== */
Route::prefix('category')->group(function () {
    //view all category
    Route::get('/view',[CategoryController::class,'ViewAllCategories'])->name('view.categories');

    //category add
    Route::post('/add',[CategoryController::class,'CategoryAdd'])->name('category.add');

    //category edit
    Route::get('/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('edit.category');

    //category update
    Route::post('/update',[CategoryController::class,'CategoryUpdate'])->name('category.update');

    //category delete
    Route::get('/delete/{id}',[CategoryController::class,'CategoryDelete'])->name('delete.category');

    //all subcategory route
    //view all subcategory
    Route::get('/sub/view',[SubCategoryController::class,'ViewAllSubcategories'])->name('view.subcategories');
    //add subcategory
    Route::post('/sub/add',[SubCategoryController::class,'SubcategoryAdd'])->name('subcategory.add');

    //edit sabcategory
    Route::get('/sub/edit/{id}',[SubCategoryController::class,'SubcategoryEdit'])->name('edit.subcategory');

    //update subcategory
    Route::post('/sub/update',[SubCategoryController::class,'SubcategoryUpdate'])->name('subcategory.update');

    //delete subcategory
     Route::get('/sub/delete/{id}',[SubCategoryController::class,'SubcategoryDelete'])->name('delete.subcategory');

     //all sub subcategory route
     //sub subcategory view
     Route::get('/sub/sub/view',[SubCategoryController::class,'ViewAllSubSubcategories'])->name('view.subsubcategories');
     //ajx route for subcategory auto select
      Route::get('/subcategory/ajax/{category_id}',[SubCategoryController::class,'GetSubCategories']);

      //ajax route for sub subcategory auto select
      Route::get('/subsubcategory/ajax/{subcategory_id}',[SubCategoryController::class,'GetSubsubCategories']);

      //sub subcategory add
      Route::post('/sub/sub/add',[SubCategoryController::class,'SubsubcategoryAdd'])->name('subsubcategory.add');

      //sub subcategory edit
      Route::get('/sub/sub/edit/{id}',[SubCategoryController::class,'SubsubcategoryEdit'])->name('subsubcategory.edit');

      //sub subcategory update
      Route::post('/sub/sub/update',[SubCategoryController::class,'SubsubcategoryUpdate'])->name('subsubcategory.update');

      //sub subcategory delete
       Route::get('/sub/sub/delete/{id}',[SubCategoryController::class,'SubsubcategoryDelete'])->name('subsubcategory.delete');





});
/*=========All category,subcategory,subsubcategory route end======================== */


/*=========All product route======================== */
Route::prefix('product')->group(function () {
    //Route::get('/view',[BrandController::class,'ViewAllBrands'])->name('view.all.brands');

    //product add
    Route::get('/add',[ProductController::class,'ProductAdd'])->name('product.add');

    //product store
    Route::post('/store',[ProductController::class,'ProductStore'])->name('product.store');

    //brand edit
    //Route::get('/edit/{id}',[BrandController::class,'BrandEdit'])->name('brand.edit');

    //brand update
    //Route::post('/update',[BrandController::class,'BrandUpdate'])->name('brand.update');

    //brand delete
    //Route::get('/delete/{id}',[BrandController::class,'BrandDelete'])->name('brand.delete');

});
/*=========All product route end======================== */





/*=========Slider route group======================== */
Route::prefix('slider')->group(function () {
    Route::get('/view',[SliderController::class,'ViewSlider'])->name('manage.slider');

    //Slider add
    Route::post('/add',[SliderController::class,'SliderStore'])->name('slider.store');

    //slider edit
    Route::get('/edit/{id}',[SliderController::class,'SliderEdit'])->name('slider.edit');

    //slider update
    Route::post('/update',[SliderController::class,'SliderUpdate'])->name('slider.update');

    //slider delete
    Route::get('/delete/{id}',[SliderController::class,'SliderDelete'])->name('slider.delete');

    //slider deactive
    Route::get('/deactive/{id}',[SliderController::class,'SliderDeactive'])->name('slider.deactive');

    //slider active
    Route::get('/active/{id}',[SliderController::class,'SliderActive'])->name('slider.active');

});
/*========= Slider route group end======================== */


//product detail route
Route::get('/product/detail/{id}',[IndexController::class,'ProductDetail'])->name('product.detail');

//product tag route
//Route::get('/product/tag/{product_tags}',[IndexController::class,'TagWiseProduct'])->name('product.tag');

Route::get('/product/tag/{product_tags}',[
    'uses'=>'App\Http\Controllers\Frontend\IndexController@TagWiseProduct',
    'as'=>'product.tag'
]);


//sub category wise product
Route::get('/subcatwise/product/{id}',[IndexController::class,'SubCatwiseProduct'])->name('subcatwise.product');


//sub sub category wise product
Route::get('/subsubcatwise/product/{id}',[IndexController::class,'SubSubCatwiseProduct'])->name('subsubcatwise.product');

// Product view model ajax card
Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);

// Product Add to cart route ajax  use in package
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

// Product mini Cart ajax data
Route::get('/product/mini/cart/', [CartController::class, 'AddMiniCart']);

// Remove mini cart product
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);


// Add to Wishlist product
Route::post('/add-to-wishlist/{product_id}', [CartController::class, 'AddToWishlist']);


######### Start Product wishlist only view Auth user in use middleware ###########
Route::group(['prefix'=>'user','middleware' => ['user','auth'],'namespace'=>'User'],function(){

// Product Wishlist page
Route::get('/wishlist', [WishlistController::class, 'ViewWishlist'])->name('wishlist');

// Product Wishlist show data
Route::get('/get-wishlist-product', [WishlistController::class, 'GetWishlistProduct']);

// Remove  Wishlist Product
Route::get('/wishlist-remove/{id}', [WishlistController::class, 'RemoveWishlistProduct']);

}); ####### End Product wishlist only view Auth user in use middleware  #############




/*################### My cart Page view start ####################################*/
Route::get('/mycart', [PageCartController::class, 'MyCart'])->name('mycart');
//product get into cart
Route::get('/user/get-cart-product', [PageCartController::class, 'GetCartProduct']);
//reove from cart view product
Route::get('/user/cart-remove/{rowId}', [PageCartController::class, 'RemoveMyCart']);
//product increment button route
Route::get('/cart-increment/{rowId}', [PageCartController::class, 'CartIncrement']);
//product decrement button route
Route::get('/cart-decrement/{rowId}', [PageCartController::class, 'CartDecrement']);
/*################### My cart Page view end ####################################*/




// Admin Coupon route start here
  Route::prefix('coupon')->group(function () {

  Route::get('/view', [CouponController::class, 'CouponView'])->name('view.all.coupons');
  Route::post('/coupon_apply', [CouponController::class, 'CouponStore'])->name('coupon.add');
  Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');
  Route::post('/update', [CouponController::class, 'CouponUpdate'])->name('coupon.update');
  Route::get('/coupon_remove/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');

  });// Admin oupon All Route Group End



  /*=====================route for coupons of mycart===================================*/

Route::post('/coupon_apply',[CartController::class,'CouponApply']);
Route::get('/coupon-calculation',[CartController::class,'CouponCalculation']);
Route::get('/coupon-remove',[CartController::class,'CouponRemove']);
 /*===================== end route for coupons of mycart===================================*/














