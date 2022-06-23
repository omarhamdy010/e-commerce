
var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
function getAddress()
{

var token=JSON.parse(sessionStorage.getItem('token'));
var httprequest= new XMLHttpRequest();
httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Address/GetAddresses?Index=0&Size=10",true);
httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
httprequest.send();
httprequest.onreadystatechange=function(){
    if(httprequest.status==200 && httprequest.readyState==4){
        var Data=JSON.parse(httprequest.response).items
   console.log(Data)
  
   diplayAddress(Data)
   
   if(Data == null){
document.getElementById("address").innerHTML='<p>There is no address</p>'
   }

}
}
}
getAddress();

async function diplayAddress(Data)
{
    address = "";
          for(var i =0 ;i<Data.length ; i++)
              {

                  address+=`
                  <div style=" border-bottom: 1px solid #ececec; margin-bottom:20px">
                  <i class="fa fa-map-marker" style="margin-right:10px"></i>
                  <label for="`+Data[i].id+`" style="margin-left:10px" >`+Data[i].street+","+Data[i].building+","+Data[i].floor+","+Data[i].apartment+`</label>
                  <input data-street="`+Data[i].street+`" data-building="`+Data[i].building+`" data-floor="`+Data[i].floor+`" data-apartment="`+Data[i].apartment+`" data-discription="`+Data[i].discription+`"type="radio" id="`+Data[i].id+`" name="address" style="float:right" value="`+Data[i].id+`"/>
                 <div class="clear"></div>
                  </div>
                  `
                  
              }
          
          
          document.getElementById("checkoutAddress").innerHTML = address;
              
}
      
function getPayment()
{

var token=JSON.parse(sessionStorage.getItem('token'));
var httprequest= new XMLHttpRequest();
httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/PaymentMethods/GetPaymentMethods?Index=0&Size=10",true);
httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
httprequest.send();
httprequest.onreadystatechange=function(){
    if(httprequest.status==200 && httprequest.readyState==4){
        getSettings(); 
        var Data=JSON.parse(httprequest.response).items
   console.log(Data)
  
   displayPayment(Data)
   
   if(Data == null){
document.getElementById("address").innerHTML='<p>There is No Payment</p>'
   }

}
}
}

getPayment();

async function displayPayment(Data)
{
    Payment = "";
          for(var i =0 ;i<Data.length ; i++)
              {

                Payment+=`
                  <div style=" border-bottom: 1px solid #ececec; margin-bottom:20px">
                  <i class="fa fa-credit-card"></i>
                  <label for="`+Data[i].id+`" style="margin-left:10px" >`+Data[i].cardHolderName+`</label>
                  <input type="radio" id="`+Data[i].id+`" name="payment" style="float:right" value="`+Data[i].cardHolderName+`"/>
                 <div class="clear"></div>
                  </div>
                  `
                  
              }
          
          
          document.getElementById("checkPayment").innerHTML = Payment;
              
}
function getSettings(){
    
    var token=JSON.parse(sessionStorage.getItem('token'));
    var httprequest= new XMLHttpRequest();
    httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Settings/CheckVisaAvailable?Index=0&Size=10",true);
    httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
    httprequest.send();
    httprequest.onreadystatechange=function(){
        if(httprequest.status==200 && httprequest.readyState==4){
            var Data=JSON.parse(httprequest.response)
            console.log(Data)
    }
    }
    }
    function clearIn(){
        $(".promo").val("");
    }
    $("#coupon").keyup(function (event){
        var sttr=$(this).val();
        console.log(sttr)
        var token=JSON.parse(sessionStorage.getItem('token'));
        var httprequest= new XMLHttpRequest();
        httprequest.open("POST","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Orders/CheckCode/"+sttr,true);
        httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
        httprequest.send();
        httprequest.onreadystatechange=function(){
            if(httprequest.status==200 && httprequest.readyState==4){
                var Data=JSON.parse(httprequest.response)
                if(Data.promoCodeFound == false){
                    document.getElementById("promoError").innerHTML="<p>There is no promo code with this number</p>"
                }
                console.log(Data)
        }
        }
    })

    var x=localStorage.getItem("orders")
    console.log(x)
    var z=JSON.parse(x)
 
var y=""
function displayDataCart3(){
    var x=localStorage.getItem("orders")
    console.log(x)
    var z=JSON.parse(x)
    productDe = "";
    for(var i =0 ;i<z.length ; i++)
    {
        
       
        productDe+=`<div class="col-md-6 content" style="text-align:center">
        <div class="checkOut">
      
        <div class="col-md-4">
        <img src="`+z[i].image+`"/>
        </div>
        <div style="text-align:left" class="col-md-6">
        <p> <span style="color:#f45400 ; font-size:17px" >`+z[i].name+`</span></p>

        <p> <span>price :</span>`+z[i].price+`</p>
        <p> QTY :`+z[i].quantity+`</p>
        
        </div>
        <div class="col-md-1">
        <span style="float:right" id=`+z[i].id+` onclick=remove(this.id) class="th-delate"><a href="checkout.html">X</a></span>
        </div>
        </div>
        </div>
     `;
     item=`<h2 style="color:#000082; font-weight:600">`+z.length+" "+`Items</h2>`;
// y=z[i].id
y=z[i].name
    }
    document.getElementById("checkOut").innerHTML= productDe;
    document.getElementById("itemCount").innerHTML=item;
  }
  

  function remove(event){
      console.log(z)
      for( i=0; i<z.length;i++){
          if(event==z[i].id){
            z.splice(i,1);
            localStorage.setItem("orders",JSON.stringify(z))
            displayDataCart3()
          }
          
      }
      
     
}
displayDataCart3()
 var subTotal=0
 var savedMoney=0;
 var id;
 var market_id;
 var quantity;
 var Total;
async function getSubTotal() {
    var x=localStorage.getItem("orders")
    var deliveyFees=parseInt(localStorage.getItem("deliveyFees"))
    console.log(x)
    var z=JSON.parse(x)
    for(var i =0 ;i<z.length ; i++)
    {
       subTotal+=z[i].price*z[i].quantity
      id=parseInt(z[i].id);
      market_id=parseInt(z[i].market_id)
      quantity=parseInt(z[i].quantity); 
    
await fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Orders/CalculateOrderSavedMoney",{
    method:'POST',
    body:JSON.stringify([{
       product_Id:id,
       quantity:quantity,
       market_Id:market_id          
    },


]),
    headers:{
        "Content-Type":"application/json;"
    }
}).then(function(response){
    return response.json();
})
.then(function(data){
console.log(data)
savedMoney+=data

Total=subTotal+20
console.log(Total)
})
}

document.getElementById("Total").innerHTML=" <p style=float:left;color:#000082;font-weight:700>Total</p> <p style=float:right;color:#000082;font-weight:700>"+Total+" "+"EGP</p> <div class=clear></div>"
document.getElementById("SavedMoney").innerHTML=" <p style=float:left;color:#000082;font-weight:700>You Saved</p> <p style=float:right>"+savedMoney+" "+"EGP</p> <div class=clear></div>"
document.getElementById("subTotal").innerHTML=" <p style=float:left;color:#000082;font-weight:700>SubTotal</p> <p style=float:right>"+subTotal+ " "+"EGP</p> <div class=clear></div>"
document.getElementById("Delivery").innerHTML=" <p style=float:left;color:#000082;font-weight:700>Deliver Fees</p> <p style=float:right>"+deliveyFees+"</p> <div class=clear></div>"



}

getSubTotal()


  async function checkouttt(){
    var latitude=parseInt(localStorage.getItem("latitude"))
    var longitude=parseInt(localStorage.getItem("longitude"))
    var id=""
    var street=$('input[name="address"]:checked').attr("data-street")
    var floor=$('input[name="address"]:checked').attr("data-floor")
    var apartment=$('input[name="address"]:checked').attr("data-apartment")
    var building=$('input[name="address"]:checked').attr("data-building")
    var discription=$('input[name="address"]:checked').attr("data-discription")

    var market_id=""
    var quantity=""
      var promo =(document.getElementById("coupon").value)
      console.log(promo)
      for(var i =0 ;i<z.length ; i++)
    {
       subTotal+=z[i].price*z[i].quantity
      id=parseInt(z[i].id);
      market_id=parseInt(z[i].market_id)
      quantity=parseInt(z[i].quantity); 
}
console.log(id)
console.log(quantity)
var token=JSON.parse(sessionStorage.getItem('token'));
    await fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Orders/AddOrder",{
        method:'POST',
        body:JSON.stringify({
            paid:true,
            paymentWay:0,
            street:street,
            building:building,
            floor:floor,   
            apartment:apartment,
            longitude:0,
            latitude:0,
            discription:discription,
            orderDetails:[{
                product_Id:id,
                quantity:quantity,
                market_Id:market_id
            },
           
        ],
        Zone_Id:1,
        promoCode:""
       

       
        }),
        headers:{
            "Authorization":`Bearer ${token}`,
            "Content-Type":"application/json;"
        }
    }).then(function(response){
        return response.json();
    })
.then(function(data){
console.log(data)
})
console.log(quantity)
console.log(subTotal)
  }

  async function orderPreview(){
    var latitude=parseInt(localStorage.getItem("latitude"))
    var longitude=parseInt(localStorage.getItem("longitude"))
    var id=""
    var street=$('input[name="address"]:checked').attr("data-street")
    var floor=$('input[name="address"]:checked').attr("data-floor")
    var apartment=$('input[name="address"]:checked').attr("data-apartment")
    var building=$('input[name="address"]:checked').attr("data-building")
    var discription=$('input[name="address"]:checked').attr("data-discription")

    var market_id=""
    var quantity=""
      var promo =(document.getElementById("coupon").value)
      console.log(promo)
      for(var i =0 ;i<z.length ; i++)
    {
       subTotal+=z[i].price*z[i].quantity
      id=parseInt(z[i].id);
      market_id=parseInt(z[i].market_id)
      quantity=parseInt(z[i].quantity); 
}
console.log(id)
console.log(quantity)
var token=JSON.parse(sessionStorage.getItem('token'));
   await fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Orders/OrderPreview",{
        method:'POST',
        body:JSON.stringify({
            paid:true,
            paymentWay:0,
            street:street,
            building:building,
            floor:floor,   
            apartment:apartment,
            longitude:0,
            latitude:0,
            discription:discription,
            orderDetails:[{
                product_Id:id,
                quantity:quantity,
                market_Id:market_id
            },
           
        ],
        Zone_Id:1,
        promoCode:""
       

       
        }),
        headers:{
            "Authorization":`Bearer ${token}`,
            "Content-Type":"application/json;"
        }
    }).then(function(response){
        return response.json();
    })
.then(function(data){
console.log(data)
})
console.log(quantity)
console.log(subTotal)
  }
  orderPreview()
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
    document.getElementById("brands-mobile").innerHTML=brandMobile
    
  }




async function checkDelivey() {
  var token=JSON.parse(sessionStorage.getItem('token'));
  var x=localStorage.getItem("orders")
  console.log(x)
  var z=JSON.parse(x)
  for(var i =0 ;i<z.length ; i++)
  {
     subTotal+=z[i].price*z[i].quantity
    id=parseInt(z[i].id);
    market_id=parseInt(z[i].market_id)
    quantity=parseInt(z[i].quantity); 
  
await  fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Orders/CheckOrderDelivery",{
  method:'POST',
  
    body:JSON.stringify([{
      product_Id:id,
      quantity:quantity,
      market_Id:market_id,          
   }  
]),
  headers:{
    "Authorization":`Bearer ${token}`,
      "Content-Type":"application/json;"
  }
}).then(function(response){
  return response.json();
})
.then(function(data){
localStorage.setItem("deliveyFees",data)

})
}




}
checkDelivey();