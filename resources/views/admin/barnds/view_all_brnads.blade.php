@extends('admin.admin_master')

@section('content')
    <div class="content-wrapper">
		<div class="container-full">

			<!-- Main content -->
            <section class="content">
                    <div class="row">
                        <div class="col-7">

                            <div class="box">
                               <div class="box-header with-border">
                                 <h3 class="box-title">View all brands here.</h3>
                               </div><!-- /.box-header -->

                               <div class="box-body">
                                   <div class="table-responsive">
                                     <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>SL no</th>
                                               <th>Brand name</th>
                                               <th>Brand Image</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                       @php($i=1)
                                       @foreach($brands as $brand)
                                           <tr>
                                               <td>{{$i++}}</td>
                                               <td>{{$brand->brand_name}}</td>
                                               <td><img src="{{asset($brand->brand_image)}}" height="50" width="50"></td>
                                               <td>
                                               <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-info btn-sm">Edit</a>
                                               <a href="{{route('brand.delete',['id'=>$brand->id])}}" onclick="return confirm('Are you sure  to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
                                               </td>
                                           </tr>
                                           @endforeach
                                       </tbody>

                                   </table>
                                   </div>
                               </div><!-- /.box-body -->

                            </div><!-- /.box -->


                        </div>

                        <div class="col-1"></div>

                        <div class="col-4">
                                <!--card-->
                                <div class="card">
                                        
                                        <div class="card-body">
                                        <h1>Add brand</h1>
                                            
                                            <form action="{{route('brand.add')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                    <label>Brnad name</label>
                                                <input type="text" name="brand_name" class="form-control">

                                                @error('brand_name')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>

                                                <div class="form-group">
                                                    <label>Brand Image</label>
                                                <input type="file" id="image" name="brand_image" class="form-control">

                                                 @error('brand_image')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror

                                               
                                                </div>

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Add brand">
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
