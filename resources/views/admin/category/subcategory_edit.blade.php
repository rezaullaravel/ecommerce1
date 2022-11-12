@extends('admin.admin_master')


@section('content')


    <div class="content-wrapper">
		<div class="container-full">

			<!-- Main content -->
            <section class="content">
                    <div class="row">
                       

                        <div class="col-3"></div>

                        <div class="col-6">
                                <!--card-->
                                <div class="card">
                                        
                                        <div class="card-body">
                                        <h1>Edit Subcategory</h1>
                                            
                                            <form action="{{route('subcategory.update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $subcategory->id }}">

                                            <div class="form-group">
                                                        <label>Select category</label>
                                                        
                                                        <select name="category_id" class="form-control">
                                                        	<option >----Select category------</option>

                                                        	@foreach($categories as $category)
                                                        	<option value="{{ $category->id }}" {{$category->id==$subcategory->category_id ? 'selected':''  }}>{{ $category->category_name }}</option>
                                                        	@endforeach

                                                        </select>

                                                        @error('category_id')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                  
                                                </div>

                                                <div class="form-group">
                                                        <label>Subcategory name</label>
                                                        <input type="text" name="subcategory_name" value="{{$subcategory->subcategory_name }}" class="form-control">

                                                        @error('subcategory_name')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Update Subcategory">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!--end card-->
                          
                        </div>

                        <div class="col-3"></div>



                    </div><!--end row-->
            </section><!--end content-->
        </div><!--end container-full-->
    </div><!--end content-wrapper-->
   
@endsection
