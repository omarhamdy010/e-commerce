@extends('site.layout.master')
@section('title')
    <title>Main Page</title>
@endsection
@section('content')
    <div class="container">
        <div class="home-tab">
            @foreach($categories as $category)

                {{--                @dump($category)--}}
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
                                {{--                                                            @dd($product)--}}
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            {{--                                        <div class="icon-sale-label sale-left">Sale</div>--}}
                                            {{--                                        <div class="icon-new-label new-right">New</div>--}}
                                            <div class="pr-img-area"><a title="{{$product->title}}"
                                                                        href="single_product.html">
                                                    <figure>
                                                        <img class="hover-img"
                                                             src="{{asset($product->default_image->path)}}"
                                                             alt="HTML template">
                                                        @foreach($product->image_path as $key=>$image)
                                                            @if($key==0)
                                                                <img class="first-img" src="{{asset($image->path)}}"
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
                                                    <div class="mt-button add_to_wishlist"><a href="wishlist.html">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a></div>
                                                    <div class="mt-button add_to_compare"><a href="compare.html">
                                                            <i class="fa fa-link"></i>
                                                        </a></div>
                                                    <div class="mt-button quick-view"><a href="quick_view.html">
                                                            <i class="fa fa-search"></i>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title="{{$product->title}}"
                                                                           href="single_product.html">{{$product->title}}</a>
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
                                                        <div class="price-box"><span class="regular-price"> <span
                                                                    class="price">${{$product->price}}</span> </span>
                                                        </div>
                                                    </div>
                                                    <div class="pro-action">
                                                        <button type="button" data-id="{{$product->id}}"
                                                                class="add-to-cart"><span> Add to Cart</span>
                                                        </button>
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
        </div>
    </div>
@endsection


@section('js')
    <script>
        $('.add-to-cart').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('add-to-cart') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    // quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });
    </script>
@endsection
