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
  <h2>Saler Login Area</h2>
  <div class="card">
    <div class="card-header">Salser Login</div>
                        @if(Session::has('error'))
                             <div class="alert alert-danger"><p>{{ Session::get('error') }}</p></div>
                        @endif
    <div class="card-body">
    	<form action="{{route('saler.create')}}" method="post">
        @csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" value="{{ old('email') }}">
         
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
          
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div> 
    <div class="card-footer">Don`t have an Account? <a href="{{route('saler.signup')}}" class=" btn btn-info"> Sign Up</a> </div>
  </div>
</div>

</body>
</html>

