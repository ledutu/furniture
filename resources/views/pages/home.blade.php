@extends('layouts.layouts')

@section('content')
<section class="padding-bottom-100">
    <div class="container-achievement">
        <div class="container padding-top-40 padding-bottom-30">
            {{-- achievement --}}

            <div class="text-center achievement">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <img src="images/products/chair-logo.png" alt="" width="70px" height="70px">
                        <p class="title">Tiết kiệm thời gian</p>
                        <p>Tìm kiếm và chọn lựa sản phẩm một cách trực quan và nhanh chống</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/products/chair-logo.png" alt="" width="70px" height="70px">
                        <p class="title">Sản phẩm chất lượng</p>
                        <p>Chất lượng sản phẩm luôn được đảm bảo, cam kết 100% hàng chính hãng</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/products/chair-logo.png" alt="" width="70px" height="70px">
                        <p class="title">Giá tốt nhất</p>
                        <p>Viphome mang đến cho khách hạng mức và giá hợp lý</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/products/chair-logo.png" alt="" width="70px" height="70px">
                        <p class="title">Giao hàng nhanh</p>
                        <p>Giao hàng và vận chuyển nhanh một cách nhanh chống</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Popular Products -->
<section class="padding-bottom-100">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>Mẫu sofa nhập bán chạy</h4>
            <hr>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                Sed feugiat, tellus vel tristique posuere, diam</span>
        </div>

        <!-- Popular Item Slide -->
        <div class="row">
            @for ($i = 0; $i < 8; $i++) <!-- Item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center margin-bottom-50">
                    <a href="">
                        <!-- Item img -->
                        <img class="img-1" src="images/products/sofa-1.jpeg" alt="" width="270px" height="250px">
                        <!-- Item Name -->
                        <h6>Sofa phòng khách</h6>
                        <!-- Price -->
                        <span class="price" style="margin-top: 10px">199,300,000đ</span>
                    </a>
                </div>
                @endfor
        </div>
        <nav aria-label="">
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>

    </div>

</section>



<!-- San pham khuyen mai -->
<section class="padding-bottom-100">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>Sản phẩm khuyến mãi</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                Sed feugiat, tellus vel tristique posuere, diam</span>
        </div>

        <!-- Popular Item Slide -->
        {{-- <div class="papular-block block-slide">

            @for ($i = 0; $i < 5; $i++) <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"> <img class="img-1" src="images/products/sofa-1.jpeg" alt=""> <img
                            class="img-2" src="images/products/sofa-1.jpeg" alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-center-center">
                                <div class="inn"><a href="images/product-1.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                        data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a>
                                    <a href="#." data-toggle="tooltip" data-placement="top" title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">Sofa phòng khách</a>
                    </div>
                    <!-- Price -->
                    <span class="price" style="margin-top: 10px">199,300,000đ</span>
                </div>
                @endfor
        </div> --}}

        <!-- Popular Item Slide -->
        <div class="row">
            @for ($i = 0; $i < 8; $i++) <!-- Item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center margin-bottom-50">
                    <a href="">
                        <!-- Item img -->
                        <img class="img-1" src="images/products/sofa-1.jpeg" alt="" width="270px" height="250px">
                        <!-- Item Name -->
                        <h6>Sofa phòng khách</h6>
                        <!-- Price -->
                        <span class="price" style="margin-top: 10px">199,300,000đ</span>
                    </a>
                </div>
                @endfor
        </div>
        <nav aria-label="">
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>

<section class="padding-top-0 padding-bottom-100">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>new arrival</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                Sed feugiat, tellus vel tristique posuere, diam</span>
        </div>
    </div>

    <!-- New Arrival -->
    <div class="arrival-block">

        @for ($i = 0; $i < 4; $i++) <!-- Item -->
            <div class="div">
                <div class="item">
                    <!-- Images -->
                    <img class="img-1" src="images/products/sofa-1.jpeg" alt="">

                    @if ($i == 1)
                    <div class="item-name">
                        <div class="heading text-center">
                            <h4>Bộ sưu tập 2020 mang phong cách hiện đại</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                faucibus maximus
                                vehicula.
                                Sed feugiat, tellus vel tristique posuere, diam</span>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary">Xem ngay</button>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
            @endfor

    </div>
</section>

<!-- Testimonial -->
<section>
    <div class="container">
        <div class="heading text-center">
            <h4>Hình ảnh khách hàng thực tế</h4>
        </div>
        <div class="text-center">
            <div id="carousel-example-generic" class="carousel slide text-center" data-ride="carousel"
                style="width: 70%; height: 500px; margin-left:auto; margin-right:auto">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @for ($i = 0; $i < 3; $i++) <div class="item {{$i == 0? 'active': ''}}">
                        <img src="images/blog-list-img-1-5.jpg" alt="" width="600px">
                        <div class="carousel-caption">
                            <h6>Nguyen Tran Tri Lap</h6> <br>
                            <p class="margin-top-0">VIPHOME tự hào hàng đầu trong lĩnh vực nội thất</p>
                            <br>
                            <a href="" style="color: #ffe115">Xem chi tiết</a>
                        </div>
                </div>
                @endfor

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
</section>

<!-- About -->
<section class="small-about padding-top-100 padding-bottom-50">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>Dịch vụ của chúng tôi</h4>
            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu
                posuere odio luctus non. Nulla lacinia,
                eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
        </div>

        <!-- New Arrival -->
        <div class="arrival-block">

            @for ($i = 0; $i < 8; $i++) <!-- Item -->
                <div class="item">
                    <a href="">
                        <!-- Images -->
                        <img class="img-1" src="images/products/home.jpeg" alt="">
                        <div style="width: 100%; height: 100%; background-color: black"></div>
                        <div class="overlayImage text-center">
                            <p class="centered">Le Duc TUng</p>
                        </div>
                        <!-- Overlay  -->
                        <!-- Item Name -->
                    </a>
                </div>
                @endfor

        </div>

        <div class="row margin-top-50">
            @for ($i = 0; $i < 3; $i++) <div class="col-md-4">
                <h6>Câu chuyện VIPHOME</h6>
                <hr>

                <div class="row">
                    <a href="">
                        <div class="col-sm-4">
                            <img src="images/products/old-man-1.jpeg" alt="" width="100px" height="100px">
                        </div>
                        <div class="col-sm-8">
                            <p class="blog-title">VIHome trao vàng tài lộc đến anh Nhưỡng - Hồ Tùng Mậu</p>
                            <p class="blog-content">Các mẫu thiết kế phòng ngủ nhỏ siêu đẹp</p>
                        </div>
                    </a>
                </div>

                <ul class="list-group" style="padding-left: 20px">
                    <a href=""><li class="blog-menu">Dapibus ac facilisis in</li></a>
                    <a href=""><li class="blog-menu">Dapibus ac facilisis in</li></a>
                    <a href=""><li class="blog-menu">Dapibus ac facilisis in</li></a>
                </ul>
        </div>
        @endfor

    </div>

</section>

<section>
    <div class="container-achievement padding-top-50 padding-bottom-100">
        <div class="container">

            <!-- Main Heading -->
            <div class="heading text-center margin-bottom-0">
                <h4>Đối tác của chúng tôi</h4>
                <hr style="width: 80%; margin: auto;">
                <p class="margin-bottom-0 margin-top-20">VIPHOME là đơn vị hàng đầu nội thất với đội ngũ kiến trúc sư
                    trẻ trung, nhiệt huyết, có tay nghề cao nhiều năm kinh nghiệm <br>
                    VIPHOME cam kết sẽ làm vừa lòng khách hàng
                </p>
            </div>

            <div class="row padding-top-50">
                @for ($i = 0; $i < 4; $i++) <div class="col-md-3 text-center">
                    <img src="images/product-1.jpg" alt="" width="250px" height="150px">
            </div>
            @endfor
        </div>
    </div>

    </div>

</section>


<section class="small-about news-letter padding-top-50 padding-bottom-50">
    <ul class="social_icons">
        <li><a href="#."><i style="color: #ffffff" class="icon-social-facebook"></i></a></li>
        <li><a href="#."><i style="color: #ffffff" class="icon-social-twitter"></i></a></li>
        <li><a href="#."><i style="color: #ffffff" class="icon-social-tumblr"></i></a></li>
        <li><a href="#."><i style="color: #ffffff" class="icon-social-youtube"></i></a></li>
        <li><a href="#."><i style="color: #ffffff" class="icon-social-dribbble"></i></a></li>
    </ul>
    <div class="container padding-top-50">
        <!-- Social Icons -->
        <div class="heading light-head text-center margin-bottom-30">
            <h4>Đăng kí nhận tin</h4>
            <span>Để lại email của bạn để nhận thông báo khuyến mãi mới nhất từ Eric Decor </span>
        </div>
        <form>
            <input type="email" placeholder="Nhập vào email của bạn" required>
            <button type="submit">Gửi</button>
        </form>
    </div>
</section>
@endsection