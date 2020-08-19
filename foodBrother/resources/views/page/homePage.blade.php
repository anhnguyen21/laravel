@extends('../page/master')
@section('content')

<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function(event) {
            var pos_body = $('html,body').scrollTop();
            if (pos_body > 1230) {
                $('.list-group').addClass('co-dinh-sidebar');
            } else {
                $('.list-group').removeClass('co-dinh-sidebar');
            }
            // if(pos_body>2575){
            //     $('.list-group').removeClass('co-dinh-sidebar');
            //     // $('.list-group').addClass('back-to-top');
            // }
            // else{
            //     $('.list-group').removeClass('co-dinh-sidebar');
            // }
        });
        $('.back-to-top').click(function(event) {
            $('html,body').animate({
                scrollTop: 0
            }, 3000);
        });
    })
</script>

<section id="home" class="slide_scroll" data-parallax="scroll" data-image-src="public/img_food/pa.jpg">
    <div class="slide_text_centrer">
        <h2 class="h2_text">Đặt món cùng</h2>
    </div>
    <div class="imgSlide">
        <img src="public/img_food/clouds.png" alt="">
    </div>
    
</section>
<section>
    <div class="top_restaurent">
        <h5>Website for Restaurant and Cafe</h5>
        <h3>TOP RESTAURANTS</h3>
        <p><span>that get tricky are things like burgers and fries, or things that are deep-fried.</span><span> We do have a couple of burger restaurants that are capable of doing a good job</span><span> transporting but it's Fries are almost impossible.</span></p>
    </div>
</section>

<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @foreach($moi as $product)
                                <div class="col-md-3 margin_cart">
                                    <img src="{{ $product->image }}" alt="" width="270px" height="250px">
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                @foreach($yeuthich as $product)
                                <div class="col-md-3 margin_cart">
                                    <img src="{{ $product->image }}" alt="" width="270px" height="250px">
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                @foreach($donggoi as $product)
                                <div class="col-md-3 margin_cart">
                                    <img src="{{ $product->image }}" alt="" width="270px" height="250px">
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="product" class="main_contain">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="mini-submenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="list-group" style="width: 250px">
                    <span href="#" class="list-group-item active" style="background-color: black; color : white">
                        Danh mục
                    </span>
                    <a href="#banchay" class="list-group-item" style="color : black">
                        Sản phẩm bán chạy
                    </a>
                    <a href="#moi" class="list-group-item" style="color : black">
                        Sản phẩm mới
                    </a>
                    <a href="#giamgia" class="list-group-item" style="color : black">
                        Sản phẩm giảm giá
                    </a>
                    <a href="#yeuthich" class="list-group-item" style="color : black">
                        Sản phẩm yêu thích
                    </a>
                    <a href="#donggoi" class="list-group-item" style="color : black">
                        Sản phẩm đóng gói
                    </a>
                </div>
            </div>


            <div class="col-sm-9">
                <div class="container" id="banchay">
                    <div class="center-title-area">
                        <h2 class="center-title">Sản phẩm bán chạy</h2>
                    </div>
                    <div id="addcart">

                    </div>
                    {{-- <div class="row">
                        @foreach($arr as $product)
                        <div class="col-md-3 margin_cart">
                            <div class="container cart_content">
                                <img src="{{ $product->image }}" alt="">
                                <h2><span>{{$product->title}}</span><span>{{$product->unit_price}} đ</span></h2>

                                <ul>
                                    <li>
                                        <a href="{{ route('themgiohang',$product->id) }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chitietsanpham',$product->id) }}"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        @endforeach
                    </div> --}}
                </div>

                <!--  -->

                <div class="container" id="moi">
                    <div class="center-title-area">
                        <h2 class="center-title">Sản phẩm mới</h2>
                    </div>
                    <div id="newPro">
                        
                    </div>
                    {{-- <div class="row">
                        @foreach($moi as $product)

                        <div class="col-md-3 margin_cart">
                            <div class="container cart_content">
                                <img src="{{ $product->image }}" alt="">
                                <h2><span>{{$product->title}}</span><span>{{$product->unit_price}} đ</span></h2>

                                <ul>
                                    <li>
                                        <a href="{{ route('themgiohang',$product->id) }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chitietsanpham',$product->id) }}"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        @endforeach
                    </div> --}}
                </div>

                <!--  -->
                <!--  -->

                <div class="container" id="giamgia">
                    <div class="center-title-area">
                        <h2 class="center-title">Sản phẩm giảm giá</h2>
                    </div>
                  
                    <div class="row">
                        @foreach($giamgia as $product)

                        <div class="col-md-3 margin_cart">
                            <div class="container cart_content">
                                <img src="{{ $product->image }}" alt="">
                                <h2><span>{{$product->title}}</span><span>{{$product->promotion_price}} đ</span></h2>

                                <ul>
                                    <li>
                                        <a href="{{ route('themgiohang',$product->id) }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chitietsanpham',$product->id) }}"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!--  -->

                

                <!--  -->
                <div class="container" id="yeuthich">
                    <div class="center-title-area">
                        <h2 class="center-title">Sản phẩm yêu thích</h2>
                    </div>
                    <div id="YT">

                    </div>
                </div>
                <div class="container" id="donggoi">
                    <div class="center-title-area">
                        <h2 class="center-title">Sản phẩm đóng gói</h2>
                    </div>
                    <div class="row">
                        @foreach($donggoi as $product)

                        <div class="col-md-3 margin_cart">
                            <div class="container cart_content">
                                <img src="{{ $product->image }}" alt="">
                                <h2><span>{{$product->title}}</span><span>{{$product->unit_price}} đ</span></h2>

                                <ul>
                                    <li>
                                        <a href="{{ route('themgiohang',$product->id) }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chitietsanpham',$product->id) }}"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</section>
<section>
    <div class="message" >
        <button><img src="public/mess.png" alt=""></button>
    </div>
    <div id="chatReact">

    </div>
    
</section>
<script src="public/js/app.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.message').click(function(event) {
            $('.message').hide();
            $('.container').show();
        });
        $('#close').click(function(event) {
            $('.message').show();
            $('.chatbox').hide();
        });

    })
</script>
@endsection