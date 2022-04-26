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
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                            <!-- <a class="btn btn-primary btn-sm" href="{{ route('category.create') }}">Create</a> -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#myModal">Create</button>

                            <input type="text" name="search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-hover data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>parent category</th>
                            <th>image</th>
                            <th>action</th>
                            <th>category order</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @foreach ($categories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->parent_id == 0 ? 'main category' : $category->parent()->first()->name }}
                            </td>
                            <td><img src="{{ $category->image_path }}" style="height: 100px;width: 100px"></td>
                            <td>
                                @if (count($category->children()->get()) > 0)
                                 <a class="btn btn-primary btn-sm" href="{{ route('category.edit', ['category' => $category->id]) }}">EDIT</a> -->
                                <!-- <a type="button" class="btn btn-primary btn-sm"
                                       href ="{{ route('category.edit', ['category' => $category->id]) }}">Edit</a>
                                <button onclick="deleteConfirmation({{ $category->id }})"
                                    class="btn btn-danger btn-sm">DELETE</button>
                                <input type="hidden" value="{{ csrf_token() }}" id="_token">
                                @else
                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                
                                    <a type="button" class="btn btn-primary btn-sm"
                                       href ="{{ route('category.edit', ['category' => $category->id]) }}">Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                </form>
                                @endif
                            </td>
                            <td>{{ $category->category_order }}</td>
                        </tr>
                        @endforeach --> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                                href="#custom-tabs-one-home" role="tab"
                                                aria-controls="custom-tabs-one-home" aria-selected="true">Create</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-one-profile" role="tab"
                                                aria-controls="custom-tabs-one-profile" aria-selected="false">Create
                                                ajax</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-home-tab">
                                            <form method="post" action="{{ route('category.store') }}"
                                                enctype="multipart/form-data">
                                                @method('post')
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>name</label>
                                                        <input type="text" value="{{ old('name') }}"
                                                            class="form-control" name="name"
                                                            placeholder="Enter category name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>parent category</label>
                                                        <select class="form-control select2 parcat" name="parent_id"
                                                            style="width: 100%;">
                                                            <option selected="selected" value={{ 0 }}>
                                                                select category</option>
                                                            @foreach ($parentcategories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">image</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" id="image" name="image">
                                                                <br />
                                                                <img id="frame"
                                                                    src="{{ asset('/uploads/category/default.png') }}"
                                                                    style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" id="pcategory">
                                                        <label>category order</label>
                                                        <input name="category_order" class="form-control" value=""
                                                            id="category_order_count">
                                                    </div>

                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-profile-tab">

                                            <form method="post" action="{{ route('category.createcat') }}"
                                                enctype="multipart/form-data" id="upload-cat-form">
                                                <input type="hidden" name="_token" id="token2"
                                                    value="{{ csrf_token() }}">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>name</label>
                                                        <input type="text" value="{{ old('name') }}"
                                                            class="form-control" name="name" id="nameajax"
                                                            placeholder="Enter category name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>parent category</label>
                                                        <select class="form-control select2 parcatajax" id="catnameajax"
                                                            name="parent_id" style="width: 100%;">
                                                            <option selected="selected" value={{ 0 }}>
                                                                select category</option>
                                                            @foreach ($parentcategories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputFile">image</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" id="imageajax" name="image">
                                                                <span class="text-danger" id="image-input-error"></span>

                                                                <br />
                                                                <img id="frameajax"
                                                                    src="{{ asset('/uploads/category/default.png') }}"
                                                                    style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" id="pcategoryajax">
                                                        <label>category order</label>
                                                        <input name="category_order" class="form-control" value=""
                                                            id="category_order_count_ajax">
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
function deleteConfirmation(id) {
    swal.fire({
        title: "Delete?",
        icon: 'question',
        text: "this category has subcategory!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
    }).then(function(e) {

        if (e.value === true) {

            let _url = '/category/' + id;

            $.ajax({
                type: 'DELETE',
                url: _url,
                data: {
                    _token: $('#_token').val()
                },
                success: function(resp) {
                    if (resp.success) {
                        swal.fire("Done!", resp.message, "success");
                        location.reload();
                    }
                },
                error: function(resp) {
                    location.reload();
                    console.log("Error!", 'Sumething went wrong.', "error");
                }

            });

        } else {
            e.dismiss;
        }

    }, function(dismiss) {
        return false;
    })
}

$(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('category.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'parent_id', name: 'parent_id'},
            {data: 'image', name: 'image'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            {data: 'category_order', name: 'category_order'},
        ]
    });
    
  });

</script>
@endsection