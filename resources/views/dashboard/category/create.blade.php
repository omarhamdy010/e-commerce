{{--@extends('dashboard.layouts.master')--}}

{{--@section('content')--}}
{{--    <div class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h1 class="m-0">Dashboard</h1>--}}
{{--                </div><!-- /.col -->--}}
{{--                <div class="col-sm-6">--}}
{{--                    <ol class="breadcrumb float-sm-right">--}}
{{--                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active">Category</li>--}}
{{--                    </ol>--}}
{{--                </div><!-- /.col -->--}}
{{--            </div><!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </div>--}}
{{--    <!-- /.content-header -->--}}

{{--    <!-- Main content -->--}}

{{--    <section class="content">--}}
{{--        <div class="row">--}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif

            <div class="col-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                   href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                   aria-selected="true">Create</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                   href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                   aria-selected="false">Create ajax</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                 aria-labelledby="custom-tabs-one-home-tab">
                                <form method="post" action="{{route('category.store')}}"
                                      enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>name</label>
                                            <input type="text" value="{{old('name')}}" class="@error('name') is-invalid @enderror form-control"
                                                   name="name" placeholder="Enter category name">
                                            @error('name')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>parent category</label>
                                            <select class="@error('parent_id') is-invalid @enderror form-control select2 parcat" name="parent_id"
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
                                                    <input type="file" id="image" name="image">
                                                    <br/>
                                                    <img id="frame" src="{{asset('/uploads/category/default.png')}}"
                                                            style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;
">
                                                </div>
                                                @error('image')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group" id="pcategory">
                                            <label>category order</label>
                                            <input name="category_order" class="@error('category_order') is-invalid @enderror form-control" value=""
                                                    id="category_order_count">
                                        </div>
                                        @error('category_order')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-one-profile-tab">

                                <form method="post" action="{{route('category.createcat')}}"
                                    enctype="multipart/form-data" id="upload-cat-form">
                                    <input type="hidden" name="_token" id="token2"
                                        value="{{csrf_token()}}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>name</label>
                                            <input type="text" value="{{old('name')}}" class="form-control"
                                                    name="name" id="nameajax" placeholder="Enter category name">
                                        </div>

                                        <div class="form-group">
                                            <label>parent category</label>
                                            <select class="@error('parent_id') is-invalid @enderror form-control select2 parcatajax" id="catnameajax"
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
                                            <input name="category_order" class="@error('category_order') is-invalid @enderror form-control" value=""
                                                    id="category_order_count_ajax">
                                            @error('category_order')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
{{--@section('js')--}}
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
            var cat = $('.parcat').change(function (e) {

                e.preventDefault();
                var parent_id = cat.val();
                $.ajax({
                    'url': '/categoryorder?category_id=' + parent_id,
                    'type': 'get',
                    'data': {},
                    success: function (response) { // What to do if we succeed
                        $('#category_order_count').val(response['order_category']);
                        var resultData = response.data;
                        alert(resultData);
                    },
                    error: function (response) {
                        alert('Error' + ' ' + response);
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
                        alert('Error' + ' ' + response);
                    }
                });

            });
            $('#image').change(function () {
                $("#frame").html('');
                for (var i = 0; i < $(this)[0].files.length; i++) {
                    // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
                    $("#frame").attr('src', window.URL.createObjectURL(this.files[i]));
                }
            });
            $('#imageajax').change(function () {
                $("#frameajax").html('');
                for (var i = 0; i < $(this)[0].files.length; i++) {
                    // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
                    $("#frameajax").attr('src', window.URL.createObjectURL(this.files[i]));
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#upload-cat-form').submit(function (e) {
                e.preventDefault();
                console.log('dsfsdfasd');
                let formData = new FormData(this);
                $('#image-input-error').text('');

                $.ajax({
                    type: 'POST',
                    url: `/categoryajax`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        if (response) {
                            this.reset();
                            console.log('Image has been uploaded successfully');
                        }
                    },
                    error: function (response) {
                        console.log(response);
                        $('#image-input-error').text(response.responseJSON.errors.file);
                    }
                });
            });


            $('#update-category-form').submit(function (e) {
                e.preventDefault();
                let formData = new FormData(this);
                $('#image-error').text('');
                var id = $('#catid').val();
                $.ajax({
                    type: 'POST',
                    url: `/updateAJAX/`+id,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        if (response) {
                            this.reset();
                            console.log('Image has been uploaded successfully');
                        }
                    },
                    error: function (response) {
                        console.log(response);
                        $('#image-input-error').text(response.responseJSON.errors.file);
                    }
                });
            });


        });

    </script>
{{--@endsection--}}

