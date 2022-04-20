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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>

                        <div class="card-tools">

                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a class="btn btn-primary btn-sm" href="{{route('category.create')}}">Create</a>
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>parent category</th>
                            <th>image</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parentcategories as $category)
                            <tr>
                                <td>{{$category->category_order}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{($category->parent_id==null?'null' : $category->parent()->first()->name) }}</td>
                                <td><img src="{{$category->image_path}}"></td>
                                <td>
                                    <form method="post" action="{{route('category.destroy',['category'=>$category->id])}}">
                                        @method('delete')
                                        @csrf
                                        <a class="btn btn-primary btn-sm" href="{{route('category.edit',['category'=>$category->id])}}">EDIT</a>
                                        <button type="submit" class="btn btn-danger btn-sm" >DELETE</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- /.card-body -->
                </div>


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">sub Category</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>parent category</th>
                            <th>image</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subcategories as $category)
                            <tr>
                                <td>{{$category->category_order}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{($category->parent_id==null?'null' : $category->parent()->first()->name) }}</td>
                                <td><img src="{{$category->image_path}}"></td>
                                <td>
                                    <form method="post" action="{{route('category.destroy',['category'=>$category->id])}}">
                                        @method('delete')
                                        @csrf
                                    <a class="btn btn-primary btn-sm" href="{{route('category.edit',['category'=>$category->id])}}">EDIT</a>
                                        <button type="submit" class="btn btn-danger btn-sm" >DELETE</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
@endsection
