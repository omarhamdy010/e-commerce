<!DOCTYPE html>
<html lang="en">
<head>

{{--    <script type="text/javascript" src="{{asset('assets/js/js/jquery.min.js')}}"></script>--}}

{{--    <script>--}}
{{--        $(function () {--}}
{{--            $("#top-search-div-2").load("header.html");--}}
{{--        });--}}
{{--    </script>--}}


<!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description"
          content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords"
          content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons Icon -->
    <link rel="icon" type="image/x-icon" href="{{asset('images/shopping-cart.png')}}">
{{--    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>--}}
<!-- CSS Style -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

</head>

<body class="cms-index-index cms-home-page">

<div id="page">

    <!-- Header -->
    <header id="top-search-div-2">

    </header>
    <!-- end header -->
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <!-- Default Welcome Message -->
                        <div id="userName" class="welcome-msg hidden-xs hidden-sm"></div>
                        <!-- Language &amp; Currency wrapper -->
                        <div class="language-currency-wrapper">
                            <div class="sorter">
                                <div id="langua" class="short-by">
                                </div>
                                <!-- <div class="short-by page">
                                  <label>Show:</label>
                                  <select>
                                    <option selected="selected">18</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                  </select>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- top links -->
                    <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"><span class="phone  hidden-xs hidden-sm">Call Egy: +02012 0105 5210</span>
                        <ul class="links">
                            <li class="hidden-xs"><a title="Help Center" href="#"><span>Help Center</span></a></li>
                            <li><a title="Store Locator" href="#"><span>Store Locator</span></a></li>
                            <li id="checkOutWord"></li>
                            <li>
                                <div class="dropdown" id="myAccount">

                                </div>

                            <li id="accountLog">

                            </li>
                            <!-- <li onclick="logOut()"><a title="logout" id="logout" ><span>Logout</span></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header inner -->
        <div class="header-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12 jtv-logo-block">
                        <!-- Header Logo -->
                        <div class="logo">
                            <a title="e-commerce" href="{{route('site.index')}}">
                                <img alt="ShopMart" title="ShopMart" src="{{asset('assets/img/logofinal.png')}}"
                                     style="width:300px;"></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search">

                        <!-- Search -->

                        <div class="top-search">
                            <div id="search">
                                <form type="get" action="{{route('search')}}">
                                    @csrf
                                    @method('get')
                                    <div class="input-group">
                                        <input type="text" id="searchinp" class="form-control"
                                               value="{{request()->search}}" placeholder="Enter your search..."
                                               name="search">
                                        <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- End Search -->

                    </div>


                    <div class="col-xs-12 col-sm-4 col-md-4 top-cart">
                        <div class="link-wishlist"><a href="{{route('wishlist')}}"> <i class="fa fa-heart-o"></i><span> Wishlist</span></a>
                        </div>
                        <!-- top cart -->
                        <a>
                            <div class="top-cart-contain ">

                                <div class="mini-cart">

                                    <div class="basket "><a href="{{route('cart')}}">
                                            <div id="cartNo" class="cart-icon"></div>
                                            <div class="shoppingcart-inner hidden-xs"><span
                                                    class="cart-title">My Cart</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div>
                                        <div class="top-cart-content">
                                            <div class="block-subtitle hidden">Recently added items</div>
                                            <ul id="cart-sidebar-content" class="mini-products-list">
                                                <?php
                                                $subtotal = 0;
                                                ?>
                                                @if(\Illuminate\Support\Facades\Session::has('cart'))
                                                    <?php
                                                    foreach (\Illuminate\Support\Facades\Session::get('cart') as $cart) {
                                                        $price = $cart['price'];
                                                        $quantity = $cart['quantity'];
                                                        $total = $price * $quantity;
                                                        $subtotal += $total;
                                                    }
                                                    ?>
                                                    @foreach(\Illuminate\Support\Facades\Session::get('cart') as $cart)
                                                        <li class="item odd"><a href="shopping_cart.html"
                                                                                title="Product title here"
                                                                                class="product-image">
                                                                <img src="{{asset('uploads/products/'.$cart['image'])}}"
                                                                     alt="html Template" width="65"></a>
                                                            <div class="product-details" id="recart">
                                                                <a href="#" title="Remove This Item"
                                                                   class="remove-cart">
                                                                    <i class="fas fa-window-close"></i>
                                                                    <input type="hidden" value="{{$cart['id']}}"
                                                                           id="delete">
                                                                    <input type="hidden" value="{{$cart['quantity']}}"
                                                                           id="quantity">
                                                                </a>
                                                                <p class="product-name"><a
                                                                        href="shopping_cart.html">{{$cart['title']}}</a>
                                                                </p>
                                                                <strong>{{$cart['quantity']}}</strong> x <span
                                                                    class="price">{{$cart['price']}}</span></div>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                            <div class="top-subtotal">Subtotal: <span
                                                    class="price_list_cart">${{$subtotal}}</span></div>
                                            <div class="actions">
                                                <button class="btn-checkout" type="button"
                                                        onClick="location.href='checkout.html'">
                                                    <i class="fa fa-check"></i><span>Checkout</span></button>
                                                <button class="view-cart" type="button"
                                                        onClick="location.href='{{route('cart')}}'">
                                                    <i class="fa fa-shopping-cart"></i><span>View Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('site.layout._nav')

<?php
$sliders = \App\Models\Slider::where('status', 1)->get();
?>

<!-- Slideshow  -->
    @if(\Illuminate\Support\Facades\Request::segment(1)==''|| \Illuminate\Support\Facades\Request::segment(2)=='site')
@if($sliders->isNotEmpty())
        <div class="main-slider" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
                        <div id="jtv-slideshow">
                            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                    <ul id=""
                                        style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
                                        @foreach($sliders as $slider)
                                            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb="">
                                                <img src="{{ asset("uploads/slider/$slider->image")}}" data-bgposition="left top"
                                                            data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endif

        {{--        <div id="welcome-carousel" class="carousel slide" data-ride="carousel">--}}
        {{--            <div class="carousel-inner">--}}


        {{--                @foreach($sliders as $gallery)--}}

        {{--         --}}
        {{--                    <div id="test" class="carousel-item {{ $active }}">--}}
        {{--                        <img src="{{ asset("uploads/slider/$gallery->image") }}" class="img-fluid d-block w-100" alt="appartments_gallery_carousel">--}}
        {{--                    </div>--}}

        {{--                    @php $i++ @endphp--}}

        {{--                @endforeach--}}

        {{--            </div>--}}
        {{--            <a class="carousel-control-prev" href="#welcome-carousel" role="button" data-slide="prev">--}}
        {{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--                <span class="sr-only">Previous</span>--}}
        {{--            </a>--}}
        {{--            <a class="carousel-control-next" href="#welcome-carousel" role="button" data-slide="next">--}}
        {{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--                <span class="sr-only">Next</span>--}}
        {{--            </a>--}}
        {{--        </div>--}}

    @endif
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

{{--<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}

<!-- bootstrap js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/cart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/shop-grid.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/global-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/apiHeader.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/header.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js/wishlist.js')}}"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="http://aaaserver-001-site44.dtempurl.com/js/owl.carousel.min.js"></script>

<!-- jquery.mobile-menu js -->
<!-- <script type="text/javascript" src="js/global-methods.js"></script>  -->
{{--<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>--}}
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
@yield('js')
<script>

    $('.remove-cart').on('click', function () {
        var id = $('#delete').val();
        var url = 'deleteCart/' + id;
        $.ajax({
            url: url,
            method: "get",
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
            },
            success: function (count) {
                var x = JSON.parse(count.count);
                if (x) {
                    var z = x;
                } else {
                    z = 0;
                }
                if (document.getElementById("cartNo")) {
                    document.getElementById("cartNo").innerHTML = `<i class="fas fa-shopping-cart px-2"></i> <span class=cart-total>${z}</span>`
                }
                $('#rremove').parent().remove();
                $('#recart').parent().remove();
                $('.price_list_cart').html(count.total);
                $('#total_price_pro').remove();
                $('.append').append(`<strong id="total_price_pro">$${count.total}</strong>`);
// window.location.reload();
            }
        });
    });

    (function ($) {
        $(function () {
            $('.carousel').carousel({
                wrap: 'circular'
            });
        });
    })(jQuery)

</script>
<script type='text/javascript'>
    jQuery(document).ready(function () {

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




