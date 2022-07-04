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
var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }

function productdetailes(){

    var queryString = window.location.search;

    var urlParams = new URLSearchParams(queryString);

    var product_id = urlParams.get('product_id')
    var httprequest= new XMLHttpRequest();
    httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProduct/"+product_id);
    httprequest.send();
    httprequest.onreadystatechange=function(){
        if(httprequest.status==200 && httprequest.readyState==4){
            var Data=JSON.parse(httprequest.response)
            var price=JSON.parse(httprequest.response).prices
          //  var prices=JSON.parse(httprequest.response)

           displayhtml(Data)
           console.log(Data.image)
           console.log("prodDe"+Data.isFav)
           displayPrices(price,Data.id, Data.image, Data.name)



    }

    }

    }
    // var image="";
    function displayhtml(Data , prices){
      productDe = " ";
      productDe+=`<div class="product-view-area">
      <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
        <div class="large-image"> <a href="http://aaaserver-001-site31.ftempurl.com`+Data.image+`" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="http://aaaserver-001-site31.ftempurl.com`+Data.image+`" alt="products"> </a> </div>
        <div class="flexslider flexslider-thumb">
          <ul class="previews-list slides">
            <li><a  class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/product-1.jpg' "><img src="http://aaaserver-001-site31.ftempurl.com`+Data.subCategory.image+`" alt = "Thumbnail 2"/></a></li>
            <li><a href='images/products/product-1.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'http://aaaserver-001-site31.ftempurl.com`+Data.subCategory.image+`' "><img src="http://aaaserver-001-site31.ftempurl.com`+Data.brand.image+`" alt = "Thumbnail 1"/></a></li>


          </ul>
        </div>


      </div>
      <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area" >
        <div class="product-name" >
           <h1>`+Data.name+`</h1>
        </div>
        <div class="price-box">
          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">`+Data.lowPriceData.price+`EGP</span> </p>
        </div>

        <div class="short-description">
          <h2 style="display:inline-block">Sold by</h2>
          <span>`+Data.lowPriceData.marketName+`</span>
        </div>
        <div class="product-color-size-area">

          <div class="size-area">

          </div>
        </div>
        <div class="product-variation">
          <form action="#" method="post">
            <div class="cart-plus-minus">
              <label for="qty">Quantity:</label>
              <div class="numbers-row">
                <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
              </div>
            </div>
            <button id="`+Data.id+`" onclick="addtoCart(this.id)" class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-basket"></i> Add to Cart</span></button>
          </form>
        </div>
        <div class="product-cart-option">
          <ul>
            <li id="`+Data.id+`" onclick="likeProduct(this.id)" ><a><i class="fa fa-heart-o"></i><span>Add to Wishlist</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i><span>Add to Compare</span></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
          </ul>
        </div>
        <div class="pro-tags">
          <div class="pro-tags-title">Brand:</div>
          <a href="#">`+Data.brand.name+`</a></div>
          <div style="display:inline-block" class="pro-tags-title">subCtagory:</div>
          <a href="#">`+Data.subCategory.name+`</a></div>

      </div>
    </div>`;
      // console.log(Data.image)
    image=Data.image
      console.log(image)
      document.getElementById("productDet").innerHTML= productDe;
      console.log("valueee"+ document.getElementById("qty").value)
    }
    // function getImage(){
    //   console.log("this is "+image)
    // }
// getImage()
    function displayPrices(prices,id,image,name){
  shopitemprod = "";

  for(var i =0 ;i<prices.length ; i++)
      {
    shopitemprod+=`<div class="col-md-3" style="text-align:center">
    <img src="http://aaaserver-001-site31.ftempurl.com`+image+`"/>
    <p>`+name+`</p>
    <p>sold by <span style="color:#f45400">`+prices[i].marketName+`</span></p>
    <p> `+prices[i].price+`</p>
    <button id="`+id+`" onclick="addtoCart(this.id)" class="button pro-add-to-cart" class="btn">Add to cart</button>
    </div>`



      }
      document.getElementById("prices").innerHTML= shopitemprod;
    }

    function RecommendedProducts(){

      var queryString = window.location.search;

      var urlParams = new URLSearchParams(queryString);

      var product_id = urlParams.get('product_id')
      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetRecommendedProducts/"+product_id+"?Index=0&Size=10");
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response).items
              console.log("this new " +Data)
              displayTempRecommended(Data)
      }

      }
    }
    RecommendedProducts();
    function displayTempRecommended(Topproducts) {
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
    function displayRecommended(products){
      shopitemprod = "";

for(var i =0 ;i<products.length ; i++)
    {
  shopitemprod+=`
  <div class="product-item">
  <div class="item-inner">
    <div class="product-thumbnail">
      <div class="pr-img-area"> <a title="Product title here" href="single_product.html?product_id=`+products[i].id+`">
        <figure> <img class="first-img imageSize" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"></figure>
        </a> </div>
      <div class="pr-info-area">
        <div class="pr-button">
          <div data-select="`+products[i].id+`"  id="`+products[i].id+`" class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>


        </div>
      </div>
    </div>
    <div class="item-info">
      <div class="info-inner">
        <div class="item-title"> <a title="Product title here" href="single_product.html">`+products[i].name+`</a> </div>
        <div class="item-content">
          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
          <div class="item-price">
            <div class="price-box"> <span class="regular-price"> <span class="price">`+products[i].lowPriceData.price+`EGP</span> </span> </div>
          </div>
          <div class="pro-action">
            <button type="button"  id="`+products[i].id+`" onclick="addtoCart(this.id)" class="add-to-cart"><span> Add to Cart</span> </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>`



    }


document.getElementById("recommended").innerHTML = shopitemprod;


    }
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
