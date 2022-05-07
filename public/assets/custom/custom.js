$(document).ready(function () {

    $.ajax({
        'url': '/categoryorder?category_id=0',
        'type': 'get',
        'data': {},
        success: function (response) { // What to do if we succeed
            $('#category_order_count').val(response['order_category']);
            $('#category_order_count_ajax').val(response['order_category']);
        },
        error: function (response) {
            alert('Error' + ' ' + response);
        }
    });
    $.ajax({
        'url': '/categoryorder?category_id=0',
        'type': 'get',
        'data': {},
        success: function (response) { // What to do if we succeed
            $('#category_order_count_ajax').val(response['order_category']);
        },
        error: function (response) {
            alert('Error' + ' ' + response);
        }
    });
    var cat = $('.parcat').change(function (e) {

        e.preventDefault();
        var parent_id = cat.val();

        $.ajax({
            'url': '/categoryorder?category_id=' + parent_id,
            'type': 'get',
            'data': {},
            success: function (response) { // What to do if we succeed
                $('#category_order_count').val(response['order_category']);
            },
            error: function (response) {
                alert('Error' + ' ' + response);
            }
        });

    });
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
    $('#image').change(function () {
        $("#frame").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            $("#frame").attr('src', window.URL.createObjectURL(this.files[i]));
        }
    });
    $('#imageajax').change(function () {
        $("#frameajax").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            $("#frameajax").attr('src', window.URL.createObjectURL(this.files[i]));
        }
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#upload-cat-form').submit(function (e) {
        e.preventDefault();
        console.log('dsfsdfasd');
        let formData = new FormData(this);
        $('#image-input-error').text('');

        $.ajax({
            type: 'POST',
            url: `/categoryajax`,
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    console.log('Image has been uploaded successfully');
                }
            },
            error: function (response) {
                console.log(response);
                $('#image-input-error').text(response.responseJSON.errors.file);
            }
        });
    });


    $('#update-category-form').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#image-error').text('');
        var id = $('#catid').val();
        $.ajax({
            type: 'POST',
            url: `/category/`+id,
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    console.log('Image has been uploaded successfully');
                }
            },
            error: function (response) {
                console.log(response);
                $('#image-input-error').text(response.responseJSON.errors.file);
            }
        });
    });


});
