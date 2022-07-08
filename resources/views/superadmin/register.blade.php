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
  <h2>super admin reg form</h2>
  <form action="{{ route('superadmin.register.create') }}" method="post">
        @csrf
       
        <div class="form-group icon_parent">
            <label for="uname">Username</label>
<input type="text" class="form-control" name="name"  placeholder="Full Name">
            
            <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
        </div>
<div class="form-group icon_parent">
            <label for="email">E-mail</label>
<input  type="email" class="form-control" name="email" placeholder="Email Address">

            
            <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
        </div>
        <div class="form-group icon_parent">
            <label for="password">Password</label>
            <input  type="password" class="form-control" name="password"  placeholder="Password">

             
            <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
        </div>
        <div class="form-group icon_parent">
            <label for="rtpassword">Re-type Password</label>
            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
            <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
        </div>
        <div class="form-group">
            
            <button type="submit" class="btn btn-success">Signup</button>
        </div>
    </form>
</div>

</body>
</html>
