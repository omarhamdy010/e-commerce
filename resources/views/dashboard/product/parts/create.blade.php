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
                                <textarea name="description" style="height: 200px;width: 670px" id="description" placeholder="description"></textarea>
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
                                <select name="categories[]" multiple="multiple" class="form-control js-example-basic-single">
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
                                       id="quantity">
                                @error('price')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>offer
                                <input name="offer" class="offer"  type="checkbox">
                                </label>
                            </div>

                            <div class="form-group" id="page" style="display: none">
                                <label>offer type</label>
                                <input name="offer_type" type="text"
                                       class="@error('offer_type') is-invalid @enderror form-control"
                                       value="{{old('offer_type')}}"
                                       id="offer_type">
                                @error('offer_type')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <label>discount value</label>
                                <input name="discount_value" type="number"
                                       class="@error('discount_value') is-invalid @enderror form-control"
                                       value="{{old('discount_value')}}"
                                       id="discount_value">
                                @error('discount_value')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <label>bounce</label>
                                <input name="bounce" type="number"
                                       class="@error('bounce') is-invalid @enderror form-control"
                                       value="{{old('bounce')}}"
                                       id="offer_type">
                                @error('bounce')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
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

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $('.js-example-basic-single').select2({
            placeholder: "Select a state",
            allowClear: true,
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });

    $('.offer').on('click',function () {
        var x = document.getElementById("page");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }    })

</script>


