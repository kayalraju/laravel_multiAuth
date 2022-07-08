<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
</head>
<body>
 
<div class="container">
  <h2>Saler Login Area</h2>
  <div class="card">
    <div class="card-header">Admin Dashboard Details <a href="{{route('saler.logout')}}" class="btn btn-success mr">Logout</a></div>
                       
    <div class="card-body">
      
      Welcome to admin Dashboard: {{Auth::guard('admin')->user()->name}} <br>
      
    </div> 
    <div class="card-footer">
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Saler Name</th>
        <th>Saler Phone</th>
        <th>Saler Email</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($saler as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->email}}</td>
       <td>
                                    <input data-id="{{$data->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-status="{{ $data->status }}" data-off="InActive" {{ (isset($data->status) && $data->status == 1) ? 'checked' : '' }}>
                                </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    </div>
  </div>
</div>


<script> 
var base_url = window.location.origin+'/';

 //console.log(base_url+"ChangeStatus");

 $('.toggle-class').change(function () {
    let status = $(this).data('status');
    let user_id = $(this).data('id');
    let csrf_token = $("input[name=_token]").val();
    $.ajax({
        type: "POST",
        url:"{{ route('ChangeStatus') }}",
        headers: { 'X-CSRF-Token': csrf_token },
        data: {'status': status, 'user_id': user_id},
        success: function (data) {
            
        }
    });
});

</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>

