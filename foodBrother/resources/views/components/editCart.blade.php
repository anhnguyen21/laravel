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
            <h2 class="text-center">Edit product</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="payment" placeholder="payment" required="required" value="{!! old ('payment',isset($tintuc)?$tintuc["name"]:NULL) !!}">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="total" placeholder="total" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="note" placeholder="note" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Edit</button>
            </div>
        </form>

    </div>
</body>
</html>
