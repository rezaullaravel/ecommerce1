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
                                 <h3 class="box-title">View all Subcategory here.</h3>
                               </div><!-- /.box-header -->

                               <div class="box-body">
                                   <div class="table-responsive">
                                     <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>Category</th>
                                               <th>Subcategory name</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                       	@foreach($subcategories as $subcategory)
                                       	<tr>
                                       		<td>{{ $subcategory['category']['category_name'] }}</td>
                                       		<td>{{ $subcategory->subcategory_name }}</td>
                                       		<td>
                                             <a href="{{ route('edit.subcategory',$subcategory->id) }}" class="btn btn-success">edit</a>
                                             <br> 

                                             <a href="{{ route('delete.subcategory',$subcategory->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this item?');">delete</a> 
                                             
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
                                        <h1>Add Subcategory</h1>
                                            
                                            <form action="{{route('subcategory.add')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                        <label>Select category</label>
                                                        
                                                        <select name="category_id" class="form-control">
                                                        	<option >----Select category------</option>

                                                        	@foreach($categories as $category)
                                                        	<option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                        	@endforeach

                                                        </select>

                                                        @error('category_id')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                  
                                                </div>

                                                <div class="form-group">
                                                        <label>Subcategory name</label>
                                                        <input type="text" name="subcategory_name" class="form-control">

                                                        @error('subcategory_name')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Add Subcategory">
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
