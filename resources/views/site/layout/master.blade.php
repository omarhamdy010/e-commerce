<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="{{asset('assets/js/js/jquery.min.js')}}"></script>

    <script>
        $(function(){
            $("#top-search-div-2").load("header.html");
        });
    </script>


    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Low-cost </title>
    <meta name="description" content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- CSS Style -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

</head>

<body class="cms-index-index cms-home-page" >

<div id="page">

    <!-- Header -->
    <header id="top-search-div-2">

    </header>
    <!-- end header -->
        @include('site.layout._nav')

    <!-- Slideshow  -->
    <div class="main-slider" id="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
                    <div id="jtv-slideshow">
                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                <ul id="slider-list" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb="">
{{--                                        <img src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1006.jpg?q=-8585714250225824836" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner"></li>--}}
                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb="">
{{--                                        <img src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1004.jpg?q=-8585714250225823169" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner"></li> </ul>--}}
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All products-->

@yield('content')
</div>


<!-- Footer -->
@include('site.layout.footer')
<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>

<!-- End Footer -->

<!-- JS -->
<!-- home js -->

<!-- jquery js -->
<!-- home js -->

<!-- jquery js -->
<!--<script type="text/javascript" src="js/jquery.min.js"></script> -->

<!-- bootstrap js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/bootstrap.min.js')}}"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="http://aaaserver-001-site44.dtempurl.com/js/owl.carousel.min.js"></script>

<!-- jquery.mobile-menu js -->
<!-- <script type="text/javascript" src="js/global-methods.js"></script>  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/js/home.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/mobile-menu.js')}}"></script>

<!--jquery-ui.min js -->


<!-- main js -->
<script type="text/javascript" src="{{{asset('assets/js/js/main.js')}}}"></script>

<!-- countdown js -->
<script type="text/javascript" src="{{asset('assets/js/js/countdown.js')}}"></script>

<!-- Slider Js -->
<script type="text/javascript" src="{{asset('assets/js/js/revolution-slider.js')}}"></script>
<!-- <script type="text/javascript" src="js/cart.js"></script>  -->
<script type='text/javascript'>
    jQuery(document).ready(function(){

        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 865,
            startheight: 450,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,


            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>
</body>
</html>




