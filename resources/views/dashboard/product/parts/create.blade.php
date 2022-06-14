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

                            @foreach(config('translatable.locales') as $local)
                                <div class="form-group">
                                    <label>{{$local=='ar'?'arabic title':'english title'}}</label>
                                    <input type="text" value="{{old($local.'[.title]')}}" class="form-control title"
                                           name="{{$local}}[title]" id="title"
                                           placeholder="Enter product {{$local=='ar'?'arabic name':'english name'}}">
                                </div>
                                <span class="errors1"></span>

                                <textarea name="{{$local}}[description]" style="height: 200px;width: 670px"
                                          id="description"
                                          value="{{old($local.'[.description]')}}"
                                          class="form-control"
                                          placeholder="{{$local=='ar'?'arabic description':'english description'}}"></textarea>
                            @endforeach

                            <div class="form-group">
                                <input required type="file" class="form-control" name="images[]" placeholder="address" id="images"
                                       value="{{old('images[]')}}"
                                       multiple>
                            </div>
                            <div class="form-group">
                                <label>quantity</label>
                                <input name="quantity" class="@error('quantity') is-invalid @enderror form-control"
                                       value="{{old('quantity')}}" id="quantity">
                                @error('quantity')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category">category</label>
                                <select name="categories[]" multiple="multiple" id="category_SELECT2" class="select2-multiple form-control">
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
{{--                                    <input type="number" class="form-control" min="1" name="amount"--}}
{{--                                           style="display: none" id="amount_value"--}}
{{--                                           placeholder="amount">--}}
{{--                                    <input type="number" class="form-control" min="1" name="bounce"--}}
{{--                                           style="display: none" id="amount_bounce"--}}
{{--                                           placeholder="bounce amount">--}}
{{--                                    <input type="number" name="value" min="1" class="form-control" style="display: none"--}}
{{--                                           id="value_discount"--}}
{{--                                           placeholder="value">--}}
{{--                                    <input type="number" name="percentage" min="1" class="form-control"--}}
{{--                                           style="display: none"--}}
{{--                                           id="percentage_discount" placeholder="percentage">--}}
                                    @foreach($type['type'] as $contact)
                                        <option value="{{$contact}}" >{{ $contact}}</option>
                                    @endforeach
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

    // $(document).ready(function (){
    //     $('#category_SELECT2').select2();
    // })

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

            $('#percentage_discount_price').val((quantity * price) - (quantity * price * percentage_discount / 100));
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


