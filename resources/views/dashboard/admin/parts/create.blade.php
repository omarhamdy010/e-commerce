<div class="col-12">
    <div class="card card-primary card-tabs">

        <span class="error1"></span>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data" id="uploadcatform">
                        <input type="hidden" name="_token" id="token2" value="{{csrf_token()}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>name</label>
                                <input name="name" class="form-control value" data-validation="required" type="text" value="{{old('name')}}" id="name">
                            </div>
                            <span class="name"></span>
                            <div class="form-group">
                                <label>email</label>
                                <input name="email" type="email" class="form-control value" data-validation="required" value="{{old('email')}}" id="email">
                            </div>
                            <span class="email"></span>
                            <div class="form-group">
                                <label for="exampleInputFile">image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="imageajax" data-validation="required" name="image">
                                        <span class="text-danger" id="image-input-error"></span> <br/>
                                        <img id="frameajax" src="{{asset('/uploads/admin/default.png')}}" style=" width:100px;height:100px; border: 1px solid #ddd;border-radius: 8px;padding: 5px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input name="password" type="password" class="form-control" data-validation="required" value="{{old('password')}}" id="password">
                            </div>
                            <span class="password"></span>

                            <div class="form-group">
                                <label>confirmed password</label>
                                <input name="confirmed_password" type="password" class="form-control" data-validation="required" value="{{old('confirmed_password')}}" id="confirmed_password">
                            </div>
                            <span class="confirmed_password"></span>


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
    $.validate({ignore: 'input[type=hidden]', modules: 'date, security', lang: "ar", validateOnEvent: true});

    // $(document).ready(function (e) {
    //     $('#images').change(function () {
    //         let reader = new FileReader();
    //         reader.onload = (e) => {
    //             $('#preview-image-before-upload').attr('src', e.target.result);
    //         };
    //         reader.readAsDataURL(this.files[0]);
    //     });
    // });

</script>
