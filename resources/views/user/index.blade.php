<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<style>
  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }

  .card-header {
    color: #48695d;
  }

  .navbar .nav-link {
    background-color: #7ea094f0;
    margin-left: 10px;
    border-radius: 10px;

  }

  .navbar-light .navbar-nav .nav-link.active,
  .navbar-light .navbar-nav .show>.nav-link {
    color: #102713;
    text-transform: uppercase;
    font-weight: bold;
  }

  .table {
    color: #7ea094f0;
  }

  tbody {
    color: #48695d !important;
  }

  .table-striped>tbody>tr:nth-of-type(odd) {
    color: #48695d !important;
  }

  .table tbody tr .action-link a {
    background-color: #7ea094f0;
    border-radius: 10px;
    padding: 5px 10px;
    text-decoration: none;
    color: #102713;
  }
</style>

<body>
  <div class="card ">
    <div class="card-header text-center">
      User Information
    </div>
    <div class="card-body mx-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{'create-user'}}">Add User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{'/'}}">Refresh </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <table class="table table-striped">
        @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{$message}}
        </div>
        @endif
        @if($message = Session::get('destroy'))
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @endif
        <thead>
          <tr>
            <th>User Serial</th>
            <th>User Name</th>
            <th>City</th>
            <th>Mobile</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @php($i=1)
          @foreach($user_datas as $user_data)

          <tr>
            <td>{{$i++}}</td>
            <td>{{$user_data->user_name}}</td>
            <td>{{$user_data->city}}</td>
            <td>{{$user_data->phones->mobile}}</td>
            <td class="action-link text-center">
              <a href="{{url('edit-data'.$user_data->id)}}">Edit</a>
              <a href="{{url('delete-data'.$user_data->id)}}">Delete</a>
              <a href="{{url('show-data'.$user_data->id)}}">Show</a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>