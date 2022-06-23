var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }

var forgetpass=document.getElementById("forgetPassword")
var forgetcode=document.getElementById("forgetCode")
var resetPass=document.getElementById("resetPass")
// var email=document.getElementById("emmail_register");
// var number=document.getElementById("number_register");
// var pass=document.getElementById("pass_register");
forgetpass.addEventListener('submit', function(evt){

    evt.preventDefault();

    var phone=document.getElementById("phone").value;
    console.log(phone)
    // var message=document.getElementById("message");
    var errorMessage=document.getElementById("errorMessage");
    // let res = /^[a-zA-Z]*$/.test(fullName);
    // var regExp = new RegExp("^\\d+$");
    // var isValid = regExp.test(phone);
// console.log(isValid)
//     console.log(password , cp)
// if(isValid){

    
            fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Verify/SendVerifySMS",{
                method:'POST',
                body:JSON.stringify({
                phone:phone
                }),
                headers:{
        
                    "Content-Type": "application/json;"
                                }
            }).then(function(response){
               
                return response.json();
              
            })
    .then(function(data){
        localStorage.setItem("phone",phone);
        console.log(phone)
        console.log(data)
        console.log(data.smsid)
        localStorage.setItem("smsId",data.smsid);
      
        // sessionStorage.setItem("fullName",name);
    })
    $(".code-req").css("display","block")
    $(".phone-form").css("display","none")

    // window.location.href("http://127.0.0.1:5500/shop_grid.html")
})

forgetcode.addEventListener('submit', function(evt){
    
    evt.preventDefault();

    var code=document.getElementById("code").value;
    console.log(typeof(code))
    var codeNo=parseInt(code);
var x= localStorage.getItem('smsId');
console.log(typeof(x))
var y= localStorage.getItem('phone');
    // var message=document.getElementById("message");
    var errorMessage=document.getElementById("errorMessage");

    
            fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Verify/CheckVerifyCode",{
                method:'POST',
                body:JSON.stringify({
                    phone:y,
                    smsId:x,
                    code:codeNo
                }),
                headers:{
        
                    "Content-Type": "application/json;"
                                }
            }).then(function(response){
                
                return response.json();
                
              
            })
    .then(function(data){
        
        console.log(data)
        sessionStorage.setItem("token",JSON.stringify(data.resetPasswordToken));
        // sessionStorage.setItem("fullName",name);
    })
    $(".code-req").css("display","none")
    $(".phone-form").css("display","none")
    $(".resetPass").css("display","block")

    // window.location.href("http://127.0.0.1:5500/shop_grid.html")
})
resetPass.addEventListener('submit', function(evt){
    
    evt.preventDefault();
var Phone= localStorage.getItem('phone');
var resetToken=JSON.parse(sessionStorage.getItem('token'));
var newPass= document.getElementById("newPass").value;
console.log(Phone,resetToken,newPass)
            fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/User/ResetPassword",{
                method:'PUT',
                body:JSON.stringify({
                    phone:Phone,
                    resetPasswordToken:resetToken,
                    newPassword:newPass
                }),
                headers:{
        
                    "Content-Type": "application/json;"
                                }
            }).then(function(response){
                return response.json();
                
              
            })
    .then(function(data){
        
        console.log(data)
        window.location.assign("http://127.0.0.1:5500/account_page.html")
        
        // sessionStorage.setItem("fullName",name);
    })
    $(".code-req").css("display","none")
    $(".phone-form").css("display","none")
    $(".resetPass").css("display","block")
   
   
})
function categories(){

    var httprequest= new XMLHttpRequest();
    httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Categories/GetMainCategories?Index=0&Size=10");
    httprequest.send();
    httprequest.onreadystatechange=function(){
        if(httprequest.status==200 && httprequest.readyState==4){
            var allMainCatData=JSON.parse(httprequest.response).items
            // getCategories(allMainCatData)
            saveMain(allMainCatData);
            console.log(allMainCatData);
            jQuery('.mega-menu-title').on('click', function() {
                if (jQuery('.mega-menu-category').is(':visible')) {
                    jQuery('.mega-menu-category').slideUp();
                } else {
                    jQuery('.mega-menu-category').slideDown();
                }
            });
            
    jQuery('.mega-menu-category .nav > li').hover(function() {
        jQuery(this).addClass("active");
        jQuery(this).find('.popup').stop(true, true).fadeIn('slow');
    }, function() {
        jQuery(this).removeClass("active");
        jQuery(this).find('.popup').stop(true, true).fadeOut('slow');
    });
  
  
    jQuery('.mega-menu-category .nav > li.view-more').on('click', function(e) {
        if (jQuery('.mega-menu-category .nav > li.more-menu').is(':visible')) {
            jQuery('.mega-menu-category .nav > li.more-menu').stop().slideUp();
            jQuery(this).find('a').text('More category');
        } else {
            jQuery('.mega-menu-category .nav > li.more-menu').stop().slideDown();
            jQuery(this).find('a').text('Close menu');
        }
        e.preventDefault();
    });
        }
    }
        
    }
    categories();
    var mainC = {}
    var idMain = {}
    function saveMain(allMainCatData) {
      for(var i=0; i<allMainCatData.length; ++i) {
        mainC[allMainCatData[i].name]=[];
        idMain[allMainCatData[i].name]=allMainCatData[i].id
      }
      $.each(mainC, function(key, value) {
        var idd = idMain[key];
        var httprequest= new XMLHttpRequest();
        httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Categories/GetCategories/"+idd+"?Index=0&Size=10");
        httprequest.send();
        httprequest.onreadystatechange=function(){
            if(httprequest.status==200 && httprequest.readyState==4){
                var allCatData=JSON.parse(httprequest.response).items;
                saveCat(allCatData,key);
            }
          }
      })
  
    }
    var catIds={};
    var catWithSub={};
    function saveCat(allCatData,key) {
      for(var i=0; i<allCatData.length; ++i) {
        mainC[key].push(allCatData[i].name);
        catIds[allCatData[i].name]=allCatData[i].id;
        catWithSub[allCatData[i].name]=[];
      }
      var catss=mainC[key];
      var counter = 0;
      window.getData=function()
      {
          /* This IF block has nothing to do with the OP. It just resets everything so the demo can be ran more than once. */
          if (counter===catss.length) {
              // return;
              console.log(catWithSub);
          }
          var id = catIds[catss[counter]];
          var category = catss[counter];
          $.ajax({
              /* The whisperingforest.org URL is not longer valid, I found a new one that is similar... */
              url:"http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Categories/GetSubCategories/"+id+"?Index=0&Size=10",
              async: true,
              dataType: 'json',
              success:function(data){
                catWithSub[category].push(data);
                counter++;
                if (counter < catss.length) getData();
                else{
                  displayof();
                }
              }
              
          });
      }
      getData();
    }
    function displayof(){
      
  $.each(mainC, function(key, value) {
    var mainCategory = key;
    var html = '<li><a href="#">'+mainCategory+'</a><div class="wrap-popup"><div class="popup"><div class="row">'
    var html2='<a href="#">'+mainCategory+'</a><ul>'
    var cats = mainC[key];
    
    for(var i=0; i<cats.length; ++i){
      var subCats = catWithSub[cats[i]];
      if(i%2==0){
        var has_sep_class = i >0 ? "has-sep":"";
        html+='<div class="col-md-4 col-sm-6 '+has_sep_class+'">';
      }
      html+='<h3>'+cats[i]+'</h3><ul class="nav">'
      html2+='<li><a href="#">'+cats[i]+'</a><ul>'
      for(var j=0; j<subCats[0].items.length; ++j){
        html+='<li><a href=shop_grid.html?sub='+subCats[0].items[j].id+'>'+subCats[0].items[j].name+'</a></li>'
        html2+=' <li><a href=shop_grid.html?sub='+subCats[0].items[j].id+'>'+subCats[0].items[j].name+'</a></li>'
      }
      html+='</ul><br>'
      html2+='</ul></li>'
      if(i%2==1){
        html+='</div>';
      }
    }
    html+='</div></div></div></div></li>';
    html2+='</ul>'
    document.getElementById("nav-categories").innerHTML = html;
    document.getElementById("categ-mob").innerHTML = html2;
  })
  jQuery('.mega-menu-category .nav > li').hover(function() {
    jQuery(this).addClass("active");
    jQuery(this).find('.popup').stop(true, true).fadeIn('slow');
  }, function() {
    jQuery(this).removeClass("active");
    jQuery(this).find('.popup').stop(true, true).fadeOut('slow');
  });
            
    }
  //End Ahmed 
  function getBrandcategories(){
    var httprequest= new XMLHttpRequest();
    httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Brands/GetBrands?Index=0&Size=10");
    httprequest.send();
    httprequest.onreadystatechange=function(){
        if(httprequest.status==200 && httprequest.readyState==4){
            var Data=JSON.parse(httprequest.response).items
            displayBrandCategries(Data);
        
        }
    }
       
  }
      /* ---------------------------------------------
         Brand section
      --------------------------------------------- */
  getBrandcategories();
  function displayBrandCategries(Brand){
    BrandItem = "";
    brandMobile=""        
    var titles=[];
    for(var i =0 ;i<Brand.length ; i++)
        {
  
          
          BrandItem+=`<li class="menu-item depth-1 menucol-1-3 ">
                      
          <ul class="submenu">
            <li class="menu-item">
              <div class="title"> <a href="shop_grid.html?brand_id=`+Brand[i].id+`">`+Brand[i].name+`</a></div>
            </li>
           
          </ul>
        </li>`
        brandMobile+=`<li><a href="shop_grid.html?brand_id=`+Brand[i].id+`">`+Brand[i].name+`</a></li>`
   
        }
    
    
    document.getElementById("brands").innerHTML = BrandItem ;
    document.getElementById("brandMobile").innerHTML=brandMobile
    
  }