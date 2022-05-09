<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                       href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                       aria-selected="true">Create</a>
                </li>
            </ul>
        </div>
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
                    <form method="post" action="{{route('category.createcat')}}"
                          enctype="multipart/form-data" id="upload-cat-form">
                        <input type="hidden" name="_token" id="token2"
                               value="{{csrf_token()}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" value="{{old('name')}}" class="form-control nameajax"
                                       name="name" id="nameajax" placeholder="Enter category name">
                            </div>
                            <span class="errors1">

                            </span>
                            <div class="form-group">
                                <label>parent category</label>
                                <select class="form-control select2 parcatajax"
                                        id="catnameajax"
                                        name="parent_id"
                                        style="width: 100%;">
                                    <option selected="selected" value={{0}} >select category</option>
                                    @foreach($parentcategories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="imageajax" name="image">
                                        <span class="text-danger" id="image-input-error"></span>
                                        <br/>
                                        <img id="frameajax" src="{{asset('/uploads/category/default.png')}}"
                                             style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                        @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="pcategoryajax">
                                <label>category order</label>
                                <input name="category_order"
                                       class="@error('category_order') is-invalid @enderror form-control"
                                       value="{{old('category_order')}}"
                                       id="category_order_count_ajax">
                                @error('category_order')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-submit submit_create">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {

        $.ajax({
            'url': '/categoryorder?category_id=0',
            'type': 'get',
            'data': {},
            success: function (response) { // What to do if we succeed
                $('#category_order_count').val(response['order_category']);
                $('#category_order_count_ajax').val(response['order_category']);
            },
            error: function (response) {
                alert('Error' + ' ' + response);
            }
        });

        $.ajax({
            'url': '/categoryorder?category_id=0',
            'type': 'get',
            'data': {},
            success: function (response) { // What to do if we succeed
                $('#category_order_count_ajax').val(response['order_category']);
            },
            error: function (response) {
                alert('Error' + ' ' + response);
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });
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
                alert('Error' + ' '  + response);
            }
        });
    });

    $('#imageajax').change(function () {
        $("#frameajax").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#frameajax").attr('src', window.URL.createObjectURL(this.files[i]));
        }
    });


</script>

