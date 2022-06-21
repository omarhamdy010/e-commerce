<style>
    .parsley-errors-list li{
        color: red;
        list-style: none;
    }
</style>
<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                       href="#custom-tabs-one-home" role="tab"
                       aria-controls="custom-tabs-one-home"
                       aria-selected="true">Edit</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}

            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post"
                          action="{{route('category.update',['category'=>$category->id])}}"
                          id="update-category-form"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            @foreach(config('translatable.locales') as $local)
                                <div class="form-group">
                                    <label>{{$local=='ar'?'arabic name':'english name'}}</label>
                                    <input type="text"
                                           value="{{$category->translate($local)->name}}"
                                           class="form-control nameajax "
                                           name="{{$local}}[name]" id="nameajax"></div>
                                <span class="{{$local}}_name"></span>
                            @endforeach

                            <div class="form-group">
                                <label>parent category</label>
                                <select
                                    class="form-control select2 parcatajax @error('paren_name') is-invalid @enderror"
                                    id="parent_name" name="parent_id"
                                    style="width: 100%;">
                                    @if( $category->parent_id == 0)
                                        <option value="{{0}}" selected>select category</option>
                                    @else
                                        <option value="{{0}}">select category</option>
                                    @endif
                                    @foreach($parentcategories as $cat)
                                        <option
                                            value="{{$cat->id}}"{{$category->parent_id == $cat->id?'selected':''}}>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" data-validation="required"
                                               class="@error('image') is-invalid @enderror"
                                               id="imageajax" name="image">
                                        <span class="text-danger" id="image-input-error"></span>
                                        <br/>
                                        <img id="frameajax" src="{{$category->image_path}}"
                                             style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                        @error('image')
                                        <div
                                            class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="pcategoryajax">
                                <label>category order</label>
                                <input name="category_order" data-validation="required"
                                       class="@error('category_order') is-invalid @enderror form-control"
                                       value="{{$category->category_order}}"
                                       id="category_order_count_ajax" disabled>
                                @error('category_order')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" class="form-control" value="{{$category->id}}"
                               id="catid">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-submit">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>

    $(function () {
        $('#update-category-form').parsley();
    });
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
    });

</script>
