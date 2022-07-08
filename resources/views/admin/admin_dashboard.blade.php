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
    <div class="card-header">Admin Dashboard Details <a href="{{route('saler.logout')}}" class="btn btn-success mr">Logout</a></div>
                       
    <div class="card-body">
      
      Welcome to admin Dashboard: {{Auth::guard('admin')->user()->name}} <br>
      
    </div> 
    <div class="card-footer">d</div>
  </div>
</div>

</body>
</html>

