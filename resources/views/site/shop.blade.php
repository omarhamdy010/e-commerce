@extends('site.layout.master')
@section('title')
    <title>Shop</title>
@endsection

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('cart'))
        @foreach(\Illuminate\Support\Facades\Session::get('cart') as  $details)
            <div>
                <div class="row cart-detail">
                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                        <p>{{ $details['title'] }}</p>
                        <span class="price text-info"> ${{ $details['price'] }}</span>
                        <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
