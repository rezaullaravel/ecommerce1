@extends('admin.admin_master')

@section('content')
    <div class="content-wrapper">
		  <div class="container-full">

			<!-- Main content -->
			<section class="content">
		<div class="row">
		    <div class="col-md-3"></div>
					
			<div class="col-md-6">

					<form action="{{ route('admin.password.update') }}" method="POST">
						@csrf

							  <div class="box-body">
									<div class="form-group row">
										<label class="col-form-label col-md-2">Current Password</label>
										<div class="col-md-10">
											<input class="form-control" type="password" name="oldpassword" id="current_password" >
											
										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">New Password</label>
										<div class="col-md-10">
											<input class="form-control" type="password" name="password" id="password">
											
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-md-2">Confirm Password</label>
										<div class="col-md-10">
											<input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
											
										</div>
									</div>



									<div class="form-group row">
										<label class="col-form-label col-md-2"></label>
										<div class="col-md-10 ">
											<input class="btn btn-success" style="float:right;" type="submit" name="btn" value="Update Password">
											
										</div>
									</div>
						
							</div>
					</form>
			</div>

			<div class="col-md-3"></div>
			
					
		</div>
			</section>
			<!-- /.content -->
		  </div>
  </div>
@endsection