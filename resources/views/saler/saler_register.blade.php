<!DOCTYPE html>
<html lang="en">
<head>
  <title>saler</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Saler Sign Up Area</h2>
  <div class="card">
    <div class="card-header">Salser Signup</div>
    <div class="card-body">
    	<form action="{{route('saler.signupcreate')}}" method="post">
    		 @csrf
   <div class="form-group">
    <label for="email">Enter Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="email" name="name" value="{{ old('name') }}">
    @if($errors->has('name'))
						<span class="help-block" style="color: #FF0000;">
							<i>**{{ $errors->first('name') }}</i>
						</span>
					@endif
  </div> 		
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="{{ old('email') }}">
    				@if($errors->has('email'))
						<span class="help-block" style="color: #FF0000;">
							<i>**{{ $errors->first('email') }}</i>
						</span>
					@endif
  </div>
  <div class="form-group">
    <label for="email">Phone number:</label>
    <input type="text" class="form-control" placeholder="Enter phone" id="email" name="phone" value="{{ old('phone') }}">
   					 @if($errors->has('phone'))
						<span class="help-block" style="color: #FF0000;">
							<i>**{{ $errors->first('phone') }}</i>
						</span>
					@endif 
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" >
    @if($errors->has('password'))
						<span class="help-block" style="color: #FF0000;">
							<i>**{{ $errors->first('password') }}</i>
						</span>
					@endif 
  </div>
   <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" placeholder="Enter Confirm password" id="pwd" name="password_confirmation">
    @if($errors->has('password_confirmation'))
						<span class="help-block" style="color: #FF0000;">
							<i>**{{ $errors->first('password_confirmation') }}</i>
						</span>
					@endif 
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div> 
    
  </div>
</div>

</body>
</html>

