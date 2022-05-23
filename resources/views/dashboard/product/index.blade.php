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
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product</h3>

                        <div class="card-tools">

                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="createproduct">
                                    Create
                                </button>

                                <input type="text" name="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover datatable">
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

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body renderproduct">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Create Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body rendereditproduct">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

    <script type="text/javascript">

        $(document).ready(function() {
            var table = $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('product.getProducts') }}",
                "method": "GET",
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

        });

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

        $(document).on('click', '#createproduct', function (event) {
                event.preventDefault();

                $_token = "{{ csrf_token() }}";
                $.ajax({
                    headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
                    url: "{{ route('product.create') }}",
                    type: 'get',
                    cache: false,

                    data: {'_token': $_token},
                    beforeSend: function () {
                        //something before send
                    },
                    success: function (data) {
                        console.log(data);
                        $('.renderproduct').html(data.html);

                    }
                });
            });

        $(document).on('click', '.editProduct', function (event) {
            event.preventDefault();
            var id = $('.editProduct').data('id');
            $_token = "{{ csrf_token() }}";
            var url ='product/'+id+'/edit';
            $.ajax({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
                url: url,
                type: 'get',
                cache: false,

                data: {'_token': $_token , 'id':id},
                beforeSend: function () {
                    //something before send
                },
                success: function (data) {
                    console.log(data);
                    $('.rendereditproduct').html(data.html);

                }
            });
        });


    </script>
@endsection
