<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                       href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                       aria-selected="true">Edit</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('category.update',['category'=>$category->id])}}"
                          id="update-category-form"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" value="{{$category->name}}" class="form-control"
                                       name="name" id="name"
                                       placeholder="Enter category name">

                            </div>
                            <div class="form-group">
                                <label>parent category</label>
                                <select class="form-control select2 parcatajax" id="parent_name" name="parent_id"
                                        style="width: 100%;">
                                    @if( $category->parent_id == 0)
                                        <option value="{{0}}" selected>select category</option>
                                        @else
                                        <option value="{{0}}" >select category</option>
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
                        <input type="hidden" class="form-control" value="{{$category->id}}" id="catid">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function () {

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

        $('#imageajax').change(function () {
            $("#frameajax").html('');
            for (var i = 0; i < $(this)[0].files.length; i++) {
                // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
                $("#frameajax").attr('src', window.URL.createObjectURL(this.files[i]));
            }
        });

    });

</script>
