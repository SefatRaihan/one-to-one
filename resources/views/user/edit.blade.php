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

<body>
    <div class="card">
        <div class="card-header  text-center">
            User Information
        </div>
        <div class="card-body">
            <form action="{{route('updateData')}}" method="post" class="ml-5">
                @csrf
                <div class="form-group mb-3">
                    <label for="user_name">User Name</label>
                    <input type="text" name="user_name" class="form-control" value="{{$user->user_name}}">
                @error()
                </div>
                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" value="{{$user->city}}">
                </div>
                <div class="form-group mb-3">
                    <label for="mobile">Mobile</label>
                    <input type="number" name="mobile" class="form-control" value="{{$user->phones->mobile}}" {{--@dd($phone);--}}>
                </div>
                <input type="hidden" name="id" value="{{$user->id}}">
                <input type="submit" name="ctg-btn" class="btn btn-primary btn-block" value="Save">
            </form>
        </div>
    </div>
</body>

</html>