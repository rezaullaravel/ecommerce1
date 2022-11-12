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
                                 <h3 class="box-title">View all category here.</h3>
                               </div><!-- /.box-header -->

                               <div class="box-body">
                                   <div class="table-responsive">
                                     <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>SL no</th>
                                               <th>Category name</th>
                                               <th>Category Icon</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                            @php($i=1)
                                            @foreach($categories as $category)
                                          
                                           <tr>
                                               <td>{{$i++}}</td>
                                               <td>{{$category->category_name}}</td>
                                               <td><i class="{{ $category->category_icon }}"></i></td>
                                               <td>
                                               <a href="{{route('edit.category',$category->id)  }}" class="btn btn-secondary btn-sm">Edit</a>

                                               <a href="{{route('delete.category',$category->id)  }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item???');">delete</a>
                                               
                                              
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
                                        <h1>Add category</h1>
                                            
                                            <form action="{{route('category.add')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="form-group">
                                                        <label>Category name</label>
                                                        <input type="text" name="category_name" class="form-control">

                                                        @error('category_name')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Category icon</label>
                                                    <input type="text" id="image" name="category_icon" class="form-control">

                                                    @error('category_icon')
                                                    <strong style="color:green;">{{$message}}</strong>
                                                @enderror

                                               
                                                </div>

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Add category">
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
