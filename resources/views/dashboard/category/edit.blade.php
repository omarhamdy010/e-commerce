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
            <div class="col-md-12">
                <?php
                $catcount= count($categories);
                $subcount= count($subcategories);
                $parcount= count($parentcategories);

                ?>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{route('category.update',['category'=>$category->id])}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" value="{{$category->name}}" class="form-control" name="name"
                                       placeholder="Enter category name">
                            </div>
                            <div class="form-group">
                                <label>parent category</label>
                                <select class="form-control select2 parcat" name="parent_id" style="width: 100%;">
                                    @if( $category->parent_id == 0)
                                        <option value="{{0}}" selected>select category </option>
                                    @endif
                                    @foreach($parentcategories as $cat)
                                        <option value="{{$cat->id}}"{{$category->parent_id == $cat->id?'selected':''}}>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="image" name="image" >
                                        <br/>
                                        <img id="frame" src="{{$category->image_path}}" style=" width:100px;height:100px">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="pcategory">
                                <label>category order</label>
                                <select class="form-control select2" name="parentcategory_order" style="width: 100%;">
                                    @for($i=1 ; $i<= $parcount ; $i++)
                                        <option value="{{$i}}" {{$category->category_order == $i ?'selected' :''}}>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group" id="scategory">
                                <label>sub category order</label>
                                <select class="form-control select2" name="subcategory_order" style="width: 100%;">
                                    <option selected="selected" value="{{$subcount+1}}">{{$subcount+1}}</option>
                                    @for($i=1 ; $i<= $subcount ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

