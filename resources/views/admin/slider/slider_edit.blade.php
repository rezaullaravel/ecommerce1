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
                                        <h1>Edit slider</h1>
                                            
                                            <form action="{{route('slider.update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $slider->id }}">
                                                <div class="form-group">
                                                    <label>Slider title</label>
                                                <input type="text" name="title" value="{{ $slider->title }}" class="form-control">

                                                </div>


                                                <div class="form-group">
                                                    <label>Slider description</label>
                                                <textarea name="description"  class="form-control">{{ $slider->description  }}</textarea>

                                                </div>

                                                <div class="form-group">
                                                    <label>Slider Image</label>
                                                <input type="file" id="image" name="slider_img" class="form-control">

                                                 @error('slider_img')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror

                                               
                                                </div>

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Update slider">
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
