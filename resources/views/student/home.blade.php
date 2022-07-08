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

<div class="container">
 
  <h2>Student Table</h2>
  <p><a href="{{route('student_from')}}" class="btn btn-success">Add-Student</a></p>
   @if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
  @endif            
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>City</th>
        <th>Subject</th>
         <th>Section</th>
          <th>Image</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($student as $students)
      <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->name}}</td>
        <td>{{$students->phone}}</td>
        <td>{{$students->email}}</td>
        <td>{{$students->city}}</td>
        <td>{{$students->subject}}</td>
        <td>{{$students->section}}</td>
         <td><img src="{{asset('/public/image/'.$students->image)}}" width="100px" height="50px"></td>
        <td><a href="{{url('/student/edit/'.$students->id)}}" class="btn btn-primary">Updare</a></td>
        <td><a href="{{url('/student/delete/'.$students->id)}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
