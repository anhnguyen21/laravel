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
    <div class="contain">
        <form action="" method="POST">
            @csrf
            <div>
                <h2>Form đăng ký</h2>
            </div>
            <div class="group_form">
                <div class="txt_input">
                    <label for="">Họ và tên <span>*</span></label><br>
                    <input id="name" type="text" placeholder="Nhập họ tên">
                </div>

                <div class="txt_input">
                    <label for="">Tên đăng nhập <span>*</span></label><br>
                    <input id="user" type="text" placeholder="Tên đăng nhập">
                </div>

            </div>
            <div class="group_form">
                <div class="txt_input">
                    <label for="">Email <span>*</span></label><br>
                    <input id="email" class="email" name="email" type="text" placeholder="Nhập email">
                </div>
            </div>
            <div class="group_form">
                <div class="txt_input">
                    <label for="">Phone <span>*</span></label><br>
                    <input id="phone" class="email" name="phone" type="text" placeholder="Nhập phone">
                </div>
            </div>
            <div class="group_form">
                <div class="txt_input">
                    <label for="">Tài khoản<span>*</span></label><br>
                    <input id="username" name="username" type="name" placeholder="Tài khoản">
                </div>
                <div class="txt_input">
                    <label for="">Mật khẩu (6-30 ký tự)<span>*</span></label><br>
                    <input id="pas" name="pas" type="password" placeholder="Mật khẩu">
                </div>
            </div>
            <div class="group_form">
                <div class="txt_input">
                    <label for="">Năm sinh <span>*</span></label>
                   <select name="nam" id="nam">
                        <option value="" selected disabled hidden>-chon-</option>
                       <option value="1990">1990</option>
                       <option value="1991">1991</option>
                       <option value="1992">1992</option>
                       <option value="1993">1993</option>
                       <option value="1994">1994</option>
                       <option value="1995">1995</option>
                       <option value="1996">1996</option>
                       <option value="1997">1997</option>
                       <option value="1998">1998</option>
                       <option value="1999">1999</option>
                       <option value="2000">2000</option>
                   </select>
                </div>
                <div class="txt_gender" style="display: flex;">
                    <label for="">Giới Tính  </label>
                    <input type="radio" value="0" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" value="1" name="gender" value="female">
                    <label for="female">Female</label>
                </div>

            </div>
            <div class="group_form">
                <div class="txt_input">
                    <label for="">Thành phố <span>*</span></label>
                    <select name="diachi" id="diachi">
                        <option value="" selected disabled hidden>-chon-</option>
                        <option value="HN">Hà Nội</option>
                        <option value="HCM">Hồ Chí Minh</option>
                        <option value="HP">Hải Phòng</option>
                        <option value="CT">Cần Thơ</option>
                        <option value="QN">Quảng Ninh</option>
                    </select>
                </div>
            </div>
            <div>
                @include('block.error')
            </div>
            <div class="btn_regist">
                <button type="submit" class="btn btn-primary btn-block">Regist</button>
            </div>
            <div class="clearfix">
                <div>
                    <label class="pull-left checkbox-inline"><input type="checkbox"> </label>
                    <span>Remember me</span>
                </div>
            </div>
        </form>

    </div>
</body>
</html>
