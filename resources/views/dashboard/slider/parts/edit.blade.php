<div class="col-12">
    <div class="card card-primary card-tabs">
        <span class="error1"></span>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                     aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post"
                          action="{{route('slider.update',['slider'=>$slider->id])}}"
                          id="update-category-form"
                          enctype="multipart/form-data">
                        @method('PUT')

                        <input type="hidden" name="_token" id="token2" value="{{csrf_token()}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>name</label>
                                <input name="title" class="form-control value" data-validation="required" type="text"
                                       value="{{$slider->title}}" id="title">
                            </div>
                            <span class="title"></span>
                            <div class="form-group">
                                <label for="exampleInputFile">image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="imageajax" name="image">
                                        <span class="text-danger" id="image-input-error"></span> <br/>
                                        <img id="frameajax" src="{{$slider->image_path}}"
                                             style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                            <input class="toggle-class" type="checkbox" name="status" {{$slider->status = 1 ?'checked':''}}
                                   data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
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

    // $(document).ready(function () {
    //     $('#js-example-basic-single').select2();
    //     $('#js-example-basic-single').on('change', function (e) {
    //         var data = $('#select2-dropdown').select2("val");
    //         $this.set('ottPlatform', data);
    //     });
    // });

    $.validate({
        ignore: 'input[type=hidden]',
        modules: 'date, security',
        lang: "ar",
        validateOnEvent: true

    });

</script>
