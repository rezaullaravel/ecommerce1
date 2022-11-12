@extends('admin.admin_master')

@section('content')
    <div class="content-wrapper">
		  <div class="container-full">

			<!-- Main content -->
		<section class="content">
		<div class="row">
		    <div class="col-md-3"></div>

			<div class="col-md-6">

					<form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
						@csrf

							  <div class="box-body">
									<div class="form-group row">
										<label class="col-form-label col-md-2">Name</label>
										<div class="col-md-10">
											<input class="form-control" type="name" name="name" value="{{ $admin->name }}">

										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input class="form-control" type="email" name="email" value="{{ $admin->email }}">

										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">Photo</label>
										<div class="col-md-10">
											<input class="form-control" type="file" name="profile_photo_path">

										</div>
									</div>

									<img id="ShowImage" src="{{ (!empty($admin->profile_photo_path))?url('upload/admin_images/'
                                .$admin->profile_photo_path):url('upload/avatar-1.png') }}" alt="kkk">


									<div class="form-group row">
										<label class="col-form-label col-md-2"></label>
										<div class="col-md-10 ">
											<input class="btn btn-success" style="float:right;" type="submit" name="btn" value="Update">

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
