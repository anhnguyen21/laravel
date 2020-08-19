<header style="display: flex">
    <ul class="nameWeb">
        <li><a href="#"><i class="fa fa-phone" aria-hidden="true">0329488708</i></a></li>
        <li><a href="#"><i class="fa fa-address-card" aria-hidden="true">101b Le Huu Trac</i></a></li>
    </ul>
    <div class="right_contain">
        <div class="icon">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-twitch" aria-hidden="true"></i>
            <i class="fa fa-google-plus" aria-hidden="true"></i>
        </div>
        <div class="user">
        <a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i></a>
            @if(Auth::check())
                <a href="{{ url('/loginForm') }}">{{Auth::user()->username }}</a>
            @else
                <a href="{{ url('/loginForm') }}">Login</a><span>
            @endif
            {{-- Route::get('thoat','LoginController@logOut')->name('thoat'); --}}
        </span>
        </div>
    </div>
</header>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".menu-icon").click(function() {
            $(".menu-icon").toggleClass("active")
        })

        $(".menu-icon").click(function() {
            $(".slidebar").toggleClass("active")
        })

         $(".user").click(function() {
            $(".login-form").toggleClass("active")
        })

        $(window).scroll(function(event) {
            var pos_body = $('html,body').scrollTop();
            if (pos_body > 50) {
                $('.navi').addClass('co-dinh-menu');
                $('.slide_scroll').addClass('margin-top');
              
            } else {
                $('.navi').removeClass('co-dinh-menu');
            }
        });
    })
</script>
<div class="navi">
    <img src="public/img_food/logo.png" alt="">
    <div class="md-Form mt-0">
        <div>Đà nẵng <i class="fa fa-sort-desc" aria-hidden="true"></i></div>
        <div>Đồ ăn <i class="fa fa-sort-desc" aria-hidden="true"></i></div>
        <span class="search_form">
            <input class="form-control" type="text" placeholder="search">
            <a><i class="fa fa-search" aria-hidden="true"></i></a>
        </span>
    </div>


    <ul>
        <li><a href="#home" onclick="toggle()">Giới thiệu</a></li>
        <li><a href="#product" onclick="toggle()">Sản phẩm</a></li>
        <li><a href="#services" onclick="toggle()">Dịch vụ</a></li>
        {{-- <li><a href="#portfolio" onclick="toggle()"></a></li> --}}
        <li><a href="#team" onclick="toggle()">Đôi ngũ</a></li>
        <li><a href="#contact" onclick="toggle()">Liên hệ</a></li>
    </ul>
    <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="slidebar">
    <a href="#"><img src="public/img_food/logo.png" alt=""></a>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <ul class="social-icon">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
</div>
