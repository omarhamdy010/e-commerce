<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                       href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                       aria-selected="true">Edit</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('product.update',['product'=>$product->id])}}"
                          id="update-category-form"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="_token" id="token2"
                               value="{{csrf_token()}}">
                        <input type="hidden" name="id" id="porduct_id"
                               value="{{$product->id}}">

                        <div class="card-body">
                            @foreach(config('translatable.locales') as $local)
                                <div class="form-group">
                                    <label>{{$local=='ar'?'arabic title':'english title'}}</label>
                                    <input type="text" value="{{$product->translate($local)->title}}"
                                           class="form-control title"
                                           name="{{$local}}[title]" id="title"
                                           placeholder="Enter product {{$local=='ar'?'arabic name':'english name'}}">
                                </div>
                                <span class="errors1"></span>

                                <textarea name="{{$local}}[description]" style="height: 200px;width: 670px"
                                          id="description" class="form-control"
                                          placeholder="{{$local=='ar'?'arabic description':'english description'}}">
                                          {{$product->translate($local)->description}}</textarea>
                            @endforeach

                            <div class="form-group">
                                <input type="file" class="form-control" name="images[]" placeholder="address"
                                       value="{{$images[0]}}" multiple>
                            </div>
                            <div class="form-group">
                                <label>quantity</label>
                                <input name="quantity"
                                       class="@error('quantity') is-invalid @enderror form-control"
                                       value="{{$product->quantity}}"
                                       id="quantity">
                                @error('quantity')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>category</label>
                                <select name="categories[]" multiple="multiple"
                                        class="form-control js-example-basic-single">
                                    @foreach($categories as $category)
<<<<<<< HEAD
                                        <option value="{{$category->id}}" {{in_array($category->id,$ids)? 'selected' : ''}}>{{$category->name}}</option>
=======
                                        <option
                                            value="{{$category->id}}" {{'category_id'== $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
>>>>>>> 3aa03afd107943efc6bab22f3da3188a48fba72f
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
                                       value="{{$product->price}}"
                                       id="price">
                                @error('price')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>offer
                                    <input name="offer" class="{{$product->offer!=null?'checked':''}} offer"
                                           {{$product->offer!=null?'checked':''}}
                                           type="checkbox">
                                </label>
                            </div>
                            <div class="form-group"
                                 id="page">
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
                                           value="{{optional($product->offer)->amount}}"
                                           placeholder="amount">
                                    <input type="number" class="form-control" min="1" name="bounce"
                                           style="display: none" id="amount_bounce"
                                           value="{{optional($product->offer)->bounce}}"
                                           placeholder="bounce amount">
                                    <input type="number" name="value" min="1" class="form-control" style="display: none"
                                           id="value_discount" value="{{optional($product->offer)->value}}"
                                           placeholder="value">
                                    <input type="number" name="percentage" min="1" class="form-control"
                                           style="display: none" value="{{optional($product->offer)->percentage}}"
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
        var catajax = $('.parcatajax').change(function (e) {

            e.preventDefault();

            var parent_id = catajax.val();

            $.ajax({
                'url': '/categoryorder?category_id=' + parent_id,
                'type': 'get',
                'data': {},
                success: function (response) { // What to do if we succeed
                    $('#category_order_count_ajax').val(response['order_category']);
                },
                error: function (response) {
                    alert('Error' + ' ' + response);
                }
            });
        });
    });

    $(document).ready(function () {
        if ($('.offer').hasClass('checked')) {
            var xx = document.getElementById("page");
            xx.style.display = "block";
        } else {
            var xy = document.getElementById("page");
            xy.style.display = "none";
        }

        $('.offer').on('click', function () {
            var x = document.getElementById("page");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        });
    });

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
        var quantity = $('#quantity').val();
        var price = $('#price').val();
        var value_discount = $('#value_discount').val();
        var percentage_discount = $('#percentage_discount').val();

        $('#value_discount_price').val((quantity * price) - value_discount);

        $('#percentage_discount_price').val((quantity * price) - (quantity * price * percentage_discount / 100));

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

            $('#percentage_discount_price').val((quantity * price) - (quantity * price * percentage_discount / 100));
        });
    });
</script>
