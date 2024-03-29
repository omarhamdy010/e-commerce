@foreach(\Illuminate\Support\Facades\Session::get('cart') as $cart)
    <li class="item odd"><a href="shopping_cart.html" title="Product title here" class="product-image">
            <img src="{{asset('uploads/products/'.$cart['image'])}}" alt="html Template" width="65"></a>
        <div class="product-details" id="recart">
            <a title="Remove This Item" class="remove-cart">
                <i class="fas fa-window-close"></i>
                <input class="id_cart" type="hidden" value="{{$cart['id']}}" id="delete">
            </a>
            <p class="product-name"><a href="shopping_cart.html">{{$cart['title']}}</a></p>
           <strong class="quantity_list">{{$cart['quantity']}}</strong> x <span class="price">{{$cart['price']}}</span></div>
    </li>
@endforeach

<script>
    $('.remove-cart').on('click', function () {
        var id =$(this).find('.id_cart').val();
        var url = 'deleteCart/' + id;
        $.ajax({
            url: url,
            method: "get",
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
            },
            success: function (count) {
                var total = count.total;
                var x = JSON.parse(count.count);
                if (x) {
                    var z = x;
                } else {
                    z = 0;
                }
                if (document.getElementById("cartNo")) {
                    document.getElementById("cartNo").innerHTML = `<i class="fas fa-shopping-cart px-2"></i> <span class=cart-total>${z}</span>`
                }

                // $('#recart').parent().remove();
                // $('.top-subtotal').find('.price_list_cart').remove();
                // $('.top-subtotal').append(`<span class="price_list">${total}</span>`);
                $('#rremove').parent().remove();
                $('#recart').parent().remove();
                $('.price_list_cart').html(count.total);
                $('#total_price_pro').remove();
                $('.append').append(`<strong id="total_price_pro">${count.total}</strong>`);
                // window.location.reload();
            }
        });
    });
</script>
