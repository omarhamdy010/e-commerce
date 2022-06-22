<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                       href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                       aria-selected="true">Create</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('category.createcat')}}" enctype="multipart/form-data" id="upload-cat-form">
                        <input type="hidden" name="_token" id="token2" value="{{csrf_token()}}">
                        <div class="card-body">
                            @foreach(config('translatable.locales') as $local)
                                <div class="form-group">
                                    <label>{{$local=='ar'?'arabic name':'english name'}}</label>
                                    <input type="text" value="{{old($local.'[.name]')}}" class="form-control nameajax "
                                           name="{{$local}}[name]" id="nameajax" data-validation="required"
                                           placeholder="Enter category {{$local=='ar'?'arabic name':'english name'}}"></div>
                                <span class="{{$local}}_name"></span>
                            @endforeach
                                <div class="form-group">
                                <label>parent category</label>
                                <select class="form-control select2 parcatajax"
                                        id="catnameajax" data-validation="required"
                                        name="parent_id" style="width: 100%;">
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
                                        <input type="file" id="imageajax" data-validation="required" name="image">
                                        <span class="text-danger" id="image-input-error"></span> <br/>
                                        <img id="frameajax" src="{{asset('/uploads/category/default.png')}}" style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="pcategoryajax">
                                <label>category order</label>
                                <input name="category_order" data-validation="required"
                                       class="form-control"
                                       value="{{old('category_order')}}"
                                       id="category_order_count_ajax" >
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

</script>

<script>

    $.validate({
        modules: 'logic, location',
        onSuccess: function() {
            alert('valid');
            return false;
        },
        onModulesLoaded: function() {
            $('input[name="country"]').suggestCountry();
        }
    });

</script>
