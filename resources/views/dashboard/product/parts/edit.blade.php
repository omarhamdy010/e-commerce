<div class="col-12">
    <span class="error1"></span>
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

                            <div class="form-group">
                                    <textarea name="{{$local}}[description]" style="height: 200px;width: 670px"
                                              id="description" class="form-control"
                                              placeholder="{{$local=='ar'?'arabic description':'english description'}}">
                                              {{$product->translate($local)->description}}</textarea>
                            </div>
                        @endforeach

                        <div class="form-group">
                            <input type="file" class="form-control" name="images[]" placeholder="address"
                                   value="{{$images[0]}}" multiple>
                        </div>
                        <span class="images"></span>

                        <div class="form-group">
                            <label>quantity</label>
                            <input name="quantity"
                                   class="form-control value"
                                   value="{{$product->quantity}}"
                                   id="quantity">
                        </div>
                        <span class="quantity"></span>

                        <div class="form-group">
                            <label>category</label>
                            <select name="categories[]" multiple="multiple"
                                    class="form-control js-example-basic-single">
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}" {{in_array($category->id,$ids)? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <span class="categories"></span>

                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input name="price"
                                   class="form-control value"
                                   value="{{$product->price}}"
                                   id="price">
                        </div>
                        <span class="price"></span>

                        <div class="form-group">
                            <label>offer
                                <input name="offer" class="{{$product->offer!=null?'checked':''}} offer"
                                       {{$product->offer!=null?'checked':''}}
                                       type="checkbox">
                            </label>
                        </div>

                        @php  $types =['amount', 'fixed','percentage'];   @endphp

                        <div class="form-group" id="page" style="display: none">
                            <div class="form-control-sm">
                                <label>offer type</label>
                            </div>
                            <div class="btn-group btn-group-toggle form-group" data-toggle="buttons">
                                @foreach($types as $key=>$type )
                                    <label
                                        class="btn btn-outline-primary {{$type == optional($product->offer)->type?'active':''}}"
                                        id="option{{$key+1}}">
                                        <input type="radio" name="type" value="{{$type}}" id="{{$type}}"> {{$type}}
                                    </label>
                                @endforeach
                            </div>

                            <div>
                                <input type="number" class="form-control value"
                                       value="{{optional($product->offer)->value}}" min="1" name="value" id="value"
                                       placeholder="value">
                                <input type="number" class="form-control" min="0" name="bounce" id="bounce_value"
                                       value="{{optional($product->offer)->bounce}}"
                                       placeholder="bounce amount">
                            </div>

                            <div>
                                <input type="number" class="form-control" style="display: none"
                                       id="percentage_discount_price" placeholder="percentage price">
                                <input type="number" class="form-control" style="display: none"
                                       id="value_discount_price" placeholder="value price">
                            </div>

                            <div>
                                <input type="date" class="form-control"
                                       value="{{optional($product->offer)->start_date}}" name="start_date"
                                       placeholder="start Date">
                                <input type="date" class="form-control"
                                       value="{{optional($product->offer)->end_date}}" name="end_date"
                                       placeholder="end Date">
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

        var a = document.getElementById("bounce_value");
        var b = document.getElementById("value_discount_price");
        var c = document.getElementById("percentage_discount_price");

        if ($('#option1').hasClass('active')) {
            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "none";
        }
        if ($('#option2').hasClass('active')) {
            a.style.display = "none";
            b.style.display = "block";
            c.style.display = "none";
        }
        if ($('#option3').hasClass('active')) {
            a.style.display = "none";
            b.style.display = "none";
            c.style.display = "block";
        }
        $('#option1').on('click', function () {
            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "none";
        });
        $('#option2').on('click', function () {
            a.style.display = "none";
            b.style.display = "block";
            c.style.display = "none";
        });
        $('#option3').on('click', function () {
            a.style.display = "none";
            b.style.display = "none";
            c.style.display = "block";
        });
    });


    $(document).ready(function () {
        var quantity = $('#quantity').val();
        var price = $('#price').val();
        var value = $('#value').val();

        $('#value_discount_price').val((quantity * price) - value);

        $('#percentage_discount_price').val((quantity * price) - (quantity * price * value / 100));


        $('.value').on('keyup', function () {
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var value = $('#value').val();

            $('#value_discount_price').val((quantity * price) - value);
        });
        $('.value').on('keyup', function () {
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var value = $('#value').val();

            $('#percentage_discount_price').val((quantity * price) - (quantity * price * value / 100));
        });

    });
</script>
