@extends('admin.admin_master')

@section('content')
    <div class="content-wrapper">
		<div class="container-full">

			<!-- Main content -->
            <section class="content">
                    <div class="row">
                        <div class="col-8">

                            <div class="box">
                               <div class="box-header with-border">
                                 <h3 class="box-title">Frontend slider</h3>
                               </div><!-- /.box-header -->

                               <div class="box-body">
                                   <div class="table-responsive">
                                     <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>SL no</th>
                                               <th>Slider image</th>
                                               <th>Title</th>
                                               <th>Description</th>
                                               <th>Status</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                       @php($i=1)
                                      @foreach($sliders as $slider)
                                           <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><img src="{{ asset($slider->slider_img) }}" style="width:30px; height: 30px;"></td>
                                            <td>{{$slider->title  }}</td>
                                            <td>{{$slider->description  }}</td>
                                            <td>{{$slider->status}}</td>
                                            <td>
                                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                <a href="{{ route('slider.delete',$slider->id) }}" onclick="return confirm('Are you sure to delete this slider???');" class="btn btn-danger btn-sm">Delete</a>
                                                @if($slider->status==1)
                                                <a href="{{route('slider.deactive',$slider->id)}}" class="btn btn-success btn-sm"><i class="fa fa-arrow-down" title="deactive"></i></a>
                                                @else
                                                <a href="{{route('slider.active',$slider->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-up" title="active"></i></a>
                                                @endif
                                            </td>
                                              
                                           </tr>
                                           @endforeach
                                       </tbody>

                                   </table>
                                   </div>
                               </div><!-- /.box-body -->

                            </div><!-- /.box -->


                        </div>

                        

                        <div class="col-4">
                                <!--card-->
                                <div class="card">
                                        
                                        <div class="card-body">
                                        <h1>Add slider</h1>
                                            
                                            <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                    <label>Slider title</label>
                                                <input type="text" name="title" class="form-control">

                                                </div>


                                                <div class="form-group">
                                                    <label>Slider description</label>
                                                <textarea name="description" class="form-control"></textarea>

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
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Add slider">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!--end card-->
                          
                        </div>



                    </div><!--end row-->
            </section><!--end content-->
        </div><!--end container-full-->
    </div><!--end content-wrapper-->
@endsection
