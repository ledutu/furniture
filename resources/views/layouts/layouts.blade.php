<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
    <title>ECOSHOP - Multipurpose eCommerce HTML5 Template</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/furniture.css')}}" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="{{asset('js/modernizr.js')}}"></script>

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">

        <!-- header -->
        @include('layouts.header')

        <!--======= HOME MAIN SLIDER =========-->
        <section class="home-slider">

            <!-- SLIDE Start -->
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                            data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/slide-bg-1.jpg" alt="slider" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption font-playfair sfb tp-resizeme" data-x="left" data-hoffset="0"
                                data-y="center" data-voffset="-200" data-speed="800" data-start="500"
                                data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 7; font-size:18px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                                The Latest Product from ecoshop</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfl font-extra-bold tp-resizeme" data-x="left" data-hoffset="0"
                                data-y="center" data-voffset="-120" data-speed="800" data-start="800"
                                data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 6; font-size:80px; color:#2d3a4b; text-transform:uppercase; white-space: nowrap;">
                                <small class="font-regular">$</small>299 </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme" data-x="left" data-hoffset="0"
                                data-y="center" data-voffset="0" data-speed="800" data-start="800"
                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 6; font-size:120px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                                featured </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme" data-x="left" data-hoffset="0"
                                data-y="center" data-voffset="110" data-speed="800" data-start="1300"
                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 6; font-size:120px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                                cycle </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="0" data-y="center"
                                data-voffset="240" data-speed="800" data-start="2200" data-easing="Power3.easeInOut"
                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                                data-scrolloffset="0" style="z-index: 8;"><a href="#." class="btn">SHOP NOW</a> </div>
                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                            data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/slide-bg-2.jpg" alt="slider" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption font-playfair sfb tp-resizeme" data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-150" data-speed="800" data-start="500"
                                data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 7; font-size:18px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                                The Latest Product from ecoshop</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-regular tp-resizeme letter-space-4" data-x="center"
                                data-hoffset="0" data-y="center" data-voffset="-50" data-speed="800" data-start="800"
                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 6; font-size:78px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                                look beautiful </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="center"
                                data-hoffset="0" data-y="center" data-voffset="60" data-speed="800" data-start="1300"
                                data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                                data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 6; font-size:140px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                                this season </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb font-extra-bold tp-resizeme" data-x="center" data-hoffset="120"
                                data-y="center" data-voffset="200" data-speed="800" data-start="2200"
                                data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                                data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 6; font-size:60px; color:#fff; text-transform:uppercase; white-space: nowrap;">
                                <small class="font-regular">$</small> 299 </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-scrollbelowslider tp-resizeme" data-x="center"
                                data-hoffset="-120" data-y="center" data-voffset="200" data-speed="800"
                                data-start="2200" data-easing="Power3.easeInOut" data-elementdelay="0.1"
                                data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0"
                                style="z-index: 8;"><a href="#." class="btn">BUY NOW</a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>

        <!--======= FOOTER =========-->
        <footer>
            @include('layouts.footer')
        </footer>

        <!--======= RIGHTS =========-->

    </div>
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/own-menu.js')}}"></script>
    <script src="{{asset('js/jquery.lighter.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{('rs-plugin/js/jquery.tp.t.min.js')}}"></script>
    <script type="text/javascript" src="{{('rs-plugin/js/jquery.tp.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>