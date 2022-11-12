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

                                            <form action="{{route('brand.update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                    <label>Brnad name</label>
                                                <input type="text" name="brand_name" value="{{$brand->brand_name}}" class="form-control">
                                                <input type="hidden" name="id" value="{{$brand->id}}" class="form-control">


                                                @error('brand_name')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror


                                                </div>

                                                <div class="form-group">
                                                    <label>Brand Image</label>
                                                <input type="file" id="image" name="brand_image" class="form-control"><br><br>
                                                <img src="{{asset($brand->brand_image)}}" height="100" width="100">

                                                 @error('brand_image')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror


                                                </div>

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Update brand">
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
