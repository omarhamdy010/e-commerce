{{--@dd($product)--}}
<div id="quick_view_popup-overlay"></div>
<div style="display: block; " id="quick_view_popup-wrap">
    <div id="quick_view_popup-outer">
        <div id="quick_view_popup-content">
            <div style="width:auto;height:auto;overflow: auto;position:relative;">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="large-image">
                                @foreach($product->images()->where('is_default',1)->get() as $image)
{{--@dd($image)--}}
                                <a href="{{asset('uploads/products/'.$image->name)}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                                <img class="zoom-img" src="{{asset('uploads/products/'.$image->name)}}">
                                    @endforeach
                            </a></div>
                        <div class="flexslider flexslider-thumb">
                            <ul class="previews-list slides">
                                @foreach($product->images()->where('is_default',0)->get() as $image)
                                <li><a href='{{asset('uploads/products/'.$image->name)}}' class='cloud-zoom-gallery'
                                       rel="useZoom: 'zoom1', smallImage: 'images/products/product-1.jpg' "><img
                                            src="{{asset('uploads/products/'.$image->name)}}" alt="Thumbnail 2"/></a></li>
                                @endforeach
{{--                                <li><a href='images/products/product-1.jpg' class='cloud-zoom-gallery'--}}
{{--                                       rel="useZoom: 'zoom1', smallImage: 'images/products/product-1.jpg' "><img--}}
{{--                                            src="images/products/product-1.jpg" alt="Thumbnail 1"/></a></li>--}}
{{--                                <li><a href='images/products/product-1.jpg' class='cloud-zoom-gallery'--}}
{{--                                       rel="useZoom: 'zoom1', smallImage: 'images/products/product-1.jpg' "><img--}}
{{--                                            src="images/products/product-1.jpg" alt="Thumbnail 1"/></a></li>--}}
{{--                                <li><a href='images/products/product-1.jpg' class='cloud-zoom-gallery'--}}
{{--                                       rel="useZoom: 'zoom1', smallImage: 'images/products/product-1.jpg' "><img--}}
{{--                                            src="images/products/product-1.jpg" alt="Thumbnail 2"/></a></li>--}}
{{--                                <li><a href='images/products/product-1.jpg' class='cloud-zoom-gallery'--}}
{{--                                       rel="useZoom: 'zoom1', smallImage: 'images/products/product-1.jpg' "><img--}}
{{--                                            src="images/products/product-1.jpg" alt="Thumbnail 2"/></a></li>--}}
                            </ul>
                        </div>

                        <!-- end: more-images -->

                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
                        <div class="product-details-area">
                            <div class="product-name">
                                <h1>{{$product->title}}</h1>
                            </div>
                            <div class="price-box">
                                <p class="special-price"><span class="price-label">Special Price</span> <span
                                        class="price"> ${{$product->price}} </span>
                                </p>
{{--                                <p class="old-price"><span class="price-label">Regular Price:</span> <span--}}
{{--                                        class="price"> $359.99 </span>--}}
{{--                                </p>--}}
                            </div>
                            <div class="ratings">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                        class="fa fa-star-o"></i>
                                </div>
                                @if($product->quantity>0)
                                <p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>
                                    @endif
                            </div>
                            <div class="short-description">
                                <h2>Quick Overview</h2>
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="product-color-size-area">
                                <div class="color-area">
                                    <h2 class="saider-bar-title">Color</h2>
                                    <div class="color">
                                        <ul>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="size-area">
                                    <h2 class="saider-bar-title">Size</h2>
                                    <div class="size">
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-variation">
                                <form action="#" method="post">
                                    <div class="cart-plus-minus">
                                        <label for="qty">Quantity:</label>
                                        <div class="numbers-row">
                                            <div
                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                            <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty"
                                                   name="qty">
                                            <div
                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                        </div>
                                    </div>
                                    <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span>
                                        <i class="fa fa-shopping-basket"></i>
                                        Add to Cart</span></button>
                                </form>
                            </div>
                            <div class="product-cart-option">
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product-view-->

            </div>
        </div>
        <a style="display: inline;" id="quick_view_popup-close" href="index.html"><i class="fas fa-window-close"></i></a>
    </div>
</div>
