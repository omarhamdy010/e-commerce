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
{{--                        <li class="breadcrumb-item active">Category edit</li>--}}
{{--                    </ol>--}}
{{--                </div><!-- /.col -->--}}
{{--            </div><!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </div>--}}
{{--    <!-- /.content-header -->--}}

{{--    <!-- Main content -->--}}

{{--    <section class="content">--}}
{{--        <div class="row">--}}
            <div class="col-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                   href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                   aria-selected="true">Edit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                   href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                   aria-selected="false">Edit ajax</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                 aria-labelledby="custom-tabs-one-home-tab">
                                <form method="post" action="{{route('category.update',['category'=>$category->id])}}"
                                      enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>name</label>
                                            <input type="text" value="{{$category->name}}" class="form-control"
                                                   name="name"
                                                   placeholder="Enter category name">
                                        </div>
                                        {{--                                         name--}}
                                        <div class="form-group">
                                            <label>parent category</label>
                                            <select class="form-control select2 parcat" name="parent_id"
                                                    style="width: 100%;">
                                                @if( $category->parent_id == 0)
                                                    <option value="{{0}}" selected>select category</option>
                                                @endif
                                                @foreach($parentcategories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{--                                        parent id--}}
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
                                            </div>
                                        </div>
                                        {{--                                            image--}}
                                        <div class="form-group" id="pcategory">
                                            <label>category order</label>
                                            <input name="category_order" class="form-control" value=""
                                                   id="category_order_count">
                                        </div>
                                        <!-- /.category order -->
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                 aria-labelledby="custom-tabs-one-profile-tab">

                                <form method="post" action="{{route('category.updateAJAX',$category->id)}}" id="update-category-form" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>name</label>
                                            <input type="text" value="{{$category->name}}" class="form-control"
                                                   name="name"
                                                   placeholder="Enter category name">
                                        </div>

                                        <div class="form-group">
                                            <label>parent category</label>
                                            <select class="form-control select2 parcatajax" name="parent_id"
                                                    style="width: 100%;">
                                                @if( $category->parent_id == 0)
                                                    <option value="{{0}}" selected>select category</option>
                                                @endif
                                                @foreach($parentcategories as $cat)
                                                    <option
                                                        value="{{$cat->id}}"{{$category->parent_id == $cat->id?'selected':''}}>{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">image</label>
                                            <div class="input-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" id="imageajax" name="image">
                                                        <span class="text-danger" id="image-error"></span>
                                                        <br/>
                                                        <img id="frameajax" src="{{$category->image_path}}"
                                                             style=" width:100px;height:100px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group" id="parcatajax">
                                            <label>category order</label>
                                            <input name="category_order" class="form-control"
                                                   value="{{$category->category_order}}"
                                                   id="category_order_count_ajax">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <input type="hidden" class="form-control" value="{{$category->id}}" id="catid">
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
