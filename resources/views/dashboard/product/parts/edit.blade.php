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
                        <div class="card-body">
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" value="{{$product->title}}" class="form-control title"
                                       name="title" id="title" placeholder="Enter product name">
                            </div>
                            <span class="errors1">

                            </span>

                            <div class="form-group">
                                <textarea name="description" style="height: 200px;width: 670px" id="description"
                                          class="form-control"
                                          placeholder="description">{{$product->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <input required type="file" class="form-control" name="images[]" placeholder="address"
                                       multiple>
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

                                            <option value="{{$category->id}}"
{{--                                                {{ == $category->id ?'selected':''}}--}}
                                            >{{$category->name}}</option>


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
                                       id="quantity">
                                @error('price')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>offer
                                    <input name="offer" class="offer" {{$offers ?'checked':''}} type="checkbox">
                                </label>
                            </div>
                            @if($offers!=null)
                                <div class="form-group" id="page" style="display: none" >
                                    <label>offer type</label>
                                    <input name="offer_type" type="text"
                                           class="@error('offer_type') is-invalid @enderror form-control"
                                           value="{{$offers->offer_type}}"
                                           id="offer_type">
                                    @error('offer_type')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <label>discount value</label>
                                    <input name="discount_value" type="number"
                                           class="@error('discount_value') is-invalid @enderror form-control"
                                           value="{{$offers->discount_value}}"
                                           id="discount_value">
                                    @error('discount_value')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <label>bounce</label>
                                    <input name="bounce" type="number"
                                           class="@error('bounce') is-invalid @enderror form-control"
                                           value="{{$offers->bounce}}"
                                           id="offer_type">
                                    @error('bounce')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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

    $('.offer').on('click', function () {
        var x = document.getElementById("page");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    });

</script>
