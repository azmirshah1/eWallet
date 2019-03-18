@section('title', 'Profile')
@extends('layouts.design')
@section('content')
<div class="col-lg-12 col-sm-6 text-center mb-4">
    <!-- sales report area start -->
    <hr style="border-color: #9e0039;">

<br>
<img src="assets/images/avatar/{{ $user->avatar}}" style ="width:150px; height:150px;  border-radius:50%; margin-right:25px;">
<br></br>
<h2> {{ $user->name}}'s Profile</h2>
<form enctype="multipart/form-data" action="/profile" method="POST">
	<label>Update Profile Image</label>
	<input type="file" name="avatar">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" name="submit" class="pull-right btn btn-small btn-primary">	
</form>
        
</div>
@endsection
