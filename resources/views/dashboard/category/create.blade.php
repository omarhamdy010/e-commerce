@extends('dashboard.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
        <div class="row">
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
                                <?php
                                $catcount = count($categories);
                                $subcount = count($subcategories);
                                $parcount = count($parentcategories);

                                ?>
{{--                                <div class="card card-primary">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h3 class="card-title">Create Category</h3>--}}
{{--                                    </div>--}}
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form method="post" action="{{route('category.store')}}"
                                          enctype="multipart/form-data">
                                        @method('post')
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" value="{{old('name')}}" class="form-control"
                                                       name="name"
                                                       placeholder="Enter category name">
                                            </div>
                                            <div class="form-group">
                                                <label>parent category</label>
                                                <select class="form-control select2 parcat" name="parent_id"
                                                        style="width: 100%;">
                                                    <option selected="selected" value={{0}} >select category</option>
                                                    @foreach($parentcategories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
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
                                                </div>
                                            </div>

                                            <div class="form-group" id="pcategory">
                                                <label>category order</label>
                                                <select class="form-control select2" name="parentcategory_order"
                                                        style="width: 100%;">
                                                    <option selected="selected"
                                                            value="{{$parcount+1}}">{{$parcount+1}}</option>
                                                    {{--                                    @for($i=1 ; $i<= $parcount ; $i++)--}}
                                                    {{--                                        <option value="{{$i}}">{{$i}}</option>--}}
                                                    {{--                                    @endfor--}}
                                                </select>
                                            </div>

                                            <div class="form-group" id="scategory">
                                                <label>sub category order</label>
                                                <select class="form-control select2" name="subcategory_order"
                                                        style="width: 100%;">
                                                    <option selected="selected"
                                                            value="{{$subcount+1}}">{{$subcount+1}}</option>
                                                    {{--                                    @for($i=1 ; $i<= $subcount ; $i++)--}}
                                                    {{--                                        <option value="{{$i}}">{{$i}}</option>--}}
                                                    {{--                                    @endfor--}}
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
{{--                                </div>--}}
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                 aria-labelledby="custom-tabs-one-profile-tab">
                                <form method="post" action="{{route('category.createcat')}}" enctype="multipart/form-data">
                                    {{ method_field('post') }}
                                    <input type="hidden" name="_token" id="token2"
                                           value="{{csrf_token()}}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>name</label>
                                            <input type="text" value="{{old('name')}}" class="form-control"
                                                   name="name" id="nameajax"
                                                   placeholder="Enter category name">
                                        </div>
                                        <div class="form-group">
                                            <label>parent category</label>
                                            <select class="form-control select2 parcatajax" id="catnameajax" name="parent_id"
                                                    style="width: 100%;">
                                                <option selected="selected" value={{0}} >select category</option>
                                                @foreach($parentcategories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" id="imageajax" name="image">
                                                    <br/>
                                                    <img id="frameajax" src="{{asset('/uploads/category/default.png')}}"
                                                         style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;
">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group" id="pcategoryajax">
                                            <label>category order</label>
                                            <select class="form-control select2" name="parentcategory_order"
                                                    style="width: 100%;">
                                                <option selected="selected"
                                                        value="{{$parcount+1}}">{{$parcount+1}}</option>
                                                {{--                                    @for($i=1 ; $i<= $parcount ; $i++)--}}
                                                {{--                                        <option value="{{$i}}">{{$i}}</option>--}}
                                                {{--                                    @endfor--}}
                                            </select>
                                        </div>

                                        <div class="form-group" id="scategoryajax">
                                            <label>sub category order</label>
                                            <select class="form-control select2" name="subcategory_order"
                                                    style="width: 100%;">
                                                <option selected="selected"
                                                        value="{{$subcount+1}}">{{$subcount+1}}</option>
                                                {{--                                    @for($i=1 ; $i<= $subcount ; $i++)--}}
                                                {{--                                        <option value="{{$i}}">{{$i}}</option>--}}
                                                {{--                                    @endfor--}}
                                            </select>
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

        </div>
    </section>
@endsection

