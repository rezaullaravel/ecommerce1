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
                                 <h3 class="box-title">View all Sub->Subcategory here.</h3>
                               </div><!-- /.box-header -->

                               <div class="box-body">
                                   <div class="table-responsive">
                                     <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>Category</th>
                                               <th>Subcategory</th>
                                               <th>SubSubcategory name</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                        @foreach($subsubcategories as $subsubcatagory)
                                        <tr>
                                            <td>{{ $subsubcatagory['category']['category_name'] }}</td>
                                            <td>{{ $subsubcatagory['subcategory']['subcategory_name'] }}</td>
                                            <td>{{ $subsubcatagory->subsubcategory_name }}</td>
                                            <td><a href="{{ route('subsubcategory.edit',$subsubcatagory->id) }}"title="Edit" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
                                            <td><a href="{{ route('subsubcategory.delete',$subsubcatagory->id) }}"title="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this item???');"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        @endforeach
                                       
                                    
                                           
                                       </tbody>

                                   </table>
                                   </div>
                               </div><!-- /.box-body -->

                            </div><!-- /.box -->


                        </div>

                      <br><br><br>

                        <div class="col-5">
                                <!--card-->
                                <div class="card">
                                        
                                        <div class="card-body">
                                        <h2>Add Sub->Subcategory</h2>
                                            
                                            <form action="{{route('subsubcategory.add')  }}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                        <label>Select category</label>
                                                        
                                                        <select name="category_id" class="form-control">
                                                        	<option >----Select category------</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id  }}">{{ $category->category_name }}</option>
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

                                                           

                                                        </select>

                                                        @error('subcategory_id')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                  
                                                </div>


                                                <div class="form-group">
                                                        <label>SubSubcategory name</label>
                                                        <input type="text" name="subsubcategory_name" class="form-control">

                                                        @error('subsubcategory_name')
                                                        <strong style="color:green;">{{$message}}</strong>
                                                        @enderror
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Add SubSubcategory">
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

    //for subcategory auto select
    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change',function(){
                var category_id=$(this).val();
                if(category_id){
                    $.ajax({
                        url:"{{ url('/category/subcategory/ajax') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data){
                            var d=$('select[name="subcategory_id"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="subcategory_id"]').append(
                                    '<option value="'+value.id+'">'+
                                    value.subcategory_name+'</option>');
                            });
                        },
                    });
                }else{
                    alert('danger');
                }
            });
        });
    </script>

    
   
@endsection
