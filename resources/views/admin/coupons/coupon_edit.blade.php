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
                                        <h1>Edit coupon</h1>
                                            
                                            <form action="{{route('coupon.update')}}" method="POST" >
                                            @csrf
                                                <div class="form-group">
                                                    <label>Coupon name</label>
                                                <input type="text" value="{{ $coupon->coupon_name }}" name="coupon_name" class="form-control">

                                                 <input type="hidden" value="{{ $coupon->id }}" name="id" class="form-control">

                                                @error('coupon_name')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>

                                                <div class="form-group">
                                                    <label>Coupon discount</label>
                                                <input type="text" value="{{ $coupon->coupon_discount }}" name="coupon_discount" class="form-control">

                                                @error('coupon_discount')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>


                                                <div class="form-group">
                                                    <label>Coupon validity</label>
                                                <input type="text" name="coupon_validity" value="{{ $coupon->coupon_validity }}" class="form-control">

                                                @error('coupon_validity')
                                                <strong style="color:green;">{{$message}}</strong>
                                                @enderror
                                                    
                                            
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label></label>
                                                <input type="submit" name="btn" class="btn btn-success" style="float:right;" value="Update coupon">
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
