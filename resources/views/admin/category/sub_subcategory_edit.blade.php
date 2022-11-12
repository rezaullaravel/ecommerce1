@extends('admin.admin_master')



@section('content')




    <div class="content-wrapper">
		<div class="container-full">

			<!-- Main content -->
            <section class="content">
                    <div class="row">
                        

                      <div class="col-2"></div>

                        <div class="col-8">
                                <!--card-->
                                <div class="card">
                                        
                                        <div class="card-body">
                                        <h2>Edit Sub->Subcategory</h2>
                                            
                                            <form action="{{route('subsubcategory.update')  }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $subsubcategory->id }}">

                                            <div class="form-group">
                                                        <label>Select category</label>
                                                        
                                                        <select name="category_id" class="form-control">
                                                        	<option >----Select category------</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" {{$category->id==$subsubcategory->category_id ? 'selected':''  }}>{{ $category->category_name }}</option>
                                                            @endforeach
                                                            

                                                        	
                                                        </select>

                                                        @error('category_id')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                  
                                                </div>

                                                <div class="form-group">
                                                        <label>Select Subcategory</label>
                                                        
                                                        <select name="subcategory_id" class="form-control">
                                                            <option>----Select subcategory------</option>
                                                             @foreach($subcategories as $subcategory)
                                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id==$subsubcategory->subcategory_id ? 'selected':'' }}>{{ $subcategory->subcategory_name }}</option>
                                                            @endforeach

                                                           

                                                        </select>

                                                        @error('subcategory_id')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                  
                                                </div>


                                                <div class="form-group">
                                                        <label>SubSubcategory name</label>
                                                        <input type="text" name="subsubcategory_name" value="{{ $subsubcategory->subsubcategory_name }}" class="form-control">

                                                        @error('subsubcategory_name')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Update SubSubcategory">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!--end card-->
                          
                        </div>

                        <div class="col-2"></div>



                    </div><!--end row-->
            </section><!--end content-->
        </div><!--end container-full-->
    </div><!--end content-wrapper-->

    

    
   
@endsection
