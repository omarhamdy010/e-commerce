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

                                <a class="btn btn-primary btn-sm" data-toggle="modal" id="mediumButton"
                                   data-target="#mediumModal"
                                   data-attr="{{route('category.create')}}">Create</a>

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
                            <th>image</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody id="table_row">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- small modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
             aria-hidden="true" style="width: 1377px">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="width: 221%;border-radius: 3.3rem;">
                    <div class="modal-header">
                        {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                            <span aria-hidden="true">&times;</span>--}}
                        {{--                        </button>--}}
                    </div>
                    <div class="modal-body viewRender" id="smallBody">

                    </div>
                </div>
            </div>
        </div>


        <!-- medium modal -->
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
             aria-hidden="true" style="width: 1377px">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 170%;border-radius: 3.3rem;">
                    <div class="modal-header">
                        {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                            <span aria-hidden="true">&times;</span>--}}
                        {{--                        </button>--}}
                    </div>
                    <div class="modal-body" id="mediumBody">

                    </div>
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
                ajax: "{{ route('slider.getSliders') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'image', name: 'image'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: true, searchable: true},
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

                    let _url = '/slider/' + id;

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

        $(document).on('click', '#smallButton', function (event) {
            event.preventDefault();
            $_token = "{{ csrf_token() }}";
            var id = $(this).data('id');
            var url = 'slider/' + id +'/edit';
            $.ajax({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
                url: url ,
                type: 'get',
                cache: false,
                data: {'_token': $_token, 'id': id},
                datatype: 'html',
                beforeSend: function () {
                    //something before send
                },
                success: function (data) {
                    console.log(data);
                    $('.viewRender').html(data.html);
                }
            });
        });

        $(document).on('click', '#mediumButton', function (event) {
            event.preventDefault();
            $_token = "{{ csrf_token() }}";
            $.ajax({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')},
                url: "{{ route('slider.create') }}",
                type: 'get',
                cache: false,
                data: {'_token': $_token},
                datatype: 'html',
                success: function (data) {
                    $('#mediumBody').html(data.html);
                }
            });
        });

        $(document).on('click', '.delete', function (event) {
            event.preventDefault();
            var id = $(this).data("id");
            var token = $(".token_delete").val();
            var row = $(this).parent("td").parent("tr");
            swal.fire({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    $.ajax(
                        {
                            url: "slider/" + id,
                            type: 'DELETE',
                            data: {
                                "id": id, "_token": token,
                            },
                            success: function () {
                                jQuery(row).fadeOut('slow');
                                $('.yajra-datatable').DataTable().ajax.reload(null, false);
                            }
                        });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            })
        });

        $(document).on('submit', '#upload-cat-form', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: `/slider`,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {

                    $('#mediumModal').toggleClass('show');
                    $('#mediumModal').toggleClass('in');
                    $('.modal-backdrop').css('display', 'none');
                    $('.yajra-datatable').DataTable().ajax.reload(null, false);

                },
            });
        });

        $(document).on('submit', '#update-category-form', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: `/slider/` + id,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    $('.yajra-datatable').DataTable().ajax.reload(null, false);
                },
            });
        });

        $(document).on('change', '#imageajax', function () {
            $("#frameajax").html('');
            for (var i = 0; i < $(this)[0].files.length; i++) {
                $("#frameajax").attr('src', window.URL.createObjectURL(this.files[i]));
            }
        });


         runDataTable();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


    </script>
@endsection
