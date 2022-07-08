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
  <h2>Student Update form</h2>
  <form action="{{url('/student/update/'.$edit->id)}}" method="post" >
  	@csrf
  	<div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" value="{{$edit->name}}" name="name">
    </div>
    <div class="form-group">
      <label for="email">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" value="{{$edit->phone}}" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{$edit->email}}" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter City" value="{{$edit->city}}" name="city">
    </div>
    <div class="form-group">
      <label for="pwd">Subject:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter subject" value="{{$edit->subject}}" name="subject">
    </div>
    <div class="form-group">
      <label for="pwd">Section:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter section" value="{{$edit->section}}" name="section">
    </div>
      <div class="form-group">
      <label for="pwd">Image:</label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter section" name="image">
    </div>
    
    
    <button type="submit" class="btn btn-success">Update-Student</button>
  </form>
</div>

</body>
</html>
