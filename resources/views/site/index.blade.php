@extends('site.layout.master')
@section('title')
    <title>Main Page</title>
@endsection
@section('content')
    <div class="container">
        <div class="home-tab">
            @foreach($categories as $category)
                <div class="tab-title text-left">
                    <h2>{{$category->name}}</h2>
                    <ul class="nav home-nav-tabs home-product-tabs" id="top-selling">
                    </ul>
                </div>
                <div id="productTabContent" class="tab-content">
                    <div class="tab-pane active in" id="computer">
                        <div class="featured-pro">
                            <div class="slider-items-products">
                                <div id="computer-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4" id="sellingg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="smartphone-slider" class="product-flexslider">
                        <div class="slider-items slider-width-col4 ">
                            @foreach($category->products()->get() as $product)
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="pr-img-area"><a title="{{$product->title}}">
                                                    <figure>
                                                        <img class="hover-img" src="{{asset($product->default_image->path)}}" alt="HTML template">
                                                        @foreach($product->image_path as $key=>$image)
                                                            @if($key==0)
                                                                <img class="first-img" src="{{asset($image->path)}}" alt="HTML template">
                                                            @endif
                                                        @endforeach
                                                        @if($product->image_path->isEmpty())
                                                            <img class="first-img" src="{{asset($product->default_image->path)}}" alt="HTML template">
                                                        @endif
                                                    </figure>
                                                </a></div>
                                            <div class="pr-info-area">
                                                <div class="pr-button">
                                                    <div data-id="{{$product->id}}" class="mt-button add_to_wishlist"><a> <i class="fa fa-heart"></i> </a></div>
{{--                                                    <div data-id="{{$product->id}}" class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-signal"></i> </a></div>--}}
                                                    <div data-id="{{$product->id}}" class="mt-button quick-view"><a class="quick"> <i class="fa fa-search"></i> </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $total = 1;
                                            $count = 1;
                                            $rates=\App\Models\Rating::where('product_id', $product->id)->get();
                                            if ($rates->isNotEmpty())
                                                {
                                            $total = 0;
                                            $count = 0;
                                                    foreach ($rates as $rate)
                                                    {
                                                       $total += $rate->stars_rated;
                                                       $count++;
                                                    }
                                                }
                                           $total_rate = $total / $count;
                                        @endphp
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title="{{$product->title}}">{{$product->title}}</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <i class="{{$total_rate >=1?'fa fa-star':'fa fa-star-o'}}"></i>
                                                        <i class="{{$total_rate >=2?'fa fa-star':'fa fa-star-o'}}"></i>
                                                        <i class="{{$total_rate >=3?'fa fa-star':'fa fa-star-o'}}"></i>
                                                        <i class="{{$total_rate >=4?'fa fa-star':'fa fa-star-o'}}"></i>
                                                        <i class="{{$total_rate >=5?'fa fa-star':'fa fa-star-o'}}"></i>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"> <span class="price">${{$product->price}}</span> </span></div>
                                                    </div>
                                                    @if(\Illuminate\Support\Facades\Session::has('cart'))
                                                        <input type="hidden" value="{{count(\Illuminate\Support\Facades\Session::get('cart'))}}" id="session_data">
                                                    @endif
                                                    <div class="pro-action">
                                                        <button type="button" data-id="{{$product->id}}" class="add-to-cart"><span> Add to Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
                @if($categories->isEmpty())
                        <div class="tab-title text-left">
                            <h2>category one</h2>
                            <ul class="nav home-nav-tabs home-product-tabs" id="top-selling">
                            </ul>
                        </div>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane active in" id="computer">
                                <div class="featured-pro">
                                    <div class="slider-items-products">
                                        <div id="computer-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4" id="sellingg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="smartphone-slider" class="product-flexslider">
                                <div class="slider-items slider-width-col4 ">
                    <div class="product-item">
                        <div class="item-inner">
                            <div class="product-thumbnail">
                                <div class="pr-img-area"><a title="example">
                                        <figure>
                                            <img class="hover-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                            <img class="first-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                        </figure>
                                    </a></div>
                                <div class="pr-info-area">
                                    <div class="pr-button">
                                        <div data-id="0" class="mt-button "><a> <i class="fa fa-heart"></i> </a></div>
                                        {{--                                                    <div data-id="{{$product->id}}" class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-signal"></i> </a></div>--}}
                                        <div data-id="0" class="mt-button "><a class="quick"> <i class="fa fa-search"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $total = 1;
                                $count = 1;
                               $total_rate = $total / $count;
                            @endphp
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a title="example">example</a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"> <span class="price">$1500</span> </span></div>
                                        </div>
                                        <div class="pro-action">
                                            <button type="button" data-id="0" class="add-to-cart"><span> Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="item-inner">
                            <div class="product-thumbnail">
                                <div class="pr-img-area"><a title="example">
                                        <figure>
                                            <img class="hover-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                            <img class="first-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                        </figure>
                                    </a></div>
                                <div class="pr-info-area">
                                    <div class="pr-button">
                                        <div data-id="0" class="mt-button "><a> <i class="fa fa-heart"></i> </a></div>
                                        <div data-id="0" class="mt-button "><a class="quick"> <i class="fa fa-search"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $total = 1;
                                $count = 1;
                               $total_rate = $total / $count;
                            @endphp
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a title="example">example 2</a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"> <span class="price">$1600</span> </span></div>
                                        </div>
                                        <div class="pro-action">
                                            <button type="button" data-id="0" class="add-to-cart"><span> Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="item-inner">
                            <div class="product-thumbnail">
                                <div class="pr-img-area"><a title="example">
                                        <figure>
                                            <img class="hover-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                            <img class="first-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                        </figure>
                                    </a></div>
                                <div class="pr-info-area">
                                    <div class="pr-button">
                                        <div data-id="0" class="mt-button "><a> <i class="fa fa-heart"></i> </a></div>
                                        <div data-id="0" class="mt-button "><a class="quick"> <i class="fa fa-search"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $total = 1;
                                $count = 1;
                               $total_rate = $total / $count;
                            @endphp
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a title="example">example 3</a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"> <span class="price">$1700</span> </span></div>
                                        </div>
                                        <div class="pro-action">
                                            <button type="button" data-id="0" class="add-to-cart"><span> Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="item-inner">
                            <div class="product-thumbnail">
                                <div class="pr-img-area"><a title="example">
                                        <figure>
                                            <img class="hover-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                            <img class="first-img" src="{{asset('uploads/products/default.png')}}" alt="HTML template">
                                        </figure>
                                    </a></div>
                                <div class="pr-info-area">
                                    <div class="pr-button">
                                        <div data-id="0" class="mt-button "><a> <i class="fa fa-heart"></i> </a></div>
                                        {{--                                                    <div data-id="{{$product->id}}" class="mt-button add_to_compare"><a href="compare.html"> <i class="fa fa-signal"></i> </a></div>--}}
                                        <div data-id="0" class="mt-button "><a class="quick"> <i class="fa fa-search"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $total = 1;
                                $count = 1;
                               $total_rate = $total / $count;
                            @endphp
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a title="example">example 4</a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"> <span class="price">$1800</span> </span></div>
                                        </div>
                                        <div class="pro-action">
                                            <button type="button" data-id="0" class="add-to-cart"><span> Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
        </div>
    </div>
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

                    quantity = count.quantity;
                    $.ajax({
                        url: '{{ route('update_cart') }}',
                        method: "patch",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: id,
                            quantity:quantity,
                        },
                        success: function (response) {
                            // alert(count.total);
                            $('.price_list_cart').html(response.total);

                            // window.location.reload();
                        }
                    });
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
