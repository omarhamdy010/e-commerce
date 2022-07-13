@extends('site.layout.master')
@section('title')
    <title>Cart</title>
@endsection
@section('content')
    <div id="page">
        <!-- Header -->
        <header id="top-search-div">

        </header>
        <!-- Main Container -->
        <section class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <div class="cart">

                        <div class="page-content page-order">
                            <div class="page-title">
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
                                            <th class="action"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody id="cartData">
                                        @if(\Illuminate\Support\Facades\Session::has('cart'))
                                            @foreach(\Illuminate\Support\Facades\Session::get('cart') as $cart)
                                                <tr>
                                                    <td class="cart_product"><a href="#"><img
                                                                src="{{asset('uploads/products/'.$cart['image'])}}"
                                                                alt="Product"></a></td>
                                                    <td class="cart_description"><p class="product-name"><a
                                                                href="#">{{$cart['description']}} </a></p>
                                                    <td class="title"><span>{{$cart['title']}}</span></td>
                                                    <td class="price"><span>{{$cart['price']}}</span></td>
                                                    <td class="qty"><input class="form-control input-sm" type="text"
                                                                           value="{{$cart['quantity']}}"></td>
                                                    <td class="action" id="rremove">
                                                        <a class="remove_item">
                                                            <i class="fas fa-window-close"></i>
                                                            <input type="hidden" value="{{$cart['id']}}" id="delete">

                                                        </a>
                                                    </td>
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
                                <div class="cart_navigation"><a class="continue-btn" href="shop_grid.html"><i
                                            class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a
                                        class="checkout-btn" href="checkout.html"><i class="fa fa-check"></i> Proceed to
                                        checkout</a></div>
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
            <input type="hidden" value="{{count(\Illuminate\Support\Facades\Session::get('cart',[]))}}"
                   id="session_data">
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
                                }else{
                                    z=0;
                                }
                                if (document.getElementById("cartNo")) {
                                    document.getElementById("cartNo").innerHTML = `<i class="fas fa-shopping-cart px-2"></i> <span class=cart-total>${z}</span>`
                                }
                                $('#rremove').parent().remove();
                                $('#recart').parent().remove();

                                // window.location.reload();
                            }
                        });
                });
            </script>
@endsection
