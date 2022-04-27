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
                    <table class="table table-bordered table-hover yajra-datatable">
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
{{--                        @foreach($categories as $index=>$category)--}}
{{--                            <tr>--}}
{{--                                <td>{{$index+1}}</td>--}}
{{--                                <td>{{$category->name}}</td>--}}
{{--                                <td>{{($category->parent_id==0?'main category' : $category->parent()->first()->name) }}</td>--}}
{{--                                <td><img src="{{$category->image_path}}" style="height: 100px;width: 100px"></td>--}}
{{--                                <td>--}}
{{--                                    @if(count($category->children()->get())>0)--}}
{{--                                        <a class="btn btn-primary btn-sm" href="{{route('category.edit',['category'=>$category->id])}}">EDIT</a>--}}
{{--                                        <button onclick="deleteConfirmation({{$category->id}})" class="btn btn-danger btn-sm" >DELETE</button>--}}
{{--                                        <input type="hidden" value="{{csrf_token()}}" id="_token">--}}
{{--                                        @else--}}
{{--                                    <form action="{{route('category.destroy',$category->id)}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <a class="btn btn-primary btn-sm" href="{{route('category.edit',['category'=>$category->id])}}">EDIT</a>--}}
{{--                                        <button type="submit" class="btn btn-danger btn-sm" >DELETE</button>--}}
{{--                                    </form>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>{{$category->category_order}}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- small modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="smallBody">
                        <div>
                            <div class="row viewRender">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- medium modal -->
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="mediumBody">
                        <div>
                            <!-- the result to be displayed apply here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
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

            $(document).on('click', '#smallButton', function(event) {
                event.preventDefault();
                $_token = "{{ csrf_token() }}";
                var id = $(this).data('id');
                $.ajax({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
                    url: "{{ route('edit') }}",
                    type: 'POST',
                    cache: false,
                    data: {'_token': $_token,'id':id },
                    datatype: 'html',
                    beforeSend: function() {
                        //something before send
                    },
                    success: function(data) {
                        console.log(data);
                        $('.viewRender').html(data.html);
                    }
                });
            });


        </script>
    @endsection
