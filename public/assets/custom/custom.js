$(document).ready(function(){
    $('#scategory').hide();
    $('#scategory').children('select:first').removeAttr('name');


    var cat=$('.parcat').change(function () {
      if (cat.val()!=null){
          $('#pcategory').hide();
          $('#pcategory').children('select:first').removeAttr('name');
          $('#scategory').show();
          $('#scategory').children('select:first').attr('name','subcategory_order');
      }
      if(cat.val() == 0) {
          $('#scategory').hide();
          $('#scategory').children('select:first').removeAttr('name');
          $('#pcategory').show();
          $('#pcategory').children('select:first').attr('name','parentcategory_order');
      }

    });

    $('#image').change(function(){
        $("#frames").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            // $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            $("#frame").attr( 'src',window.URL.createObjectURL(this.files[i]));
        }
    });

});
