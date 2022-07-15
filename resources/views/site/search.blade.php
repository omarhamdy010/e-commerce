@extends('site.layout.master')
@section('title')
    <title>Search</title>
@endsection

@section('content')

    <div class="main-slider" id="home">
        {{--        <div class="container">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img style="height: 35px;--}}
        {{--          width: 100%;" src="images/banner-left.jpg" alt="banner"></div>--}}
        {{--                <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">--}}
        {{--                    <div id="jtv-slideshow">--}}
        {{--                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>--}}
        {{--                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>--}}
        {{--                                <!-- <ul id="slider-list"> -->--}}
        {{--                                <ul id="slider-list"--}}
        {{--                                    style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">--}}
        {{--                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000"--}}
        {{--                                        data-thumb=""><img--}}
        {{--                                            src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1006.jpg?q=-8585714250225824836"--}}
        {{--                                            data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat"--}}
        {{--                                            alt="banner">--}}

        {{--                                    </li>--}}
        {{--                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000"--}}
        {{--                                        data-thumb=""><img--}}
        {{--                                            src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1004.jpg?q=-8585714250225823169"--}}
        {{--                                            data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat"--}}
        {{--                                            alt="banner">--}}

        {{--                                    </li>--}}
        {{--                                </ul>--}}

        {{--                                <!-- <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='images/slider/slide-2.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>--}}
        {{--                                  <div class="caption-inner">--}}
        {{--                                    <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>--}}
        {{--                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>--}}
        {{--                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>--}}
        {{--                                    <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New Standard. under favorable smartwatches</div>--}}
        {{--                                    <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying </a> </div>--}}
        {{--                                  </div>--}}
        {{--                                </li> -->--}}
        {{--                                <!-- </ul> -->--}}
        {{--                                <div class="tp-bannertimer"></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-12 col-xs-12 ">

                    <div class="shop-inner">
                        <div class="page-title">
                            <h2>Products</h2>
                        </div>
                        <div class="toolbar">
                            @if($products->isNotEmpty())
                                <div class="product-grid-area">
                                    <ul class="products-grid">
                                        @foreach($products as $product)
                                            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                                <div class="product-item">
                                                    <div class="item-inner">
                                                        <div class="product-thumbnail">
                                                            {{--<div class="icon-new-label new-left">New</div>--}}
                                                            <div class="pr-img-area"><a title="{{$product->title}}">
                                                                    <figure>
                                                                        <img class="hover-img"
                                                                             src="{{asset($product->default_image->path)}}"
                                                                             alt="HTML template">
                                                                        @foreach($product->image_path as $key=>$image)
                                                                            @if($key==0)
                                                                                <img class="first-img"
                                                                                     src="{{asset($image->path)}}"
                                                                                     alt="HTML template">
                                                                            @endif
                                                                        @endforeach
                                                                        @if($product->image_path->isEmpty())
                                                                            <img class="first-img"
                                                                                 src="{{asset($product->default_image->path)}}"
                                                                                 alt="HTML template">
                                                                        @endif
                                                                    </figure>
                                                                </a></div>
                                                            <div class="pr-info-area">
                                                                <div class="pr-button">
                                                                    <div data-id="{{$product->id}}" class="mt-button add_to_wishlist"><a> <i class="fa fa-heart"></i> </a></div>
                                                                    {{--                                <div data-id="{{$product->id}}" class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-signal"></i> </a></div>--}}
                                                                    <div data-id="{{$product->id}}" class="mt-button quick-view"><a class="quick"> <i class="fa fa-search"></i> </a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"><a title="Ipsums Dolors Untra">{{$product->title}} </a>
                                                                </div>
                                                                @php
                                                                    $total = 0;
                                                                    $count = 0;
                                                                    $rates=\App\Models\Rating::where('product_id', $product->id)->get();
                                                                    if ($rates->isNotEmpty())
                                                                        {foreach ($rates as $rate) {
                                                                           $total += $rate->stars_rated;
                                                                           $count++;}
                                                                        }
                                                                   $total_rate = $total / $count;
                                                                @endphp
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <i class="{{$total_rate >=1?'fa fa-star':'fa fa-star-o'}}"></i>
                                                                        <i class="{{$total_rate >=2?'fa fa-star':'fa fa-star-o'}}"></i>
                                                                        <i class="{{$total_rate >=3?'fa fa-star':'fa fa-star-o'}}"></i>
                                                                        <i class="{{$total_rate >=4?'fa fa-star':'fa fa-star-o'}}"></i>
                                                                        <i class="{{$total_rate >=5?'fa fa-star':'fa fa-star-o'}}"></i>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"><span
                                                                                class="regular-price"> <span
                                                                                    class="price">${{$product->price}}</span> </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pro-action">
                                                                        <button type="button" data-id="{{$product->id}}"
                                                                                class="add-to-cart">
                                                                            <span> Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <h1>there is no data</h1>
                            @endif
                        </div>
                        <div class="product-grid-area">
                            <ul class="products-grid " id="searchresult">

                            </ul>
                        </div>
                        <div class="pagination-area">
                            <ul id="pagesNumber">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{count(\Illuminate\Support\Facades\Session::get('cart',[]))}}" id="session_data">
    <div id="view_view"></div>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var x = $('#session_data').val();
            if (x) {
                var z = x;
            } else {
                var z = 0;
            }
            var y = JSON.parse(z);
            if (document.getElementById("cartNo")) {
                document.getElementById("cartNo").innerHTML = `<i class="fas fa-shopping-cart px-2"></i> <span class=cart-total>${y}</span>`
            }
        });
        $('.add-to-cart').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('add-to-cart') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (count) {
                    var x = JSON.parse(count.count);
                    if (x) {
                        var z = x;
                    } else {
                        var z = 0;
                    }
                    if (document.getElementById("cartNo")) {
                        document.getElementById("cartNo").innerHTML = `<i class="fas fa-shopping-cart px-2"></i> <span class=cart-total>${z}</span>`
                    }
                    $('#cart').append();
                    $('.mini-products-list').html(count.html);
                    // window.location.reload();
                }
            });
        });
        $('.delete_ittem').on('click', function () {

            var id = $('#delete').val();
            var url = 'deleteWishlist/' + id;
            $.ajax({
                url: url,
                method: "get",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (count) {
                    $('#delate_tr').parent().remove();
                    // window.location.reload();
                }
            });
        });
        $('.add_to_wishlist').on('click', function () {
            var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: '{{ route('add_to_wishlist') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (count) {
                    // $('#cart').append();
                    // $('.mini-products-list').html(count.html);
                    // window.location.reload();
                }
            });
        });
        $('.quick-view').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('quickview') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (count) {

                    $('#view_view').append(count.html);

                    // $('#cart').append();
                    // $('.mini-products-list').html(count.html);
                    // window.location.reload();
                }
            });
        });
    </script>
@endsection
