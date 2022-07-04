var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }

function productdetailes(){

    var queryString = window.location.search;

    var urlParams = new URLSearchParams(queryString);

    var order_id = urlParams.get('order_id')
    var httprequest= new XMLHttpRequest();
    httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Orders/GetOrder/"+order_id);
    httprequest.send();
    httprequest.onreadystatechange=function(){
        if(httprequest.status==200 && httprequest.readyState==4){
            var Data=JSON.parse(httprequest.response)
            var price=JSON.parse(httprequest.response).prices
          //  var prices=JSON.parse(httprequest.response)

           displayhtml(Data)
           console.log(Data.image)
           displayPrices(price, Data.image, Data.name)



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
