<!DOCTYPE html>
<html lang="en" ---->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="card">
    <div class="card-header  text-center">
        User Information
    </div>
    
    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>User id:</dt>
            <dd>{{$user->id}}</dd>
            <dt>User Name</dt>
            <dd>{{$user->user_name}}</dd>
            <dt>City</dt>
            <dd>{{$user->city}}</dd>
            <dt>Mobile</dt>
            <dd>{{$user->phones->mobile}}</dd>
        </dl>
    </div>
</div>
</body>
</html>

