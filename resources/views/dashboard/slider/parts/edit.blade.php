<div class="col-12">
    <div class="card card-primary card-tabs">
        <span class="error1"></span>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('slider.update',['slider'=>$slider->id])}}" data-id="{{$slider->id}}" id="update-slider-form" enctype="multipart/form-data">
                        @method('PUT')
                        <input type="hidden" name="_token" id="token2" value="{{csrf_token()}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>name</label>
                                <input name="title" class="form-control value" data-validation="required" type="text" value="{{$slider->title}}" id="title">
                            </div>
                            <span class="title"></span>
                            <div class="form-group">
                                <label for="exampleInputFile">image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="imageajax" name="image">
                                        <span class="text-danger" id="image-input-error"></span> <br/>
                                        <img id="frameajax" src="{{$slider->image_path}}" style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                             <label  class="switch">
                                   <input type="checkbox" name="status" data-id="{{$slider->id}}" class="switch switch_toggle" {{$slider->status == 1 ? 'checked' : ''}} >
                                   <span class="slider round"></span>
                             </label>
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

    $.validate({
        ignore: 'input[type=hidden]',
        modules: 'date, security',
        lang: "ar",
        validateOnEvent: true
    });

</script>
