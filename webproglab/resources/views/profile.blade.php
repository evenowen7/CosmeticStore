@extends('navbar')

@section('title', 'Profile')

@section('content')
    <div class="form-container" style="height: 85vh">
        <h1>Profile</h1>
        <form action="/profile" method="POST" style="margin-top: 20px; width:100%"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Name</label>
                <input type="text" value="" name="user_name" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Email</label>
                <input type="text" value="" name="user_email" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Gender</label>
                <input type="text" value="" name="user_role" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Date of Birth</label>
                <input type="text" value="" name="user_password" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Country</label>
                <input type="text" value="" name="user_password" style="width: 100%">
            </div>

            <button type="submit" style="margin-top: 30px">Update</button>

            @if ($errors->any())
            @endif
        </form>
    </div>
@endsection
