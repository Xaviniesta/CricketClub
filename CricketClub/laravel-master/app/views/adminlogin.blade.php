@extends('layout.main')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Admin Login</h3>
  </div>
  <div class="panel-body">
<form action="{{ URL::route('account-login-post') }}" method="POST" class="form-inline" role="form">

	<div class="form-group">
		<label class="sr-only" for="username">label</label>
		<input type="text" name="username" class="form-control" id="username" placeholder="Username">
	</div>
	@if($errors->has('username')) 
				{{ $errors->first('username') }}
	@endif
	<div class="form-group">
		<label class="sr-only" for="password">label</label> 
		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
	</div>
	@if($errors->has('password')) 
				{{ $errors->first('password') }}
	@endif
	<input type="submit" class="btn btn-primary">
</form>
  </div>
</div>

@stop