<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web UI</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="public/css/styleLogin.css">

    </head>
    <body>

        <div class="contain">
            <h2>Đăng kí</h2>
            <form action="" method="POST">
                @csrf
                <div class="groupRe">
                    <samp>Họ và tên:</samp>
                    <input type="text" name="name">

                </div>
                <div class="groupRe">
                    <samp>Mật khẩu:</samp>
                    <input type="text" name="mk">
                </div>
                <div class="groupRe">
                    <samp>Tuổi:</samp>
                    <input type="text" name="tuoi">
                </div>
                <div class="groupRe">
                    <samp>Mail:</samp>
                    <input type="text" name="mail">
                </div>
                <div class="groupRe">
                    <samp>Web:</samp>
                    <input type="text" name="web">
                </div>
                <div class="groupRe">
                    <samp>Địa chỉ:</samp>
                    <input type="text" name="dc">
                </div>
                <button type="submit">Đăng kí</button>
            </form>
            <div>
                @include('block.error');
            </div>
        </div>
         @if(isset($user))

            <p>Name: {{$user['name']}}</p>
            <p>Tuoi {{$user['tuoi']}}</p>
            <p>Mail: {{$user['mail']}}</p>

        @endif

    </body>
</html>
