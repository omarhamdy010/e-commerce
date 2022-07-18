

var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
  var wishlistProducts=[]
  function wishlist(){
    var token=JSON.parse(sessionStorage.getItem('token'));
      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Favorites/GetFavorites?Index=0&Size=10");
      httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response).items
             displayprod(Data)


      }

      }

      }
      wishlist();
      function displayprod(Data){
        productDe = "";
          for(var i =0 ;i<Data.length ; i++)
          {
            wishlistProducts.push(Data[i].id)

          }
            ;


          }
function getshopProducts(){

  var queryString = window.location.search;

  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('brand_id')){

  var brand = urlParams.get('brand_id')
  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProductsUsingBrandId/"+brand+"?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
        var Count=JSON.parse(httprequest.response).allCount
          var Data=JSON.parse(httprequest.response).items

          if(Data.length == 0){
           emptyData();
          }
          var pagesCount=JSON.parse(httprequest.response).pagesCount
          displayshopProducts(Data)
          dispaypagesNumberBrand(pagesCount,pageNum)
  }

  }
}else if(urlParams.get('sub')){

  var sub = urlParams.get('sub')

  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProductsUsingSubCategoryId/"+sub);
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
        var Count=JSON.parse(httprequest.response).allCount
          var Data=JSON.parse(httprequest.response).items
          if(Data.length == 0){
           emptyData();
          }
          var pagesCount=JSON.parse(httprequest.response).pagesCount
          displayshopProducts(Data)
          dispaypagesNumberBrand(pagesCount,pageNum)
  }

  }
}
else{
  var httprequest= new XMLHttpRequest();
  var queryString = window.location.search;

  var urlParams = new URLSearchParams(queryString);
  var pageNum=0
  if(urlParams.get('page')){
    pageNum=urlParams.get('page')-1
  }

  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProducts?Index="+pageNum+"&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var Data=JSON.parse(httprequest.response).items

          var pagesCount=JSON.parse(httprequest.response).pagesCount
          displayshopProducts(Data)
          dispaypagesNumber(pagesCount,pageNum)

  }

  }
}
  }

getshopProducts()
function displayshopProducts(products){

  shopitem = "";

  var titles=[];
  if(products.length==0){
    document.getElementById("shop-products").innerHTML = "No products";
  }else{
  for(var i =0 ;i<products.length ; i++)
      {
        var id =products[i].id;
        var cla=""
        if(jQuery.inArray(id,wishlistProducts) !== -1){
          cla="likeActive"

        }
    shopitem+=`<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
    <div class="product-item">
      <div class="item-inner">
        <div class="product-thumbnail">

          <div  class="pr-img-area"> <a href="single_product.html?product_id=`+products[i].id+`" title="Ipsums Dolors Untra" >
            <figure> <img class="first-img imageSize " src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"></figure>
            </a> </div>
          <div class="pr-info-area">
            <div data-select="`+products[i].id+`" class="pr-button">

              <div data-select="`+products[i].id+`"  id="`+products[i].id+`" onclick="likeProduct(this.id)"  class="mt-button add_to_wishlist `+cla+`"> <a > <i class="fa fa-heart"></i> </a> </div>
              <div  id="`+products[i].id+`" onclick="follow(this.id)" class="mt-button add_to_compare follow"> <a> <i " class="fa fa-check-circle"></i> </a> </a></div>
              <div  id="`+products[i].id+`" onclick="unfollow(this.id)" class="mt-button add_to_compare unfollow"> <a> <i " class="fa fa-times-circle"></i> </a> </a></div>
              <div data-icon-remove=" `+products[i].name+` " id="`+products[i].id+`" onclick="removeTocompare(this.id)" class="mt-button  remove">  <a> <i  class="fa fa-close"></i> </a></div>
            </div>
          </div>
        </div>
        <div class="item-info">
          <div class="info-inner">
            <div class="item-title titleText" > <a data-attr="`+products[i].name+`" title="Ipsums Dolors Untra" href="single_product.html?product_id=`+products[i].id+`">`+products[i].name+`</a> </div>

            <div class="item-content">
            <div class="price-box"> <span class="regular-price">Sold By <span class="price">`+products[i].lowPriceData.marketName+`</span> </span> </div>
              <div class="item-price">
                <div class="price-box"> <span class="regular-price"> <span class="price">`+products[i].lowPriceData.price+` EGP</span> </span> </div>
              </div>
              <div class="pro-action">
                <button  type="button" id="`+products[i].id+`" onclick="addtoCart(this.id)" class="add-to-cart"><span> Add to Cart</span> </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </li>`


      }
      for(var i =0 ;i<products ; i++)
      {

    shopitem+=``

          titles.push(products[i].name);

      }
    }
  document.getElementById("shop-products").innerHTML = shopitem;

}
function dispaypagesNumber(Numbers , currenPage){
Number=""
var active="";
currenPage+=1;
for(i=1;i<=Numbers;i++){
  if(currenPage==i){
    active="active"
  }else{
    active=""
  }
  Number+=`<li><a class="`+active+`" href="shop_grid.html?page=`+i+`">`+i+`</a></li>`
}
document.getElementById("pagesNumber").innerHTML = Number;
}
function dispaypagesNumberBrand(Numbers , currenPage){
  Number=""
  var active="";
  currenPage+=1;
  for(i=1;i<=Numbers;i++){
    if(currenPage==i){
      active="active"
    }else{
      active=""
    }
    Number+=`<li><a class="`+active+`" href="shop_grid.html?brand_id=1&page=`+i+`">`+i+`</a></li>`
  }
  document.getElementById("pagesNumber").innerHTML = Number;
  }

var Catg=[];
var main=[];
var market=[];
var brand=[];
function FilterInputCateg(event){

  var y=$("#"+event + " input").is(":checked")
  if(y==true){
   var categId=$("#"+event + " input").attr('value');
   var id =parseInt(categId)
    Catg.push(id)

  }else{
    var val = $("#"+event + " input").attr('value');
    var id =parseInt(val)
    Catg = jQuery.grep(Catg,function(value){
      return value !=id;
    });

  }

}

function FilterInputMain(event){

  var y=$("#"+event + " input").is(":checked")
  if(y==true){
   var mainId=$("#"+event + " input").attr('value');
   var id =parseInt(mainId)
    main.push(id)


  }else{
    var val = $("#"+event + " input").attr('value');
    var id =parseInt(val)
    main = jQuery.grep(main,function(value){
      return value !=id;
    });

  }

}

function FilterInputMarket(event){


  var y=$("#"+event + " input").is(":checked")
  if(y==true){
   var marketId=$("#"+event + " input").attr('value');
   var id =parseInt(marketId)
    market.push(id)


  }else{
    var val = $("#"+event + " input").attr('value');
    var id =parseInt(val)
    market = jQuery.grep(market,function(value){
      return value !=id;
    });

  }
}
function FilterInputBrand(event){

var y=$("#"+event + " input").is(":checked")
if(y==true){
 var brandId=$("#"+event + " input").attr('value');
 var id =parseInt(brandId)
  brand.push(id)


}else{
  var val = $("#"+event + " input").attr('value');
  var id =parseInt(val)
  brand = jQuery.grep(brand,function(value){
    return value !=id;
  });

}

}

function getFilterationPost(){


}
getFilterationPost();
function sednProduct(){
var range=document.getElementById("range").innerHTML
var str =range.split(' - ');
var first=str[0].replace("Range: ","").replace("EGP","")

var second=str[1].replace("EGP","")
var FirstNum=parseInt(first);
var SecNum=parseInt(second);
var selected=$('select[name=selector] option').filter(':selected').val();
var sortNo=parseInt(selected);

           fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/ProductsUsingFiltrationByPostRequest",{
               method:'POST',
               body:JSON.stringify({
                 mainCategories:main,
                categories:Catg,
                brands:brand,
                markets:market,
                lowPrice:SecNum,
                hightPrice:FirstNum,
                sortBy:sortNo
               }),
               headers:{
                //  "Authorization":`Bearer ${token}`,
                 "content-type": "application/json; charset=utf-8"
                               }
           }).then(function(response){

               return response.json();

           })

   .then(function(data){

       displayshopProducts(data.items)

   }).catch(err =>{
     console.error(err.message);
   })

 }


function postProduct(event){

          fetch("http://aaaserver-001-site31.ftempurl.com/en/api/Favorites/LikeProduct",{
           method:'POST',
           body:JSON.stringify({
               product_Id:event,


           }),
           headers:{
               "Content-Type":"application/json;"
           }
       }).then(function(response){
           return response.json();
       })
.then(function(data){

})

}

//get Main Categories
function getMaincategories(){
  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Categories/GetMainCategories?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var Data=JSON.parse(httprequest.response).items
          displayMainCategries(Data);

      }
  }

}
getMaincategories();
function displayMainCategries(MainCateg){
  mainItem = "";


  for(var i =0 ;i<MainCateg.length ; i++)
      {

        mainItem+=`<li id="`+MainCateg[i].id+`FM" onclick="FilterInputMain(this.id)"> <input type="checkbox" id="`+MainCateg[i].id+`Main" value="`+MainCateg[i].id+`" name="`+MainCateg[i].name+`">
        <label for="`+MainCateg[i].id+`Main"> <span class="button"></span>`+MainCateg[i].name+`<span class="count"></span> </label>
      </li> `



      }


  document.getElementById("main").innerHTML =mainItem ;

}
//getBrand

function getBrandcategoriesf(){
  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Brands/GetBrands?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var Data=JSON.parse(httprequest.response).items
          displayBrandCategriesf(Data);
      }
  }

}

function displayBrandCategriesf(Brand){
  for(var i =0; i<Brand.length; i++)
      {

        BrandItem+=`<li id="`+Brand[i].id+`FB" onclick="FilterInputBrand(this.id)"> <input type="checkbox" id="`+Brand[i].id+`B" value="`+Brand[i].id+`" name="`+Brand[i].name+`">
        <label for="`+Brand[i].id+`B"> <span class="button"></span>`+Brand[i].name+`<span class="count"></span> </label>
      </li> `


      }


  document.getElementById("brand").innerHTML =BrandItem ;

}
getBrandcategoriesf();
// get Market

function getMarketcategories(){
  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Markets/GetMarkets?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var Data=JSON.parse(httprequest.response).items
          displayMarketCategries(Data);

      }
  }

}
getMarketcategories();
function displayMarketCategries(Market){
  marketItem = "";

  for(var i =0 ;i<Market.length ; i++)
      {
        marketItem+=`<li id="`+Market[i].id+`Fa" onclick="FilterInputMarket(this.id)">
        <input type="checkbox" id="`+Market[i].id+`M" value="`+Market[i].id+`" name="`+Market[i].name+`">
        <label for="`+Market[i].id+`M"> <span class="button"></span>`+Market[i].name+`<span class="count"></span> </label>
      </li>`

      }


  document.getElementById("market").innerHTML =marketItem ;

}


   /* ---------------------------------------------
      Get shop Categories
    --------------------------------------------- */
    function getshopcategories(){
      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Categories/GetCategories?Index=0&Size=10");
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response).items
              displayshopCategries(Data);

          }
      }

    }
  getshopcategories();

function displayshopCategries(products){
shopitemprod = "";
for(var i =0 ;i<products.length ; i++)
    {

  shopitemprod+=`<li id="`+products[i].id+`FC"  onclick="FilterInputCateg(this.id)">
  <input type="checkbox" id="`+products[i].id+`C" value="`+products[i].id+`" name="`+products[i].name+`">
  <label for="`+products[i].id+`C"> <span class="button"></span>`+products[i].name+`<span class="count"></span> </label>
</li>`



    }


document.getElementById("shop-catego").innerHTML = shopitemprod;

}



var x=localStorage.getItem("orders")
var z=JSON.parse(x)
var y=""






function displayDataCartShop(){
  var x=localStorage.getItem("orders");
  var z=JSON.parse(x);
    // for( i =0 ;i<z.length ; i++)
    // {
    //
    //
    // }
    document.getElementById("yourNumb").innerHTML=`<a href="shopping_cart.html">`+z.length+`</a>`

  }
  displayDataCartShop();

function displayDataCart(){

  var x=localStorage.getItem("orders")
  var z=JSON.parse(x)
    productDe = "";
    var total=0;
    for( i =0 ;i<z.length ; i++)
    {

      total+=z[i].quantity*z[i].price
        productDe+=`
        <li class="item"> <a href="shopping_cart.html" title="Sample Product" class="product-image"><img src="`+z[i].image+`" alt="Sample Product "></a>
        <div class="product-details">

          <p class="product-name"> <a href="shopping_cart.html">`+z[i].name+`</a> </p>
          <div><span class="price">`+z[i].price+` EGP</span> </div>
      </li>
      `;

    }
    document.getElementById("Total").innerHTML="<p class=subtotal> <span class=label>Cart Subtotal:</span> <span class=price>"+total+"</span> </p>";
    document.getElementById("cart").innerHTML= productDe;
    // document.getElementById("Total").innerHTML=allPrice;
  }

  function remove(event){

      for( i=0; i<z.length;i++){
          if(event==z[i].id){
            z.splice(i,1);
            localStorage.setItem("orders",JSON.stringify(z))

           displayDataCart()

      } }

}


  displayDataCart()



        // categories
function categories(){

  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Categories/GetMainCategories?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var allMainCatData=JSON.parse(httprequest.response).items
          saveMain(allMainCatData);
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
function getBrandcategoriess(){
  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Brands/GetBrands?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var Data=JSON.parse(httprequest.response).items
          displayBrandCategriess(Data);

      }
  }

}
    /* ---------------------------------------------
       Brand section
    --------------------------------------------- */
getBrandcategoriess();
function displayBrandCategriess(Brand){
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
function follow(event){


  $('.follow').closest('div#'+event).css("display","none")
  $('.unfollow').closest('div#'+event).css("display","block")

    var id =parseInt(event)


     var token=JSON.parse(sessionStorage.getItem('token'));
             fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/FollowProduct/"+id,{
                 method:'POST',
                 headers:{
                   "Authorization":`Bearer ${token}`,
                   "content-type": "application/json; charset=utf-8"
                                 }
             }).then(function(response){

                 return response.json();

             })

     .then(function(data){

     }).catch(err =>{
       console.error(err.message);
     })

}

function unfollow(event){

  $('.follow').closest('div#'+event).css("display","block")
  $('.unfollow').closest('div#'+event).css("display","none")

  var id =parseInt(event)


   var token=JSON.parse(sessionStorage.getItem('token'));
           fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/UnFollowProduct/"+id,{
               method:'POST',
               headers:{
                 "Authorization":`Bearer ${token}`,
                 "content-type": "application/json; charset=utf-8"
                               }
           }).then(function(response){

               return response.json();

           })

   .then(function(data){


   }).catch(err =>{
     console.error(err.message);
   })





}
