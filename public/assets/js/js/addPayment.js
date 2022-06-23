
var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
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
document.getElementById("Payment").innerHTML='<p>There is No Payment</p>'
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
          
          
          document.getElementById("Payment").innerHTML = Payment;
              
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
  

var paymentForm=document.getElementById("paymentForm");
paymentForm.addEventListener('submit', async function(evt){
        evt.preventDefault();
        var cardHolderName=document.getElementById("cardHolderName").value;
        var cardNumber=document.getElementById("cardNumber").value;
        var cvv=document.getElementById("cvv").value;
        var cardExpDate=document.getElementById("cardExpDate").value;
      
  var token=JSON.parse(sessionStorage.getItem('token'));
        
               await fetch("http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/PaymentMethods/AddPaymentMethod",{
                    method:'POST',
                    body:JSON.stringify({
                        cardHolderName:cardHolderName ,
                        cardNumber: cardNumber,
                        cardExpDate: cardExpDate,
                        cvv: cvv,
                              }),
                              headers:{
                                "Authorization":`Bearer ${token}`,
                                "Content-Type": "application/json;"
                                    }
                }).then(function(response){
                    console.log(response.status); // Will show you the status
                    if (!response.ok) {
                        throw new Error("HTTP status " + response.status);
                        
                    } 
                    paymentForm.reset();
                    return response.json();
                    
                
                })
            
        .then(function(data){
            
            getPayment();
            paymentForm.reset
        }) 
    
  
    
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