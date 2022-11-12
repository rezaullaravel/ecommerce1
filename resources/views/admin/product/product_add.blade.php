@extends('admin.admin_master')



@section('content')



    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="col-12">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                        <h5>Brand Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="brand_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Brand</option>
                                 @foreach($brands as $brand)
                                     <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                            </div>

                                </div> <!-- end col md 4 -->

                                <div class="col-md-3">

                                    <div class="form-group">
                        <h5>Category Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="category_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Category</option>
                                  @foreach($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                            </div>

                                </div> <!-- end col md 4 -->


                                <div class="col-md-3">

                                    <div class="form-group">
                        <h5>SubCategory Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="subcategory_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select SubCategory</option>

                            </select>
                            @error('subcategory_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                            </div>

                                </div> <!-- end col md 4 -->



                          <div class="col-md-3">
                             <div class="form-group">
                            <h5>SubSubCategory Select <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="subsubcategory_id" class="form-control"  >
                                    <option value="" selected="" disabled="">Select SubSubCategory</option>

                                </select>
                                @error('subsubcategory_id')
                             <span class="text-danger">{{ $message }}</span>
                             @enderror
                             </div>
                                 </div>

                              </div> <!-- end col md 4 -->
                    </div><!--end first row-->

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <h5>Product Name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="product_name" class="form-control" > </div>
                            </div>
                            </div>  {{-- end col-md-3 --}}

                       <div class="col-md-4">
                            <div class="form-group">
                                <h5>Product Code <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="product_code" class="form-control" > </div>
                            </div>
                        </div>  {{-- end col-md-3 --}}

                         <div class="col-md-3">
                              <div class="form-group">
                                <h5>Product Qty<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="product_qty" class="form-control" > </div>
                            </div>
                         </div>  {{-- end col-md-3 --}}
                    </div><!--end second row-->

                    <div class="row">

                          <div class="col-md-3">
                            <div class="form-group">
                                <h6>Product Tags<span class="text-danger">*</span></h6>
                                <div class="controls">
                                    <input type="text" name="product_tags" class="form-control" value="Boys, Girls" data-role="tagsinput" >
                                </div>
                            </div>
                            </div>  {{-- end col-md-3 --}}

                       <div class="col-md-3">
                            <div class="form-group">
                                <h6>Product Size <span class="text-danger">*</span></h6>
                                <div class="controls">
                                    <input type="text" name="product_size" class="form-control" value="30" data-role="tagsinput" > </div>
                            </div>
                        </div>  {{-- end col-md-3 --}}

                         <div class="col-md-2">
                              <div class="form-group">
                                <h5>Product Color<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="product_color" class="form-control" value="Red,Green,Black" data-role="tagsinput" > </div>
                            </div>
                         </div>  {{-- end col-md-3 --}}


                         <div class="col-md-2">
                              <div class="form-group">
                                <h5>Product Selling Price<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="selling_price" class="form-control" > </div>
                            </div>
                         </div>  {{-- end col-md-3 --}}


                         <div class="col-md-2">
                              <div class="form-group">
                                <h5>Product Discount Price<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="discount_price" class="form-control" > </div>
                            </div>
                         </div>  {{-- end col-md-3 --}}
                    </div><!--end third row-->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h6>Product Thambnail  Img<span class="text-danger">*</span></h6>
                                <div class="controls">
                                    <input type="file" name="product_thambnail" class="form-control" onchange="mainThamUrl(this)" >
                                    <img src="" id="mainThmb">
                                </div>
                            </div>
                            </div>  {{-- end col-md-3 --}}

                       <div class="col-md-6">
                            <div class="form-group">
                                <h6>Product Multiple Image <span class="text-danger">*</span></h6>
                                <div class="controls">
                                    <input type="file" name="multi_img[]" multiple="" id="multiImg" class="form-control" >
                                    <div class="row" id="preview_img"></div>
                                </div>
                            </div>
                        </div>  {{-- end col-md-3 --}}
                    </div><!--end fourth row-->

                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <h5>Product Short Description  <span class="text-danger">*</span></h5>
                            <div class="controls">
                           <textarea name="product_short_desc" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                             </div>
                           </div>
                         </div> <!-- end col md 6 -->

                    <div class="col-md-6">
                     <div class="form-group">
                       <h5>Product Long Description <span class="text-danger">*</span></h5>
                         <div class="controls">
                    <textarea name="product_long_desc" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                 </div>
               </div>
            </div> <!-- end col md 6 -->
                    </div><!--end fifth row-->

                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Hot & Featured <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                                            <label for="checkbox_2">Hot Deals</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_3" name="featured" value="1">
                                            <label for="checkbox_3">Featured</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Special  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_4" name="special_offer" value="1">
                                            <label for="checkbox_4">Special Offer</label>
                                        </fieldset>
                                        <fieldset>
                                            <input type="checkbox" id="checkbox_5" name="special_deals" value="1">
                                            <label for="checkbox_5">Special Deals</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                    </div><!--end sixth row-->

                    <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">

            </div>
        </form>
                </div><!--end col-12-->


                </section><!--end content-->
        </div><!--end container-full-->
    </div><!--end content-wrapper-->

//ajax function for subcategory and subsubcategory auto select
<script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {

                           $('select[name="subsubcategory_id"]').html('');

                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


         $('select[name="subcategory_id"]').on('change', function(){
                    var subcategory_id = $(this).val();
                    if(subcategory_id) {
                        $.ajax({
                            url: "{{  url('/category/subsubcategory/ajax') }}/"+subcategory_id,
                            type:"GET",
                            dataType:"json",
                            success:function(data) {




                               var d =$('select[name="subsubcategory_id"]').empty();
                                  $.each(data, function(key, value){
                                      $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
                                  });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });

            });


    </script>

//javascript for product  thumbnail image
<script type="text/javascript">
      function mainThamUrl(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e){
            $('#mainThmb').attr('src',e.target.result).width(80).height(80);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>

//javascript for  multi image
<script>

    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });

    </script>






@endsection
