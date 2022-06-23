var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
function productdetailes(){

  var queryString = window.location.search;

  var urlParams = new URLSearchParams(queryString);
  
  var offer_id = urlParams.get('offer_id')
  var httprequest= new XMLHttpRequest();
  httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Offers/GetOfferProducts/"+offer_id+"?Index=0&Size=10");
  httprequest.send();
  httprequest.onreadystatechange=function(){
      if(httprequest.status==200 && httprequest.readyState==4){
          var Data=JSON.parse(httprequest.response).items
          if(Data.length == 0){
            message= "There is no offers Now";
            document.getElementById("offersProducts").innerHTML= message;
           }else{
         displayofferProducts(Data) 
         dispaypagesNumber(pagesCount,pageNum)
           }
  
  }
  // window.location.replace("http://127.0.0.1:5500/offer.html");
  }
  
  }
  productdetailes();
  function displayofferProducts(products){
    productDe = " ";
    for(var i =0 ;i<products.length ; i++)
    {
    productDe+=`<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
    <div class="product-item">
      <div class="item-inner">
        <div class="product-thumbnail">
    
          <div class="pr-img-area"> <a href="single_product.html?product_id=`+products[i].id+`" title="Ipsums Dolors Untra" >
            <figure> <img class="first-img imageSize " src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"> <img class="hover-img" src="http://aaaserver-001-site31.ftempurl.com`+products[i].image+`" alt="HTML template"></figure>
            </a> </div>
          <div class="pr-info-area">
            <div data-select="`+products[i].id+`" class="pr-button">

              <div data-select="`+products[i].id+`"  id="`+products[i].id+`" onclick="likeProduct(this.id)"  class="mt-button add_to_wishlist"> <a > <i class="fa fa-heart"></i> </a> </div>
              <div data-icon-compare=" `+products[i].name+` " id="`+products[i].id+`" onclick="addTocompare(this.id)" class="mt-button add_to_compare"> <a> <i " class="fa fa-signal"></i> </a> </a></div>
              <div data-icon-remove=" `+products[i].name+` " id="`+products[i].id+`" onclick="removeTocompare(this.id)" class="mt-button  remove">  <a> <i  class="fa fa-close"></i> </a></div>
              <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
            </div>
          </div>
        </div>
        <div class="item-info">
          <div class="info-inner">
            <div class="item-title titleText" > <a data-attr="`+products[i].name+`" title="Ipsums Dolors Untra" href="single_product.html?product_id=`+products[i].id+`">`+products[i].name+`</a> </div>

            <div class="item-content">

              <div class="item-price">
                <div class="price-box"> <span class="regular-price"> <span class="price">`+products[i].lowPriceData.price+` EGP</span> </span> </div>
              </div>
              <div class="pro-action">
                <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </li>`;
    }
    document.getElementById("offersProducts").innerHTML= productDe;
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




    function getOfferImg(){

      var httprequest= new XMLHttpRequest();
      httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Offers/GetLowCostOffer");
      httprequest.send();
      httprequest.onreadystatechange=function(){
          if(httprequest.status==200 && httprequest.readyState==4){
              var Data=JSON.parse(httprequest.response)
              displayofferImg(Data) 
              console.log(Data.image)
           
               }
      
      }
      // window.location.replace("http://127.0.0.1:5500/offer.html");
      }
      
      
      getOfferImg();
      function displayofferImg(offerImg){
        console.log(offerImg.image)
        imgOffer="";
        imgOffer+=`<img style="width:96%"  src="http://aaaserver-001-site31.ftempurl.com`+offerImg.image+`" alt="offer"/>`
        // offerImg = "";
        //  console.log(offerImg.image)
        // offerImg+=`<img src="http://aaaserver-001-site31.ftempurl.com`+offerImg.image+`" alt="HTML template"/> `;
        
        document.getElementById("backgroundImg").innerHTML= imgOffer;
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