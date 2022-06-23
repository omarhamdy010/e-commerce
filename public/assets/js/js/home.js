var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/* ---------------------------------------------
       Most Selling
    --------------------------------------------- */
    function getTopProducts(){
      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProductsMostSell?Index=0&Size=10");
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response).items
          
              displayProductTemp(Data);
          }
      }
         
  }
function displayProductTemp(Topproducts){
  for(var i =0 ;i<Topproducts.length ; i++) {
  slider=`
  <div class="swiper-slide">
    <div class="product-item hell">
    <div class="item-inner">
      <div class="product-thumbnail">
        <div class="pr-img-area"> <a title="Product title here" href="single_product.html?product_id=`+Topproducts[i].id+`">
          <figure> <img class="first-img productImg" src="http://aaaserver-001-site31.ftempurl.com`+Topproducts[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+Topproducts[i].image+`" alt="HTML template"></figure>
          </a> </div>
        <div class="pr-info-area">
          <div data-select="`+Topproducts[i].id+`" class="pr-button">
          
            <div id="`+Topproducts[i].id+`" onclick="likeProduct(this.id)" class="mt-button add_to_wishlist"> <a> <i class="fa fa-heart-o"></i> </a> </div>
            <div  id="`+Topproducts[i].id+`" onclick="follow(this.id)" class="mt-button add_to_compare follow"> <a> <i " class="fa fa-check-circle"></i> </a> </a></div>
                  <div  id="`+Topproducts[i].id+`" onclick="unfollow(this.id)" class="mt-button add_to_compare unfollow"> <a> <i " class="fa fa-times-circle"></i> </a> </a></div>
            
          </div>
        </div>
      </div>
      <div class="item-info">
        <div class="info-inner">
          <div class="item-title "> <a title="Product title here" href="single_product.html?product_id=`+Topproducts[i].id+`">`+Topproducts[i].name+` </a> </div>
          <div class="item-content">
            <div class="item-price">
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">`+Topproducts[i].lowPriceData.price+` EGP </span> </p>
              </div>
            </div>
            <div class="pro-action">
              <button type="button" id="`+Topproducts[i].id+`" onclick="addtoCart(this.id)" class="add-to-cart"><span> Add to Cart</span> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>`
    swiper.appendSlide(slider);
  }
}

function displayTopProducts(Topproducts){
  MostSelling = "";

  for(var i =0 ;i<Topproducts.length ; i++)
      {

    MostSelling+=`<div class="product-item hell">
    <div class="item-inner">
      <div class="product-thumbnail">
        <div class="pr-img-area"> <a title="Product title here" href="single_product.html?product_id=`+Topproducts[i].id+`">
          <figure> <img class="first-img productImg" src="http://aaaserver-001-site31.ftempurl.com`+Topproducts[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+Topproducts[i].image+`" alt="HTML template"></figure>
          </a> </div>
        <div class="pr-info-area">
          <div ata-select="`+Topproducts[i].id+`" class="pr-button">
          
            <div id="`+Topproducts[i].id+`" onclick="likeProduct(this.id)" class="mt-button add_to_wishlist"> <a> <i class="fa fa-heart-o"></i> </a> </div>
            <div  id="`+Topproducts[i].id+`" onclick="follow(this.id)" class="mt-button add_to_compare follow"> <a> <i " class="fa fa-check-circle"></i> </a> </a></div>
            <div  id="`+Topproducts[i].id+`" onclick="unfollow(this.id)" class="mt-button add_to_compare unfollow"> <a> <i " class="fa fa-times-circle"></i> </a> </a></div>
            
            
          </div>
        </div>
      </div>
      <div class="item-info">
        <div class="info-inner">
          <div class="item-title "> <a title="Product title here" href="single_product.html?product_id=`+Topproducts[i].id+`">`+Topproducts[i].name+` </a> </div>
          <div class="item-content">
            <div class="item-price">
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">`+Topproducts[i].lowPriceData.price+` EGP </span> </p>
              </div>
            </div>
            <div class="pro-action">
              <button type="button" id="`+Topproducts[i].id+`" onclick="addtoCart(this.id)" class="add-to-cart"><span> Add to Cart</span> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>`
  // if(Topproducts[i].lowPriceData.oldPrice == null){
  //   // alert("hello")
  //   // $(".old-price").css("display","none !important")

  // }
  
          
      }
  
  
  document.getElementById("sellingg").innerHTML = MostSelling;
//  var x=document.getElementById("old-price").value;
//  console.log(x)
   $("#computer-slider .slider-items").ready(function(){
              $("#computer-slider .slider-items").owlCarousel({
                  items: 4,
                  itemsDesktop: [1024, 4],
                  itemsDesktopSmall: [900, 3],
                  itemsTablet: [640, 2],
                  itemsMobile: [390, 1],
                  navigation: !0,
                  navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
                  slideSpeed: 500,
                  pagination: !1,
                  autoPlay: false
              });
})
var x =$('#priceId').text();

$('#priceId').css("display","none")
    if (x == "null"){
      // alert("null")
    }  

}



 /* ---------------------------------------------
        slider Home Page
    --------------------------------------------- */
    $("#owl-demo").owlCarousel({
      navigation : true
    });
    var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
    function defult(){

      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Sliders/GetSliders?Index=0&Size=10");
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response).items
              displayData(Data);
          }
      }
          
      }
      defult();


function displayData(Data)
{
   temp = "";
          
          var titles=[];
          for(var i =0 ;i<Data.length ; i++)
              {

                  temp+=`<li data-transition="fade" data-slotamount="7" data-masterspeed="10000" data-thumb="" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;"><div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="left top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="http://aaaserver-001-site31.ftempurl.com`+Data[i].image+`" data-src="http://aaaserver-001-site31.ftempurl.com`+Data[i].image+`" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(http://aaaserver-001-site31.ftempurl.com`+Data[i].image+`); background-size:102%; background-position: left top; width: 100%; height: 100%; opacity: 1; position: relative;"></div></div>
                 
                </li>`
                  titles.push(Data[i].image);
                  
              }
          
          
          document.getElementById("slider-list").innerHTML = temp;
              
}
    /* ---------------------------------------------
       Offers section
    --------------------------------------------- */
function getOffers(){

    var httprequest= new XMLHttpRequest();
    httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Offers/GetOffers?Index=0&Size=10");
    httprequest.send();
    httprequest.onreadystatechange=function(){
        if(httprequest.status==200 && httprequest.readyState==4){
            var Data=JSON.parse(httprequest.response).items
           displayoffers(Data) 
    
    }
    
    }
    
    }
    getOffers()
    function displayoffers(Data){
    Offers = "";
    for(var i =0 ;i<Data.length ; i++){
    Offers+=`<div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
    <div class="banner-block"> <a href="offer.html?offer_id=`+Data[i].id+`" > <img src="http://aaaserver-001-site31.ftempurl.com`+Data[i].image+` style="width="100%"  alt="banner sunglasses"> </a>
      <div class="text-des-container">
        <div class="text-des">
          <h2>`+Data[i].name+`</h2>
        </div>
      </div>
    </div>
  </div>`;

    }
      document.getElementById("offersSection").innerHTML= Offers;
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
    html2+='<a href="#">'+cats[i]+'</a><ul>'
    for(var j=0; j<subCats[0].items.length; ++j){
      html+='<li><a href=shop_grid.html?sub='+subCats[0].items[j].id+'>'+subCats[0].items[j].name+'</a></li>'
      html2+='<li><a href=shop_grid.html?sub='+subCats[0].items[j].id+'>'+subCats[0].items[j].name+'</a></li>'
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



  /* ---------------------------------------------
      Get special Products
    --------------------------------------------- */

  //   function getProducts(){
  //     var httprequest= new XMLHttpRequest();
  //     httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/en/api/Products/GetProducts?Index=0&Size=10");
  //     httprequest.send();
  //     httprequest.onreadystatechange=function(){
  //         if(httprequest.status==200 && httprequest.readyState==4){
  //             var Data=JSON.parse(httprequest.response).items
  //             displayProducts(Data);
  //             jQuery("#jtv-best-sale-slider .slider-items").owlCarousel({
  //                 items: 4, //10 items above 1000px browser width
  //                 itemsDesktop: [1024, 4], //5 items between 1024px and 901px
  //                 itemsDesktopSmall: [900, 3],
  //                 itemsTablet: [640, 2],
  //                 navigation: true,
  //                 navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
  //                 slideSpeed: 500,
  //                 pagination: false,
  //                 autoPlay: true
  //             });
  //         }
  //     }
         
  // }
  // getProducts()
  // function displayProducts(products){

  //     item = "";
  //      text="";
         
  //     var titles=[];
  //     for(var i =0 ;i<products.length ; i++)
  //         {

  //       item+=`<div class="product-item hell">
  //       <div class="item-inner">
  //         <div class="product-thumbnail">
  //           <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
  //             <figure> <img class="first-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"></figure>
  //             </a> </div>
  //           <div class="pr-info-area">
  //             <div class="pr-button">
  //               <div onclick="like()" class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
  //               <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
  //               <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
  //             </div>
  //           </div>
  //         </div>
  //         <div class="item-info">
  //           <div class="info-inner">
  //             <div class="item-title itemo" data-attr=`+products[i].name+`> <a title="Product title here" href="single_product.html">`+products[i].name+` </a> </div>
  //             <div class="item-content">
  //               <div class="item-price">
  //                 <div class="price-box">
  //                   <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">`+products[i].lowPriceData.price+` </span> </p>
  //                   <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
  //                 </div>
  //               </div>
  //               <div class="pro-action">
  //                 <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
  //               </div>
  //             </div>
  //           </div>
  //         </div>
  //       </div>
  //     </div>`
  //             titles.push(products[i].name);
              
  //         }
    
  //     document.getElementById("prod-item").innerHTML = item;
          
  // }

     /* ---------------------------------------------
      Get products with zero cost
    --------------------------------------------- */

    function getZeroCostProducts(){
      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProductsWithZeroCost?Index=0&Size=10");
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response).items
              
              if(Data.length == 0){
                $("#zero-section").css("display","none")
              }else{
                displayZeroProducts(Data);
                window.addEventListener("load", function () {
                  var owlOptions = {
                    items: 4, //10 items above 1000px browser width
                    itemsDesktop: [1024, 4], //5 items between 1024px and 901px
                    itemsDesktopSmall: [900, 3],
                    itemsTablet: [640, 2],
                    navigation: true,
                    navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
                    slideSpeed: 500,
                    pagination: false,
                    autoPlay: true
                  };
                  jQuery("#jtv-best-sale-slider .slider-items").owlCarousel(owlOptions)
                })
              }

          }
      }
         
  }
  getZeroCostProducts()
  function displayZeroProducts(products){

      item = "";
      var titles=[];
      for(var i =0 ;i<products.length ; i++)
          {
       
        item+=`
        <div class="product-item hell">
        <div class="item-inner">
          <div class="product-thumbnail">
            <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
              <figure> <img class="first-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"></figure>
              </a> </div>
            <div class="pr-info-area">
              <div class="pr-button">
                <div onclick="like()" class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
              </div>
            </div>
          </div>
          <div class="item-info">
            <div class="info-inner">
              <div class="item-title itemo" data-attr=`+products[i].name+`> <a title="Product title here" href="single_product.html">`+products[i].name+` </a> </div>
              <div class="item-content">
                <div class="item-price">
                  <div class="price-box">
                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">`+products[i].lowPriceData.price+` </span> </p>
                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                  </div>
                </div>
                <div class="pro-action">
                  <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>`
              titles.push(products[i].name);
              
          }
    
      document.getElementById("zero-cost").innerHTML = item;
          
        }


        function getOfferImg(){

          var httprequest= new XMLHttpRequest();
          httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Offers/GetLowCostOffer");
          httprequest.send();
          httprequest.onreadystatechange=function(){
              if(httprequest.status==200 && httprequest.readyState==4){
                  var Data=JSON.parse(httprequest.response)
                  displayofferImg(Data) 
               
                   }
          
          }
          // window.location.replace("http://127.0.0.1:5500/offer.html");
          }
          
          
          getOfferImg();
          function displayofferImg(offerImg){

            imgOffer="";
            imgOffer+=`<img style="width:96%"  src="http://aaaserver-001-site31.ftempurl.com`+offerImg.image+`" alt="offer"/>`
            // offerImg = "";
            //  console.log(offerImg.image)
            // offerImg+=`<img src="http://aaaserver-001-site31.ftempurl.com`+offerImg.image+`" alt="HTML template"/> `;
            
            document.getElementById("backgroundImg").innerHTML= imgOffer;
          }

         





          function likeProduct(event){


            var id =parseInt(event)
           
           
             var token=JSON.parse(sessionStorage.getItem('token'));
                     fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Favorites/LikeProduct",{
                         method:'POST',
                         body:JSON.stringify({
                             product_Id:id,
                             isFav:true
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
                 
                 console.log(data)
                 // console.log(email)
                 // console.log(data.token)
                 // sessionStorage.setItem("token",data.token);
             }).catch(err =>{
               console.error(err.message);
             })
             // .catch(error => console.log("invalid ") );
           
           
           
           
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