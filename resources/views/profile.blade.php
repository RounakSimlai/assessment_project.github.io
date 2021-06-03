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
            <div class="d-flex pb-3">
                <h1><u>Profile Details</u></h1>
            </div>
        </div>
        <div class="column">
            <div style="line-height: 50px;">
                <h4>Name</h4>
                {{$user->name}}
                <h4>Email</h4>
                {{$user->email}}
                <h4>Phone</h4>
                {{$user->phone}}
                <h4>Address</h4>
                {{$user->address}}
                <h4>City</h4>
                {{$user->city}}
                <h4>State</h4>
                {{$user->state}}
                <h4>Country</h4>
                {{$user->country}}
                <h4>Zip</h4>
                {{$user->zip}}
            </div>
        </div>
        <div class="column">
            <div>
                <a href="/logout"><button type="button" class="btn btn-primary">Logout</button></a>
            </div>
        </div>
    </div>
</body>

</html>