var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }

var DataComapre=[];
function addTocompare(event){
  DataComapre;
  alert(event)
  var y=$('.add_to_compare').closest('div#'+event)
  var v=$(this).css("display","none");
  console.log(v)
 
  console.log(y)
  var text=y.parent().parent().parent().parent().parent().find('.titleText').text();
$('.add_to_compare').closest('div#'+event).css("display","none")
$('.remove').closest('div#'+event).css("display","block")
DataComapre.push(text)

  for( i=0 ; i<DataComapre.length;i++ ){
    if(i>2){
      DataComapre.shift();
      alert(DataComapre)
      // alert("hello")
    }
  }
console.log(DataComapre)
// for(i=0;i<DataComapre.length;i++){
//   xas="";
//   xas+=`<a href="#" class="product-name"><i class="fa fa-angle-right"></i>`+DataComapre+`</a>`
//   console.log(DataComapre[i])
//   document.getElementById("compare-data").innerHTML = xas;
// }
let x=false;
  // if(DataComapre.length < 3){
  //   for(i=0; i< DataComapre.length;i++){
  //     if(text == this.DataComapre[0]){
  //       alert("equak")
  //       x=true
  //       break
  //     }
  //   }
  //   if(!x){
  //     alert("no")
  //     DataComapre.push(text)
  //   }

  // }
  // else{
  //   alert("yes")
  //   DataComapre.push(text)
  //   console.log(DataComapre)
  // }
  $("#compare-items").empty();
  for (i=0;i<DataComapre.length;i++){
    // var xas=DataComapre[i].split("+")
    // console.log(xas)
    $("#compare-items").append(
      ' <li class="item"data-name="'+DataComapre[i]+'"> <a  title="Remove This Item" class="remove-cart"><i id="'+DataComapre[i]+'" onclick="removefromDiv(event)" data-remove="'+DataComapre[i]+'" class="icon-close"></i></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>'+DataComapre[i]+'</a> </li>'
    )
  }
}


function removeTocompare(event){
  DataComapre;
  var y=$('.add_to_compare').closest('div#'+event)
  var v=$(this).css("display","none");
  console.log(v)
 
  console.log(y)
  var text=y.parent().parent().parent().parent().parent().find('.titleText').text();
  $("li[data-name='"+text+"']").css("display","none");

  for(i=0;i<DataComapre.length;i++){
    if(text==DataComapre[i]){
      DataComapre.splice(i,1);
    }
    
  }
  console.log(DataComapre)
$('.add_to_compare').closest('div#'+event).css("display","block")
$('.remove').closest('div#'+event).css("display","none")
// for (i=0;i<DataComapre.length;i++){
//   // if()
// }
}
function removefromDiv(e){
  var dataRemove=e.target.getAttribute('data-remove');
  $("li[data-name='"+dataRemove+"']").css("display","none");
  $("div[data-icon-remove='"+dataRemove+"']").css("display","none");
  $("div[data-icon-compare='"+dataRemove+"']").css("display","block");
    for(i=0;i<DataComapre.length;i++){
    if(dataRemove==DataComapre[i]){
      alert("tes")
      DataComapre.splice(i,1);
    }
  }
  console.log(DataComapre)
// console.log(e.target.getAttribute('data-remove'))
// console.log($(this))
// console.log($(this).parent().parent().css("display","none"))
//   console.log($(this).attr("data-remove"))
  // var y=$('.add_to_compare').closest('div#'+event)
  // var liText=$("i[data-remove]").closest("li").text();
  // var text=y.parent().parent().parent().parent().parent().find('.titleText').text();
  // alert(text)
  //  for(i=0;i<DataComapre.length;i++){
  //   if(liText==DataComapre[i]){
  //     alert("tes")
  //     DataComapre.splice(i,1);
  //   }
  // }
  // console.log(DataComapre)
  // $("i[data-remove]").closest("li").css("display","none");

}
function clearAll(){
  this.DataComapre=[];
  $("#compare-items").empty();
  $('.remove').css("display","none" );
  $('.add_to_compare').css("display","block");

}

function emptyData(){
  document.getElementById("empty-message").innerHTML="<p>There is no Data Here</p>"
}
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
 
    
          
      }
  
  
  document.getElementById("brands").innerHTML = BrandItem ;
  
}
function remove(){
  sessionStorage.removeItem('token')
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
// var orders=[];
// if(localStorage.getItem("orders")){
//   var x=localStorage.getItem("orders")
//   var z=JSON.parse(x)
//   console.log("length"+z.length)
//     for( i =0 ;i<z.length ; i++)
//     {
//    orders.push(z[i])
//     }
//   // orders.push(x)
//   console.log(z.length)
// }else{
//   orders=[];
// }
// function addtoCart(event){


//   var httprequest= new XMLHttpRequest();
//   httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Products/GetProduct/"+event);
//   httprequest.send();
//   httprequest.onreadystatechange=function(){
//       if(httprequest.status==200 && httprequest.readyState==4){
//           var Data=JSON.parse(httprequest.response)
//         //  var prices=JSON.parse(httprequest.response)
//       //  console.log(Data)
//       orders;
//        orders.push(Data)
     
// localStorage.setItem("orders",JSON.stringify(orders));
// var x=localStorage.getItem("orders")
//         //  displayhtml(Data) 
//         //  console.log(Data.image)
//         //  displayPrices(price, Data.image, Data.name)
// //         var orders=JSON.stringify(Data)
// // localStorage.setItem("orders",orders)
// // console.log(orders)
// // var x=localStorage.getItem("orders")
// //     var orders= JSON.stringify(Data);
  
//   }
//   console.log(orders)
 
//   // displayDataCart()
 
//   }
// }

// var x=localStorage.getItem("orders")
// console.log(x)
// var z=JSON.parse(x)
// console.log(z.length)
// var y=""
// function displayDataCart(){
//     productDe = "";
//     for(var i =0 ;i<z.length ; i++)
//     {
//         productDe+=`<tr><td id=`+z[i].id+` onclick=remove(this.id) class="th-delate"><a>X</a></td>
//         <td class="th-product"><a href="#"><img src="http://aaaserver-001-site31.ftempurl.com`+z[i].image+`" alt="cart"></a></td>
//         <td class="th-details"><h2><a href="#">`+z[i].name+`</a></h2></td>
//         <td class="th-price">`+z[i].lowPriceData.price+`</td>
//         </tr>
//       `;
   
// // y=z[i].id
// y=z[i].name
//     }
//     document.getElementById("cartData").innerHTML= productDe;

//   }
//   console.log(z)

//   function remove(event){
//       console.log(z)
//       for( i=0; i<z.length;i++){
//           if(event==z[i].id){
//             z.splice(i,1);
//             console.log(z)
//             localStorage.setItem("orders",JSON.stringify(z))
         
//            displayDataCart()

       
//       } 
//     }
   
//     //  var getItem=localStorage.getItem("orders");

//     //  getItem.splice(event,1)
//     // for(var i =0 ;i<z.length ; i++)
//     // {
//     //     if(y==z[i].name){
//     //         alert("yes")
//     //         alert(i)
//     //         z.splice(i,1)
//     // }
// }
 
  
//   displayDataCart()

