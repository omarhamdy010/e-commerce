$(document).ready(function(){
    $('#scategory').hide();
    $('#scategory').children('select:first').removeAttr('name');
    $('#scategoryajax').hide();
    $('#scategoryajax').children('select:first').removeAttr('name');


    var cat=$('.parcat').change(function () {
      if (cat.val()!=null){
          $('#pcategory').hide();
          $('#pcategory').children('select:first').removeAttr('name');
          $('#scategory').show();
          $('#scategory').children('select:first').attr('name','subcategory_order');
          $('#pcategoryajax').hide();
          $('#pcategoryajax').children('select:first').removeAttr('name');
          $('#scategoryajax').show();
          $('#scategoryajax').children('select:first').attr('name','subcategory_order');
      }
      if(cat.val() == 0) {
          $('#scategory').hide();
          $('#scategory').children('select:first').removeAttr('name');
          $('#pcategory').show();
          $('#pcategory').children('select:first').attr('name','parentcategory_order');
          $('#scategoryajax').hide();
          $('#scategoryajax').children('select:first').removeAttr('name');
          $('#pcategoryajax').show();
          $('#pcategoryajax').children('select:first').attr('name','parentcategory_order');
      }

    });

    var catajax=$('.parcatajax').change(function () {
        if (catajax.val()!=null){
            $('#pcategoryajax').hide();
            $('#pcategoryajax').children('select:first').removeAttr('name');
            $('#scategoryajax').show();
            $('#scategoryajax').children('select:first').attr('name','subcategory_order');
        }
        if(catajax.val() == 0) {
            $('#scategoryajax').hide();
            $('#scategoryajax').children('select:first').removeAttr('name');
            $('#pcategoryajax').show();
            $('#pcategoryajax').children('select:first').attr('name','parentcategory_order');
        }

    });

    $('#image').change(function(){
        $("#frame").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            $("#frame").attr( 'src',window.URL.createObjectURL(this.files[i]));
        }
    });
    $('#imageajax').change(function(){
        $("#frameajax").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            $("#frameajax").attr( 'src',window.URL.createObjectURL(this.files[i]));
        }
    });



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();
        // alert();

        var name = $("#nameajax").val();
        var category = $("#catnameajax").val();
        var image = $('#frameajax').attr('src');
        var parent =$('#pcategoryajax').children('select:first').val();
        var sub = $('#scategoryajax').children('select:first').val();
        var url = 'categoryajax';
        var parentval = 0 ;
        if (catajax.val() == 0){
            parentval = parent;
        }else {
             parentval =sub;
        }

        $.ajax({
            url:url,
            method:'PATCH',
            data:{
                _token: $('#token2').val(),
                name:name,
                parent_id:category,
                image:image,
                category_order:parentval,
            },
            success:function(response){
                if(response.success){
                    alert(response.message) //Message come from controller
                }else{
                    alert("Error")
                }
            },
            error:function(error){
                console.log(error)
            }
        });
    });


});
