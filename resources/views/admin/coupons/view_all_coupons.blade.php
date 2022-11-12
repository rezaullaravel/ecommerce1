@extends('admin.admin_master')

@section('content')
    <div class="content-wrapper">
		<div class="container-full">

			<!-- Main content -->
            <section class="content">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="text-center text-success">{{ Session::get('sms') }}</h2>

                            <div class="box">
                               <div class="box-header with-border">
                                 <h3 class="box-title">View all coupons here.</h3>
                               </div><!-- /.box-header -->

                               <div class="box-body">
                                   <div class="table-responsive">
                                     <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>SL no</th>
                                               <th>Coupon name</th>
                                               <th>Coupon discount</th>
                                               <th>Coupon validity</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                        @php($i=1)
                                      @foreach($coupons as $coupon)
                                           <tr>
                                               <td>{{$i++}}</td>
                                               <td>{{$coupon->coupon_name}}</td>
                                               <td>{{$coupon->coupon_discount}}</td>
                                               <td>{{$coupon->coupon_validity}}</td>
                                               
                                               <td>
                                               <a href="{{route('coupon.edit',$coupon->id)}}" class="btn btn-info btn-sm">Edit</a>
                                               <a href="{{route('coupon.delete',$coupon->id)}}" onclick="return confirm('Are you sure  to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
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
                                        <h1>Add coupon</h1>
                                            
                                            <form action="{{route('coupon.add')}}" method="POST" >
                                            @csrf
                                                <div class="form-group">
                                                    <label>Coupon name</label>
                                                <input type="text" name="coupon_name" class="form-control">

                                                @error('coupon_name')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>

                                                <div class="form-group">
                                                    <label>Coupon discount</label>
                                                <input type="text" name="coupon_discount" class="form-control">

                                                @error('coupon_discount')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>


                                                <div class="form-group">
                                                    <label>Coupon validity</label>
                                                <input type="date" name="coupon_validity" class="form-control">

                                                @error('coupon_validity')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Add coupon">
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
