<div class="col-12">
    <div class="card card-primary card-tabs">

        <span class="error1"></span>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('product.store')}}"
                          enctype="multipart/form-data" id="upload-cat-form">
                        <input type="hidden" name="_token" id="token2"
                               value="{{csrf_token()}}">
                        <div class="card-body">

                            @foreach(config('translatable.locales') as$key=>$local)
                                <div class="form-group">
                                    <label>{{$local=='ar'?'arabic title':'english title'}}</label>
                                    <input type="text" value="{{old($local.'[.title]')}}" class="form-control title"
                                           name="{{$local}}[title]" id="title" data-validation="required"
                                           placeholder="Enter product {{$local=='ar'?'arabic name':'english name'}}">
                                </div>
                                <span class="{{$local}}_title"></span>

                                <div class="form-group">
                                <textarea name="{{$local}}[description]" style="height: 200px;width: 670px"
                                          id="description" data-validation="required"
                                          value="{{old($local.'[.description]')}}" class="form-control"
                                          placeholder="{{$local=='ar'?'arabic description':'english description'}}"></textarea>
                                </div>
                                <span class="{{$local}}_description"></span>
                            @endforeach

                            <div class="form-group">
                                <input type="file" class="form-control" name="images[]" placeholder="address"
                                       id="images"
                                       value="{{old('images[]')}}" data-validation="required"
                                       multiple>
                            </div>
                            <span class="images"></span>

                            <div class="form-group">
                                <label>quantity</label>
                                <input name="quantity" class="form-control value" data-validation="required"
                                       type="number" value="{{old('quantity')}}" id="quantity">
                            </div>
                            <span class="quantity"></span>

                            <div class="form-group">
                                <label for="category">category</label>
                                <select name="categories[]" multiple="multiple" id="select2-dropdown"
                                        data-validation="required" class="select2-multiple form-control">
                                    @foreach($Categories as $category)
                                        <option
                                            value="{{$category->id}}" {{old('category_id') == $category->id? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="categories"></span>

                            <div class="form-group">
                                <label>price</label>
                                <input name="price" type="number"
                                       class="form-control value" data-validation="required"
                                       value="{{old('price')}}"
                                       id="price">
                            </div>
                            <span class="price"></span>

                            <div class="form-group">
                                <label>offer
                                    <input name="offer" class="offer" type="checkbox">
                                </label>
                            </div>
                            @php  $types =['amount', 'fixed','percentage'];   @endphp

                            <div class="form-group" id="page" style="display: none">
                                <div class="form-control-sm">
                                    <label>offer type</label>
                                </div>
                                <div class="btn-group btn-group-toggle form-group" data-toggle="buttons">
                                    @foreach($types as $key=>$type )
                                        <label class="btn btn-outline-primary {{$type=='percentage'?'active':''}}"
                                               id="option{{$key+1}}">
                                            <input type="radio" name="type" value="{{$type}}" id="{{$type}}"> {{$type}}
                                        </label>
                                    @endforeach
                                </div>
                                <div>
                                    <input type="number" class="form-control value" min="1" name="value"
                                           id="value" placeholder="value">
                                    <input type="number" class="form-control" min="1" name="bounce" id="bounce_value"
                                           placeholder="bounce amount">
                                </div>

                                <div>
                                    <input type="text" class="form-control" style="display: none"
                                           id="percentage_value_price" placeholder="percentage price">
                                    <input type="text" class="form-control" style="display: none"
                                           id="value_discount_price" placeholder="value price">
                                </div>


                                <div>
                                    <input type="date" class="form-control" name="start_date" placeholder="start Date">
                                    <input type="date" class="form-control" name="end_date" placeholder="end Date">
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
    $.validate({
        ignore: 'input[type=hidden]',
        modules: 'date, security',
        lang: "ar",
        validateOnEvent: true
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

        // var x = document.getElementById("amount_value");
        // var y = document.getElementById("fixed_value");
        // var z = document.getElementById("percentage_value");
        var a = document.getElementById("bounce_value");
        var b = document.getElementById("value_discount_price");
        var c = document.getElementById("percentage_value_price");

        if ($('#option1').hasClass('active')) {
            // x.style.display = "block";
            a.style.display = "block";
            // y.style.display = "none";
            b.style.display = "none";
            // z.style.display = "none";
            c.style.display = "none";
        }
        if ($('#option2').hasClass('active')) {
            // x.style.display = "none";
            a.style.display = "none";
            // y.style.display = "block";
            b.style.display = "block";
            // z.style.display = "none";
            c.style.display = "none";
        }
        if ($('#option3').hasClass('active')) {
            // x.style.display = "none";
            a.style.display = "none";
            // y.style.display = "none";
            b.style.display = "none";
            // z.style.display = "block";
            c.style.display = "block";
        }
        $('#option1').on('click', function () {
            // x.style.display = "block";
            a.style.display = "block";
            // y.style.display = "none";
            b.style.display = "none";
            // z.style.display = "none";
            c.style.display = "none";
        });
        $('#option2').on('click', function () {
            // x.style.display = "none";
            a.style.display = "none";
            // y.style.display = "block";
            b.style.display = "block";
            // z.style.display = "none";
            c.style.display = "none";
        });
        $('#option3').on('click', function () {
            // x.style.display = "none";
            a.style.display = "none";
            // y.style.display = "none";
            b.style.display = "none";
            // z.style.display = "block";
            c.style.display = "block";
        });
    });

    $(document).ready(function () {
        $('.value').on('keyup', function () {
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var value_discount = $('#value').val();

            $('#value_discount_price').val((quantity * price) - value_discount);
        });
        $('.value').on('keyup', function () {
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var percentage_value = $('#value').val();

            $('#percentage_value_price').val((quantity * price) - (quantity * price * percentage_value / 100));
        });
    });

    $(document).ready(function (e) {
        $('#images').change(function () {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        });
    });

</script>
