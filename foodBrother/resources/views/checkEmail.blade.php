<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/styleLoginFood.css">
</head>
<body>
    <div class="login-form">
        <form action="" method="POST">
            @csrf
            <h2 class="text-center">Check code</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="check" placeholder="Check code">
            </div>
            <div class="btn_regist">
                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </div>
            <p class="text-center"><a href="{{ url('/regist') }}">Create an Account</a></p>
        </form>

    </div>
</body>
</html>
