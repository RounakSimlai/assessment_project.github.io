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
            <form method="POST" action="/login">
                <h1>Login</h1>
                @if(session()->has('success'))
                <div class="alert alert-success">
                <strong>{{session()->get('success')}}</strong>
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger">
                <strong>{{session()->get('error')}}</strong>
                </div>
                @endif

                @if(count($errors)>0)
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
                </div>
                @endif
                <h6>Email</h6>
                <input type="email" name="email" placeholder="Email">
                <h6>Password</h6>
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn btn-primary d-flex align-bottom">Login</button>
            </form>
        </div>
    </div>
</body>

</html>