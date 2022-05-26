<div class="col-12">
    <div class="card card-primary card-tabs">

        <div class="card-body">
            @if(\Illuminate\Support\Facades\Session::has('success'))

                <div class="alert alert-success">

                    {{ \Illuminate\Support\Facades\Session::get('success') }}

                    @php

                        \Illuminate\Support\Facades\Session::forget('success');

                    @endphp

                </div>

            @endif
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('product.store')}}"
                          enctype="multipart/form-data" id="upload-cat-form">
                        <input type="hidden" name="_token" id="token2"
                               value="{{csrf_token()}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" value="{{old('title')}}" class="form-control title"
                                       name="title" id="title" placeholder="Enter product name">
                            </div>
                            <span class="errors1">

                            </span>

                            <div class="form-group">
                                <textarea name="description" style="height: 200px;width: 670px" id="description"
                                          class="form-control" placeholder="description"></textarea>
                            </div>

                            <div class="form-group">
                                <input required type="file" class="form-control" name="images[]" placeholder="address"
                                       multiple>
                            </div>

                            <div class="form-group">
                                <label>quantity</label>
                                <input name="quantity"
                                       class="@error('quantity') is-invalid @enderror form-control"
                                       value="{{old('quantity')}}"
                                       id="quantity">
                                @error('quantity')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>category</label>
                                <select name="categories[]" multiple="multiple"
                                        class="form-control js-example-basic-single">
                                    <option selected="selected" value={{0}} >select category</option>
                                    @foreach($Categories as $category)
                                        <option
                                            value="{{$category->id}}" {{old('category_id') == $category->id? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('categories')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>price</label>
                                <input name="price"
                                       class="@error('price') is-invalid @enderror form-control"
                                       value="{{old('price')}}"
                                       id="price">
                                @error('price')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>offer
                                    <input name="offer" class="offer" type="checkbox">
                                </label>
                            </div>

                            <div class="form-group" id="page" style="display: none">
                                <div class="form-control-sm">
                                    <label>offer type</label>
                                </div>
                                <div class="btn-group btn-group-toggle form-group" data-toggle="buttons">
                                    <label class="btn btn-outline-primary active" id="option1">
                                        <input type="radio" id="amount" checked> amount
                                    </label>
                                    <label class="btn btn-outline-primary " id="option2">
                                        <input type="radio" id="value"> value
                                    </label>
                                    <label class="btn btn-outline-primary" id="option3">
                                        <input type="radio" id="percentage"> percentage
                                    </label>
                                </div>

                                <div>
                                    <input type="number" class="form-control" min="1" name="amount"
                                           style="display: none" id="amount_value"
                                           placeholder="amount">
                                    <input type="number" class="form-control" min="1" name="bounce"
                                           style="display: none" id="amount_bounce"
                                           placeholder="bounce amount">
                                    <input type="number" name="value" min="1" class="form-control" style="display: none"
                                           id="value_discount"
                                           placeholder="value">
                                    <input type="number" name="percentage" min="1" class="form-control"
                                           style="display: none"
                                           id="percentage_discount" placeholder="percentage">
                                </div>

                                <div>
                                    <input type="text" class="form-control" style="display: none"
                                           id="percentage_discount_price" placeholder="percentage price">
                                    <input type="text" class="form-control" style="display: none"
                                           id="value_discount_price" placeholder="value price">
                                </div>

                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });

        $('.js-example-basic-single').select2({
            placeholder: "Select a state",
            allowClear: true,
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });

    $('.offer').on('click', function () {
        var x = document.getElementById("page");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    });
    //offer
    $(document).ready(function () {
        var x = document.getElementById("amount_value");
        var y = document.getElementById("value_discount");
        var z = document.getElementById("percentage_discount");
        var a = document.getElementById("amount_bounce");
        var b = document.getElementById("value_discount_price");
        var c = document.getElementById("percentage_discount_price");
        if ($('#option1').hasClass('active')) {
            x.style.display = "block";
            a.style.display = "block";
            y.style.display = "none";
            b.style.display = "none";
            z.style.display = "none";
            c.style.display = "none";
        }
        if ($('#option2').hasClass('active')) {
            x.style.display = "none";
            a.style.display = "none";
            y.style.display = "block";
            b.style.display = "block";
            z.style.display = "none";
            c.style.display = "none";
        }
        if ($('#option3').hasClass('active')) {
            x.style.display = "none";
            a.style.display = "none";
            y.style.display = "none";
            b.style.display = "none";
            z.style.display = "block";
            c.style.display = "block";
        }
        $('#option1').on('click', function () {
            x.style.display = "block";
            a.style.display = "block";
            y.style.display = "none";
            b.style.display = "none";
            z.style.display = "none";
            c.style.display = "none";
        });
        $('#option2').on('click', function () {
            x.style.display = "none";
            a.style.display = "none";
            y.style.display = "block";
            b.style.display = "block";
            z.style.display = "none";
            c.style.display = "none";
        });
        $('#option3').on('click', function () {
            x.style.display = "none";
            a.style.display = "none";
            y.style.display = "none";
            b.style.display = "none";
            z.style.display = "block";
            c.style.display = "block";
        });
    });
    $(document).ready(function () {


        $('#value_discount').on('change', function () {
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var value_discount = $('#value_discount').val();

            $('#value_discount_price').val((quantity * price) - value_discount);
        });

        $('#percentage_discount').on('change', function () {
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var percentage_discount = $('#percentage_discount').val();

            $('#percentage_discount_price').val((quantity * price) - (quantity * price*percentage_discount/100));
        });
    });
</script>


