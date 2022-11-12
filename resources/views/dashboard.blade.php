@extends('frontend.master')

@section('content')
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img id="ShowImage" src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'
                .$user->profile_photo_path):url('upload/avatar-1.png') }}" alt="kkk">

                <br><br>

                <ul>
                    <li><a href="{{route('/')}}" class="btn btn-primary">Home</a></li>
                    <li><a href="{{route('dashboard')}}" class="btn btn-info">Profile</a></li>
                    <li><a href="{{route('user.profile.edit')}}" class="btn btn-success">Update Profile</a></li>
                    <li><a href="{{route('user.password.change')}}" class="btn btn-warning">Password Change</a></li>
                    <li><a href="{{route('user.logout')}}" class="btn btn-danger">Logout</a></li>
                </ul>
            </div>

            <div class="col-lg-10">
            <h1 class="text-center"> Hello <strong>{{Auth::User()->name}}</strong></h1>
            </div>
        </div><!--End row-->
    </div><!--End container-->
    </div><!--End body-content-->
@endsection
