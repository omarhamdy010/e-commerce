<ul class="products-grid">
    {{--    @dd($cat->products)--}}
    @foreach($cat as $product)
{{--        @dd($product)--}}
        <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
            <div class="product-item">
                <div class="item-inner">
                    <div class="product-thumbnail">
                        {{--<div class="icon-new-label new-left">New</div>--}}
                        <div class="pr-img-area"><a title="{{$product->title}}"
                                                    href="single_product.html">
                                <figure>
                                    <img class="hover-img"
                                         src="{{asset($product->default_image)}}"
                                         alt="HTML template">
{{--                                    @foreach($product->image_path as $key=>$image)--}}
{{--                                        @if($key==0)--}}
{{--                                            <img class="first-img"--}}
{{--                                                 src="{{asset($image->path)}}"--}}
{{--                                                 alt="HTML template">--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
                                    @if($product->image_path)
                                        <img class="first-img"
                                             src="{{asset($product->default_image)}}"
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
