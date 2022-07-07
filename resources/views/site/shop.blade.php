@extends('site.layout.master')
@section('title')
    <title>Shop</title>
@endsection

@section('content')
    {{--    @dd($products)--}}
    <div id="page">

        <!-- Header -->
        <header id="top-search-div-2">

        </header>
        <!-- end header -->

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"><a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span>
                            </li>
                            <li><strong>Shop</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Main Container -->
        <button style="background: #f45400; color: white; margin-left:100px;" class="btn" onclick="sednProduct()">Filter
        </button>
        <div class="main-container col2-left-layout">
            <div class="container">
                <div class="row">
                    <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                        <div class="shop-inner">
                            <div class="page-title">
                                <h2>Products</h2>
                            </div>
                            <div class="toolbar">
                                <!-- <div class="view-mode">
                                  <ul>
                                    <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th-large"></i> </a> </li>
                                    <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
                                  </ul>
                                </div> -->
                                <div class="sorter">
                                    <div class="short-by">
                                        <label>Sort By:</label>
                                        <select name="selector" id="selector">
                                            <!-- <option selected="selected">Position</option> -->
                                            <option value="0">Name</option>
                                            <option value="1">Low to hight</option>
                                            <option value="2">Hight to low</option>
                                        </select>
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
                            <div class="product-grid-area">
                                <ul class="products-grid">
                                    @foreach($products as $product)
                                        <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        {{--<div class="icon-new-label new-left">New</div>--}}
                                                        <div class="pr-img-area"><a title="{{$product->title}}"
                                                                                    href="single_product.html">
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
                                                                <div class="mt-button add_to_wishlist"><a
                                                                        href="wishlist.html"> <i
                                                                            class="fa fa-heart"></i> </a></div>
                                                                <div class="mt-button add_to_compare"><a
                                                                        href="compare.html"> <i
                                                                            class="fa fa-signal"></i> </a></div>
                                                                <div class="mt-button quick-view"><a
                                                                        href="quick_view.html"> <i
                                                                            class="fa fa-search"></i> </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"><a title="Ipsums Dolors Untra"
                                                                                       href="single_product.html">{{$product->title}} </a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i></div>
                                                                <div class="item-price">
                                                                    <div class="price-box"><span class="regular-price"> <span
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
                            <div class="pagination-area">
                                <ul id="pagesNumber">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                        <div class="block shop-by-side">
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <div id="other_product">
                                    <div class="layered-Category">
                                        <h2 class="saider-bar-title">Categories</h2>
                                        <div class="layered-content">
                                            <ul class="check-box-list">
                                                @foreach($categories as $category)
                                                    <a class="category_filter" data-id="{{$category->id}}">
                                                        <li>{{$category->name}}</li>
                                                    </a>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block product-price-range">
                            <div class="sidebar-bar-title">
                                <h3>Price</h3>
                            </div>
                            <div class="block-content">
                                <div class="slider-range">
                                    <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="EGP"
                                         class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                                    <div id="range" class=" ">Range: 10 - 550</div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a></div>
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
                    // window.location.reload();
                }
            });
        });
        $('.remove_item').on('click', function () {

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
                    // window.location.reload();
                }
            });
        });
        $('.category_filter').on('click', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('filter') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (response) {
                    $('.product-grid-area').html(response.html);
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
                                // window.location.reload();
                            }
                        });
                    });
                }
            });
        });
        $('#selector').change(function (e) {
            e.preventDefault();
            var val = $(this).find(":selected").val();
            $.ajax({
                url: '{{ route('filter') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    sort: val,
                },
                success: function (response) {
                    // window.location.reload();
                    alert('success');
                }
            });

        });
    </script>
@endsection
