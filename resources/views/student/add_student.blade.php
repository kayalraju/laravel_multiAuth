<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width: 500px; border: 2px solid red;margin-top: 20px;">
  <h2>Student form</h2>
  <form action="{{route('student_add')}}" method="post" enctype="multipart/form-data">
  	@csrf
  	<div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" value="{{ old('name') }}">
      @error('name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror
    </div>
    <div class="form-group">
      <label for="email">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      @error('email')
               <span class="text-danger"> {{ $message }}</span>
          @enderror
    </div>
    <div class="form-group">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter City" name="city">
    </div>
    <div class="form-group">
      <label for="pwd">Subject:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter subject" name="subject">
    </div>
    <div class="form-group">
      <label for="pwd">Section:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter section" name="section">
    </div>
    <div class="form-group">
      <label for="pwd">Image:</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter section" name="image">
    </div>
    <button type="submit" class="btn btn-success">Add-Student</button>
  </form>
</div>

</body>
</html>
