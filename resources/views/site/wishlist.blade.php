@extends('site.layout.master')
@section('title')
    <title>Wishlist</title>
@endsection

@section('content')
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-main col-sm-9 col-xs-12">
                    <div class="my-account">
                        <div class="page-title">
                            <h2>My Wishlist</h2>
                        </div>
                        <div class="wishlist-item table-responsive">
                            <table class="col-md-12">
                                <thead>
                                <tr>
                                    <th class="th-delate">Remove</th>
                                    <th class="th-product">Images</th>
                                    <th class="th-details">Product Name</th>
                                    <th class="th-price">Unit Price</th>
                                    <th class="th-total th-add-to-cart">Add to Cart</th>
                                </tr>
                                </thead>
                                <tbody id="wishlist-prod">

                                @if(\Illuminate\Support\Facades\Session::has('wishlist'))
                                    @foreach(\Illuminate\Support\Facades\Session::get('wishlist') as  $wishlist)
                                        <tr>
                                            <td id="delate_tr">
                                                <a class="delete_ittem" href="#">X</a>
                                                <input type="hidden" value="{{$wishlist['id']}}" id="delete">
                                            </td>
                                            <td class="th-product"><a href="#"><img
                                                        src="{{asset('uploads/products/'.$wishlist['image'])}}"
                                                        alt="cart"></a></td>
                                            <td class="th-details"><h2><a href="#">{{$wishlist['title']}}</a></h2></td>
                                            <td class="th-price">{{$wishlist['price']}}EGP</td>
                                            <th class="td-adcartd-to-">
                                                <a href="#" data-id="{{$wishlist['id']}}" class="add-to-cart"> Add to Cart</a></th>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <input type="hidden" value="{{count(\Illuminate\Support\Facades\Session::get('cart',[]))}}"
                                   id="session_data">
                            <a href="checkout.html" class="all-cart">Add all to cart</a></div>
                    </div>
                </div>
                {{--                <aside class="right sidebar col-sm-3 col-xs-12">--}}
                {{--                    <div class="sidebar-account block">--}}
                {{--                        <div class="sidebar-bar-title">--}}
                {{--                            <h3>My Account</h3>--}}
                {{--                        </div>--}}
                {{--                        <div class="block-content">--}}
                {{--                            <ul>--}}
                {{--                                <li><a>Account Dashboard</a></li>--}}
                {{--                                <li><a href="#">Account Information</a></li>--}}
                {{--                                <li><a href="#">Address Book</a></li>--}}
                {{--                                <li><a href="#">My Orders</a></li>--}}
                {{--                                <li><a href="#">Billing Agreements</a></li>--}}
                {{--                                <li><a href="#">Recurring Profiles</a></li>--}}
                {{--                                <li><a href="#">My Product Reviews</a></li>--}}
                {{--                                <li><a href="#">My Tags</a></li>--}}
                {{--                                <li class="current"><a href="#">My Wishlist</a></li>--}}
                {{--                                <li><a href="#">My Downloadable</a></li>--}}
                {{--                                <li class="last"><a href="#">Newsletter Subscriptions</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="compare block">--}}
                {{--                        <div class="sidebar-bar-title">--}}
                {{--                            <h3>Compare Products (2)</h3>--}}
                {{--                        </div>--}}
                {{--                        <div class="block-content">--}}
                {{--                            <ol id="compare-items">--}}
                {{--                                <li class="item"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a> <a href="#" class="product-name">Vestibulum porta tristique porttitor.</a> </li>--}}
                {{--                                <li class="item"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a> <a href="#" class="product-name">Lorem ipsum dolor sit amet</a> </li>--}}
                {{--                            </ol>--}}
                {{--                            <div class="ajax-checkout">--}}
                {{--                                <button type="submit" title="Submit" class="button button-compare"> <span> Compare</span></button>--}}
                {{--                                <button type="submit" title="Submit" class="button button-clear"> <span> Clear All</span></button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </aside>--}}
            </div>
        </div>
    </section>
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
                    $('#delate_tr').parent().remove();
                    // window.location.reload();
                }
            });
        });

    </script>
@endsection
