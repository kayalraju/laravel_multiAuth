<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">

@if(Session::has('error')) 
<div class="alert alert-danger" role="alert">
  <strong> {{ session::get('error') }} </strong> 
</div>
@endif

welcome to admin area:
<h4>Login Admin Name : {{ Auth::guard('superadmin')->user()->name }} </h4>
<h4>Login Admin Email : {{ Auth::guard('superadmin')->user()->email }} </h4>

<p><a href="{{route('superadmin.logout')}}" class="btn btn-success">Logout</a></p>
  
</div>

</body>
</html>
