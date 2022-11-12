@extends('frontend.master')

@section('content')
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img class="rounded-circle" src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'
                .$user->profile_photo_path):url('upload/avatar-1.png') }}" alt="User Avatar">

                <br><br>

                <ul>
                    <li><a href="{{route('/')}}" class="btn btn-primary">Home</a></li>
                    <li><a href="{{route('dashboard')}}" class="btn btn-info">Profile</a></li>
                    <li><a href="{{route('user.profile.edit')}}" class="btn btn-success">Update Profile</a></li>
                    <li><a href="{{route('user.logout')}}" class="btn btn-danger">Logout</a></li>
                </ul>
            </div>

            <div class="col-lg-2"></div>

            <div class="col-lg-4">
            <form action="{{ route('user.password.update') }}" method="POST">
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
        </div><!--End row-->
    </div><!--End container-->
    </div><!--End body-content-->
@endsection

