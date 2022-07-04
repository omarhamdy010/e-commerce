@extends('site.layout.master')
@section('title')
    <title>Cart</title>
@endsection
@section('content')
    <div id="page">
        <!-- Header -->
        <header id="top-search-div">

        </header>
        <!-- end header -->

        <!-- end header -->

        <!-- Slideshow  -->
        <div class="main-slider" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img style="height: 35px;
          width: 100%;"src="images/banner-left.jpg" alt="banner"></div>
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
                        <div id="jtv-slideshow">
                            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                    <!-- <ul id="slider-list"> -->
                                    <ul id="slider-list" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;"><li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb=""> <img src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1006.jpg?q=-8585714250225824836" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner">

                                        </li> <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb=""> <img src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1004.jpg?q=-8585714250225823169" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner">

                                        </li> </ul>

                                    <!-- <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='images/slider/slide-2.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                      <div class="caption-inner">
                                        <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>
                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>
                                        <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New Standard. under favorable smartwatches</div>
                                        <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying </a> </div>
                                      </div>
                                    </li> -->
                                    <!-- </ul> -->
                                    <div class="tp-bannertimer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Container -->
        <section class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <div class="cart">

                        <div class="page-content page-order"><div class="page-title">
                                <h2>Shopping Cart</h2>
                            </div>


                            <div class="order-detail-content">
                                <div class="table-responsive">
                                    <table class="table table-bordered cart_summary">
                                        <thead>
                                        <tr>
                                            <th class="cart_product">Product</th>
                                            <th>Description</th>
                                            <th>title.</th>
                                            <th>price</th>
                                            <th>Qty</th>
                                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody id="cartData">
                                        @if(\Illuminate\Support\Facades\Session::has('cart'))
                                            @foreach(\Illuminate\Support\Facades\Session::get('cart') as $cart)
                                         <tr>
                                          <td class="cart_product"><a href="#"><img src="{{asset('uploads/products/'.$cart['image'])}}" alt="Product"></a></td>
                                          <td class="cart_description"><p class="product-name"><a href="#">{{$cart['description']}} </a></p>
                                            <small><a href="#"></a></small>
                                          <td class="title"><span>{{$cart['title']}}</span></td>
                                          <td class="price"><span>{{$cart['price']}}</span></td>
                                          <td class="qty"><input class="form-control input-sm" type="text" value="{{$cart['quantity']}}"></td>
                                          <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                                        </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot id="Total">
{{--                                        <tr>--}}
{{--                                          <td colspan="2" rowspan="2"></td>--}}
{{--                                          <td colspan="3">Total products (tax incl.)</td>--}}
{{--                                          <td colspan="2">$237.88 </td>--}}
{{--                                        </tr>--}}
                                         <tr>
                                          <td colspan="3"><strong>Total</strong></td>
                                          <td colspan="2"><strong id="total_pricr_pro"></strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="cart_navigation"> <a class="continue-btn" href="shop_grid.html"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="checkout.html"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service section -->
        <div class="jtv-service-area">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3 col-sm-6 col-xs-12">
                        <div class="block-wrapper ship">
                            <div class="text-des">
                                <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                                <div class="service-wrapper">
                                    <h3>World-Wide Shipping</h3>
                                    <p>On order over $99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-6 col-xs-12 ">
                        <div class="block-wrapper return">
                            <div class="text-des">
                                <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                                <div class="service-wrapper">
                                    <h3>30 Days Return</h3>
                                    <p>Moneyback guarantee </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-6 col-xs-12">
                        <div class="block-wrapper support">
                            <div class="text-des">
                                <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                                <div class="service-wrapper">
                                    <h3>Support 24/7</h3>
                                    <p>Call us: ( +123 ) 456 789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-sm-6 col-xs-12">
                        <div class="block-wrapper user">
                            <div class="text-des">
                                <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                                <div class="service-wrapper">
                                    <h3>Member Discount</h3>
                                    <p>25% on order over $199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            var x = $('#session_data').val();
            if (document.getElementById("cartNo")) {
                document.getElementById("cartNo").innerHTML = `<i class="fas fa-shopping-cart px-2"></i> <span class=cart-total>${x}</span>`
            }
        });
    </script>
@endsection
