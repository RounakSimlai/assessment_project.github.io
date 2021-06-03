<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Assessment</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="pt-5">
            <h1><u>Register</u></h1><br>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
                </div>
                @endif
                <form method="POST" action="/register">
                    <h6>Name</h6>
                    <input type="text" name="name" placeholder="Name">
                    <h6>Email</h6>
                    <input type="email" name="email" placeholder="Email">
                    <h6>Password</h6>
                    <input type="password" name="password" placeholder="Password">
                    <h6>Phone</h6>
                    <input type="text" name="phone" placeholder="Phone">
                    <h6>Address</h6>
                    <input type="textarea" name="address" placeholder="Address">
                    <h6>City</h6>
                    <input type="text" name="city" placeholder="City">
                    <h6>State</h6>
                    <input type="text" name="state" placeholder="State">
                    <h6>Country</h6>
                    <input type="text" name="country" placeholder="Country">
                    <h6>Zip</h6>
                    <input type="text" name="zip" placeholder="Zip">
                    <button type="submit" class="btn btn-primary d-flex align-bottom">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>