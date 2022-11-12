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
                                        <h1>Edit category</h1>
                                            
                                            <form action="{{route('category.update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                                <div class="form-group">
                                                        <label>Category name</label>
                                                        <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">

                                                        @error('category_name')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Category icon</label>
                                                    <input type="text" id="image" name="category_icon" value="{{ $category->category_icon }}" class="form-control">


                                                    @error('category_icon')
                                                    <strong style="color:green;">{{$message}}</strong>
                                                @enderror

                                               
                                                </div>

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Update category">
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
