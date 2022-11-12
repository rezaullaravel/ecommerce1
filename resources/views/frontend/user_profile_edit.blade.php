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
            <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control">

                </div>

                <div class="form-group">
                    <label>Phone number</label>
                    <input type="number" name="phone" value="{{$user->phone}}" class="form-control">

                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="profile_photo_path" class="form-control">

                </div>

       <img id="ShowImage" src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'
                                .$user->profile_photo_path):url('upload/avatar-1.png') }}" alt="kkk">


                <div class="form-group">
                    <label></label>
                    <input type="submit" name="btn" class="form-control btn btn-success" value="Update">

                </div>
            </form>
            </div>
        </div><!--End row-->
    </div><!--End container-->
    </div><!--End body-content-->
@endsection
