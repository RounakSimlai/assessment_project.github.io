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
    @if(session()->has('success'))
                <div class="alert alert-success">
                <strong>{{session()->get('success')}}</strong>
                </div>
                @endif
        <div class="column">
            <div class="d-flex">
                <h1>Welcome!</h1>
            </div>
            <div class="column">
                <div>
                    <a href="{{url('/login')}}">Click Here to Login!<br><br></a>
                    <a href="{{url('/register')}}">Click Here to Register!</a>
                </div>
            </div>

        </div>
</body>

</html>
