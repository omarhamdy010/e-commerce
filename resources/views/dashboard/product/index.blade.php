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
                        <li class="breadcrumb-item active">Product</li>
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
                        <h3 class="card-title">Product</h3>

                        <div class="card-tools">

                            <div class="input-group input-group-sm" style="width: 150px;">

                                <a class="btn btn-primary btn-sm" data-toggle="modal" id="mediumButton"
                                    {{--                                   data-target="#mediumModal"--}}
                                                                       data-attr="{{route('product.create')}}"
                                >Create</a>

                                <input type="text" name="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover yajra-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>description</th>
                            <th>quantity</th>
                            <th>price</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody id="product_table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </section>
@endsection

@section('js')

    <script type="text/javascript">

        function runDataTable() {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('product.getProducts')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'quantity', name: 'quantity'},
                    {data: 'price', name: 'price'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        }

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
            }).then(function (e) {

                if (e.value === true) {

                    let _url = '/category/' + id;

                    $.ajax({
                        type: 'DELETE',
                        url: _url,
                        data: {_token: $('#_token').val()},
                        success: function (resp) {
                            if (resp.success) {
                                swal.fire("Done!", resp.message, "success");
                                location.reload();
                            }
                        },
                        error: function (resp) {
                            location.reload();
                            console.log("Error!", 'Sumething went wrong.', "error");
                        }

                    });

                } else {
                    e.dismiss;
                }

            }, function (dismiss) {
                return false;
            })
        }

    </script>
@endsection
