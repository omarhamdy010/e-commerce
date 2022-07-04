var queryString = window.location.search;
var lang = "en"
var urlParams = new URLSearchParams(queryString);
if (urlParams.get('lang')) {
    lang = urlParams.get('lang')
}
var x = localStorage.getItem("orders")
console.log(x)
var z = {};
if (x) {
    var z = JSON.parse(x)
}

var y = ""

var orders = [];
if (localStorage.getItem("orders")) {
    var x = localStorage.getItem("orders")
    var z = JSON.parse(x)
    console.log("length" + z.length)
    for (i = 0; i < z.length; i++) {
        orders.push(z[i])
    }
    // orders.push(x)
    console.log(z.length)
} else {
    orders = [];
}
console.log(lang)

function addtoCart(event) {
    var quant = 1;
    if (document.getElementById("qty")) {
        var quantCard = $("#qty").val();
        console.log(quantCard)
        quant = parseInt(quantCard)
    }
    var httprequest = new XMLHttpRequest();
    httprequest.open("GET", "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Products/GetProduct/" + event);
    httprequest.send();
    httprequest.onreadystatechange = function () {
        if (httprequest.status == 200 && httprequest.readyState == 4) {
            var Data = JSON.parse(httprequest.response)
            //  var prices=JSON.parse(httprequest.response)
            //  console.log(Data)
            orders;
            var vb = {
                id: Data.id,
                name: Data.name,
                price: Data.lowPriceData.price,
                quantity: quant,
                market_id: Data.lowPriceData.market_Id,
                image: "http://aaaserver-001-site31.ftempurl.com" + Data.image
            }
            //  orders.push(vb)

            var b = false
            console.log("this is id" + vb.id)

            var x = localStorage.getItem("orders")
            console.log(x)
            var z = JSON.parse(x)
            var b = false
            if (x) {
                for (i = 0; i < z.length; i++) {
                    if (z[i].name == Data.name) {
                        b = true;

                        quant = quant + parseInt(z[i].quantity)
                        var product = {
                            id: z[i].id,
                            name: z[i].name,
                            price: z[i].price,
                            quantity: quant,
                            image: z[i].image
                        }

                        orders.splice(i, 1);
                        orders.push(product)
                        console.log(product)
                        // // vb.quantity+=1
                        // console.log(vb.quantity)
                        // console.log(vb.quantity)
                        // quant+=vb.quantity
// z[i].quantity+=quant

                        localStorage.setItem("orders", JSON.stringify(orders));
                        console.log(z[i].quantity)

                        // console.log(quant)
                    }
                }
            }
            if (b === false) {
                orders.push(vb)
                localStorage.setItem("orders", JSON.stringify(orders));
                console.log(orders)
            }


            displayDataCart2()
        }


        // console.log(orders)

        // displayDataCart()

    }
}


function displayDataCart20() {
    var x = localStorage.getItem("orders");
    console.log(x);
    if (x) {
        var z = JSON.parse(x);
        // for( i =0 ;i<z.length ; i++)
        // {
        // }
        if (document.getElementById("cartNo")) {
            document.getElementById("cartNo").innerHTML = `<i class="icon-basket-loaded icons"></i> <span class=cart-total>` + z.length + `</span>`
        }
    }

}

displayDataCart20();

function displayDataCart() {

    var x = localStorage.getItem("orders");


    productDe = "";
    var total = 0;
    if (x) {
        var z = JSON.parse(x)
        for (i = 0; i < z.length; i++) {
            total += z[i].quantity * z[i].price
            console.log(z[i].id)

            productDe += `<tr><td id=` + z[i].id + ` onclick=remove(this.id) class="th-delate"><a>X</a></td>
        <td class="th-product"><a href="#"><img src=` + z[i].image + `" alt="cart"></a></td>
        <td class="th-details"><h2><a href="#">` + z[i].name + `</a></h2></td>
        <td class="th-price">` + z[i].price + `</td>
        <td class="th-price">` + z[i].quantity + `</td>
        <td class="th-price">` + z[i].quantity * z[i].price + `</td>
        </tr>
      `;
            allPrice = `<tr>
   <td colspan="3"><strong>Total</strong></td>
   <td colspan="2"><strong>` + total + `</strong></td>
 </tr>`
        }
        if (document.getElementById("cartData")) {
            document.getElementById("cartData").innerHTML = productDe;
        }
        document.getElementById("Total").innerHTML = allPrice;
    }
}


function remove(event) {

    console.log(z)
    for (i = 0; i < z.length; i++) {
        if (event == z[i].id) {
            z.splice(i, 1);
            console.log(z)
            localStorage.setItem("orders", JSON.stringify(z))

            displayDataCart()
            displayDataCart2()


        }
    }

    //  var getItem=localStorage.getItem("orders");

    //  getItem.splice(event,1)
    // for(var i =0 ;i<z.length ; i++)
    // {
    //     if(y==z[i].name){
    //         alert("yes")
    //         alert(i)
    //         z.splice(i,1)
    // }
}


displayDataCart();

// function displayDataCart2(){

//     productDe = "";
//     for(var i =0 ;i<z.length ; i++)
//     {

//       productDe=` <li class="item odd"> <a href="shopping_cart.html" title="`+z[i].name+`" class="product-image"><img src="http://aaaserver-001-site31.ftempurl.com`+z[i].image+`" alt="html Template" width="65"></a>
//       <div id=`+z[i].id+` onclick=remove(this.id) class="product-details"> <a  title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
//         <p class="product-name"><a href="shopping_cart.html">`+z[i].name+`</a> </p>
//         <strong>1</strong> x <span class="price">`+z[i].lowPriceData.price+`</span> </div>
//     </li>`;
// // y=z[i].id
// y=z[i].name
//     }
//     document.getElementById("cart-sidebar").innerHTML=productDe;
//     document.getElementById("cartNo").innerHTML=`<i class="icon-basket-loaded icons"></i> <span class=cart-total>`+z.length+`</span>`

//   }
//  displayDataCart2();

//   function remove2(event){
//       console.log(z)
//       for( i=0; i<z.length;i++){
//           if(event==z[i].id){
//             z.splice(i,1);
//             localStorage.setItem("orders",JSON.stringify(z))
//           }
//           displayDataCart2();
//       }


// categories Ahmed Samir
function categories() {

    var httprequest = new XMLHttpRequest();
    httprequest.open("GET", "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Categories/GetMainCategories?Index=0&Size=10");
    httprequest.send();
    httprequest.onreadystatechange = function () {
        if (httprequest.status == 200 && httprequest.readyState == 4) {
            var allMainCatData = JSON.parse(httprequest.response).items
            // getCategories(allMainCatData)
            saveMain(allMainCatData);
            console.log(allMainCatData);
            jQuery('.mega-menu-title').on('click', function () {
                if (jQuery('.mega-menu-category').is(':visible')) {
                    jQuery('.mega-menu-category').slideUp();
                } else {
                    jQuery('.mega-menu-category').slideDown();
                }
            });

            jQuery('.mega-menu-category .nav > li').hover(function () {
                jQuery(this).addClass("active");
                jQuery(this).find('.popup').stop(true, true).fadeIn('slow');
            }, function () {
                jQuery(this).removeClass("active");
                jQuery(this).find('.popup').stop(true, true).fadeOut('slow');
            });


            jQuery('.mega-menu-category .nav > li.view-more').on('click', function (e) {
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
    for (var i = 0; i < allMainCatData.length; ++i) {
        mainC[allMainCatData[i].name] = [];
        idMain[allMainCatData[i].name] = allMainCatData[i].id
    }
    $.each(mainC, function (key, value) {
        var idd = idMain[key];
        var httprequest = new XMLHttpRequest();
        httprequest.open("GET", "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Categories/GetCategories/" + idd + "?Index=0&Size=10");
        httprequest.send();
        httprequest.onreadystatechange = function () {
            if (httprequest.status == 200 && httprequest.readyState == 4) {
                var allCatData = JSON.parse(httprequest.response).items;
                saveCat(allCatData, key);
            }
        }
    })

}

var catIds = {};
var catWithSub = {};

function saveCat(allCatData, key) {
    for (var i = 0; i < allCatData.length; ++i) {
        mainC[key].push(allCatData[i].name);
        catIds[allCatData[i].name] = allCatData[i].id;
        catWithSub[allCatData[i].name] = [];
    }
    var catss = mainC[key];
    var counter = 0;
    window.getData = function () {
        /* This IF block has nothing to do with the OP. It just resets everything so the demo can be ran more than once. */
        if (counter === catss.length) {
            // return;
            console.log(catWithSub);
        }
        var id = catIds[catss[counter]];
        var category = catss[counter];
        $.ajax({
            /* The whisperingforest.org URL is not longer valid, I found a new one that is similar... */
            url: "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Categories/GetSubCategories/" + id + "?Index=0&Size=10",
            async: true,
            dataType: 'json',
            success: function (data) {
                catWithSub[category].push(data);
                counter++;
                if (counter < catss.length) getData();
                else {
                    displayof();
                }
            }

        });
    }
    getData();
}

function displayof() {

    $.each(mainC, function (key, value) {
        var mainCategory = key;
        var html = '<li><a href="#">' + mainCategory + '</a><div class="wrap-popup"><div class="popup"><div class="row">'
        var html2 = '<a href="#">' + mainCategory + '</a><ul>'
        var cats = mainC[key];

        for (var i = 0; i < cats.length; ++i) {
            var subCats = catWithSub[cats[i]];
            if (i % 2 == 0) {
                var has_sep_class = i > 0 ? "has-sep" : "";
                html += '<div class="col-md-4 col-sm-6 ' + has_sep_class + '">';
            }
            html += '<h3>' + cats[i] + '</h3><ul class="nav">'
            html2 += '<li><a href="#">' + cats[i] + '</a><ul>'
            for (var j = 0; j < subCats[0].items.length; ++j) {
                html += '<li><a href=shop_grid.html?sub=' + subCats[0].items[j].id + '>' + subCats[0].items[j].name + '</a></li>'
                html2 += ' <li><a href=shop_grid.html?sub=' + subCats[0].items[j].id + '>' + subCats[0].items[j].name + '</a></li>'
            }
            html += '</ul><br>'
            html2 += '</ul></li>'
            if (i % 2 == 1) {
                html += '</div>';
            }
        }
        html += '</div></div></div></div></li>';
        html2 += '</ul>'
        document.getElementById("nav-categories").innerHTML = html;
        document.getElementById("categ-mob").innerHTML = html2;
    })
    jQuery('.mega-menu-category .nav > li').hover(function () {
        jQuery(this).addClass("active");
        jQuery(this).find('.popup').stop(true, true).fadeIn('slow');
    }, function () {
        jQuery(this).removeClass("active");
        jQuery(this).find('.popup').stop(true, true).fadeOut('slow');
    });

}

//End Ahmed
function getBrandcategories() {
    var httprequest = new XMLHttpRequest();
    httprequest.open("GET", "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Brands/GetBrands?Index=0&Size=10");
    httprequest.send();
    httprequest.onreadystatechange = function () {
        if (httprequest.status == 200 && httprequest.readyState == 4) {
            var Data = JSON.parse(httprequest.response).items
            displayBrandCategries(Data);

        }
    }

}

/* ---------------------------------------------
   Brand section
--------------------------------------------- */
getBrandcategories();

function displayBrandCategries(Brand) {
    BrandItem = "";
    brandMobile = ""
    var titles = [];
    for (var i = 0; i < Brand.length; i++) {


        BrandItem += `<li class="menu-item depth-1 menucol-1-3 ">

        <ul class="submenu">
          <li class="menu-item">
            <div class="title"> <a href="shop_grid.html?brand_id=` + Brand[i].id + `">` + Brand[i].name + `</a></div>
          </li>

        </ul>
      </li>`
        brandMobile += `<li><a href="shop_grid.html?brand_id=` + Brand[i].id + `">` + Brand[i].name + `</a></li>`

    }


    document.getElementById("brands").innerHTML = BrandItem;
    document.getElementById("brandMobile").innerHTML = brandMobile

}
