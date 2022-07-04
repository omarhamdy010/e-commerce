@extends('site.layout.master')
@section('title')
    <title>Shop</title>
@endsection
@section('Shop')
    <div>
    @if(session('cart'))
        fdsnkaesghfid;fhaesdi dfsaujoasgyiasdgusa
        sadyigaduAJSDHAGSDFSDUJDGA;
        }SADGJSDAHKSDAF
        SADFJHSADGHGSD
        DSAHFASDHFSAD
        @foreach(session('cart') as $id => $details)
            <div class="row cart-detail">
                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                    <p>{{ $details['title'] }}</p>
                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                </div>
            </div>
        @endforeach
        @else
        fdsnkaesghfid;fhaesdi dfsaujoasgyiasdgusa
        sadyigaduAJSDHAGSDFSDUJDGA;
        }SADGJSDAHKSDAF
        SADFJHSADGHGSD
        DSAHFASDHFSAD

    @endif
    </div>
@endsection
