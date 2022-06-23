var hostname=window.location.origin;
var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
var form=document.getElementById("form");
var formlogin=document.getElementById("login-form")
// var email=document.getElementById("emmail_register");
// var number=document.getElementById("number_register");
// var pass=document.getElementById("pass_register");
form.addEventListener('submit', function(evt){
    evt.preventDefault();
    var name=document.getElementById("name_register").value;
    var email=document.getElementById("emmail_register").value;
    var number=document.getElementById("number_register").value;
    var pass=document.getElementById("pass_register").value;
    var cf=document.getElementById("cf_register").value;
    var zone=parseInt(document.getElementById("zone_register").value);
   


    
    
            fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Auth/Register",{
                method:'POST',
                body:JSON.stringify({
          fullName:name ,
        email: email,
            phone: number,
            zone_Id:zone,
                password: pass,
                fcm: cf,
                
               
                }),
                headers:{
        
                    "Content-Type": "application/json;"
                                }
            }).then(function(response){
               
                return response.json();
              
            })
    .then(function(data){
        
        console.log(data)

        console.log(data.errorMessages)
        var err=document.getElementById("Regerror")
        err.innerHTML="<p>"+data.errorMessages+"</p>"
        sessionStorage.setItem("fullName",name);
    })
        
})


function login(){
formlogin.addEventListener('submit', function(evt){
    evt.preventDefault();
    var email_login=document.getElementById("email_login").value;
    var password_login=document.getElementById("password_login").value;
    var fcm_login=document.getElementById("fcm_login").value;



console.log(email_login)
  
    
            fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Auth/Login",{
                method:'POST',
                body:JSON.stringify({
                    email:email_login ,
                    password:password_login,
                    fcm:fcm_login
                }),
                headers:{
                    "Access-Control-Allow-Origin":"*",
                    "content-type": "application/json; charset=utf-8"
                                }
            }).then(function(response){
                console.log(response.status); // Will show you the status
                if (!response.ok) {
                    var err=document.getElementById("Loginerror")
                    err.innerHTML="<p>Email or Password is Invalid</p>"
                    
                } else
                
                return response.json();
                
            
            })
        
    .then(function(data){
 
        getProfileuser()
     
        localStorage.setItem("Login","Logout")
        sessionStorage.setItem("token",JSON.stringify(data.token));
        getProfileuser();
        window.location.replace(hostname+"/profile.html");
      
    }) 

})
}
login()

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    console.log('token'+ googleUser.getAuthResponse().id_token)
   var googleTokenId=profile.getId();
   var name=profile.getName();
   var email=profile.getEmail();
   var codeNo=parseInt(googleTokenId);
   var id_token =JSON.stringify(googleUser.getAuthResponse().id_token)

   console.log("token", id_token);
   var profile=profile.getImageUrl();
$("#loaderIcon").show('fast');
$("#g-signin2").show('fast');
fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Auth/ExternalLogin",{
    method:'POST',
    body:JSON.stringify({
        fullName:name,
        email:email,
        externalLoginId:"Google",
        externalLoginProvider:profile.getId,
    }),
    headers:{
        "Access-Control-Allow-Origin":"*",
        "content-type": "application/json; charset=utf-8"
                    }
}).then(function(response){
    console.log(response.status); // Will show you the status
    if (!response.ok) {
        var err=document.getElementById("Loginerror")
       
        
    } else
    
    return response.json();
    

}).then(function(data){

    sessionStorage.setItem("token",JSON.stringify(data.token));
    // console.log(email)
    // console.log(data.token)
    // sessionStorage.setItem("token",JSON.stringify(data.token));
    // window.location.replace("http://127.0.0.1:5500/checkout.html");
 
}) 
   
  }

  function getProfile(event){


    var id =parseInt(event)
   
   
     var token=JSON.parse(sessionStorage.getItem('token'));
             fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Favorites/LikeProduct",{
                 method:'POST',
                 body:JSON.stringify({
                     product_Id:id
                 }),
                 headers:{
                   "Authorization":`Bearer ${token}`,
                   "content-type": "application/json; charset=utf-8"
                                 }
             }).then(function(response){
                 // console.log(response.status); // Will show you the status
                 // if (!response.ok) {
                 //     throw new Error("HTTP status " + response.status);
                 // }
                 return response.json();
             
             })
         
     .then(function(data){
  
    
     }).catch(err =>{
  
     })
     // .catch(error => console.log("invalid ") );
   
   
   
   
   }
   function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  function getProfileuser(){
    var token=JSON.parse(sessionStorage.getItem('token'));
      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/User/Profile");
      httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response)
     
         localStorage.setItem("userName",Data.fullName)
      
      }
       
      
      }
      
      }


  function loginPass(){
      var x =document.getElementById("password_login");
      if(x.type === "password"){
          x.type="text"
      }else{
        x.type="password"
      }
  }
  function cfPass(){
    var x =document.getElementById("fcm_login");
    if(x.type === "password"){
        x.type="text"
    }else{
      x.type="password"
    }
}
  
  function myFunction() {
    var x = document.getElementById("pass_register");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function showCfPass(){
    var x = document.getElementById("cf_register");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }


  // categories Ahmed Samir
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