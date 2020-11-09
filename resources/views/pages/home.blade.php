@extends('layouts.layouts')

@section('content')
<section class="padding-bottom-100">
    <div class="container-achievement">
        <div class="container padding-top-40 padding-bottom-30">
            {{-- achievement --}}

            <div class="text-center achievement">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <img src="images/cart-img-1.jpg" alt="" width="70px" height="70px">
                        <p class="title">Tiết kiệm thời gian</p>
                        <p>Tìm kiếm và chọn lựa sản phẩm một cách trực quan và nhanh chống</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/cart-img-1.jpg" alt="" width="70px" height="70px">
                        <p class="title">Sản phẩm chất lượng</p>
                        <p>Chất lượng sản phẩm luôn được đảm bảo, cam kết 100% hàng chính hãng</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/cart-img-1.jpg" alt="" width="70px" height="70px">
                        <p class="title">Giá tốt nhất</p>
                        <p>Viphome mang đến cho khách hạng mức và giá hợp lý</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="images/cart-img-1.jpg" alt="" width="70px" height="70px">
                        <p class="title">Giao hàng nhanh</p>
                        <p>Giao hàng và vận chuyển nhanh một cách nhanh chống</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Popular Products -->
<section class="padding-bottom-150">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>popular products</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                Sed feugiat, tellus vel tristique posuere, diam</span>
        </div>

        <!-- Popular Item Slide -->
        <div class="papular-block block-slide">

            @for ($i = 0; $i < 5; $i++) <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"> <img class="img-1" src="images/product-1.jpg" alt=""> <img class="img-2"
                            src="images/product-2.jpg" alt="">
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
                    <div class="item-name"> <a href="#.">stone cup</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span>
                </div>
                @endfor
        </div>
    </div>
</section>

<!-- San pham khuyen mai -->
<section class="padding-bottom-150">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>best price products</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                Sed feugiat, tellus vel tristique posuere, diam</span>
        </div>

        <!-- Popular Item Slide -->
        <div class="papular-block block-slide">

            @for ($i = 0; $i < 5; $i++) <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"> <img class="img-1" src="images/product-1.jpg" alt=""> <img class="img-2"
                            src="images/product-2.jpg" alt="">
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
                    <div class="item-name"> <a href="#.">stone cup</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span>
                </div>
                @endfor
        </div>
    </div>
</section>

<!-- Knowledge Share -->
<section class="light-gray-bg padding-top-150 padding-bottom-150">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>knowledge share</h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                Sed feugiat, tellus vel tristique posuere, diam</span>
        </div>

        <div class="text-center">
            <button class="btn btn-primary">Watch now</button>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="testimonial padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <!-- SLide -->
                <div class="single-slide">

                    <!-- Slide -->
                    <div class="testi-in"> <i class="fa fa-quote-left"></i>
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non.
                            Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                        <h5>john smith</h5>
                    </div>

                    <!-- Slide -->
                    <div class="testi-in"> <i class="fa fa-quote-left"></i>
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non.
                            Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                        <h5>john smith</h5>
                    </div>

                    <!-- Slide -->
                    <div class="testi-in"> <i class="fa fa-quote-left"></i>
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non.
                            Nulla lacinia, eros vel fermentum consectetur, risus p</p>
                        <h5>john smith</h5>
                    </div>
                </div>
            </div>

            <!-- Img -->
            <div class="col-sm-6"> <img src="images/testi-avatar.jpg" alt="" width="550px" height="422px"> </div>
        </div>
    </div>
</section>

<!-- About -->
<section class="small-about padding-top-150 padding-bottom-150">
    <div class="container">

        <!-- Main Heading -->
        <div class="heading text-center">
            <h4>about ecoshop</h4>
            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu
                posuere odio luctus non. Nulla lacinia,
                eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
        </div>

        <!-- Social Icons -->
        <ul class="social_icons">
            <li><a href="#."><i class="icon-social-facebook"></i></a></li>
            <li><a href="#."><i class="icon-social-twitter"></i></a></li>
            <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
            <li><a href="#."><i class="icon-social-youtube"></i></a></li>
            <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
        </ul>
    </div>
</section>
<section class="news-letter padding-top-150 padding-bottom-150">
    <div class="container">
        <div class="heading light-head text-center margin-bottom-30">
            <h4>NEWSLETTER</h4>
            <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus,
                eu posuere odi </span>
        </div>
        <form>
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit">SEND ME</button>
        </form>
    </div>
</section>
@endsection