// $(document).ready(function(){
//     $("#searchinp").on("keyup", function() {
//       var value = $(this).val().toLowerCase();
//       console.log(value)
//       $(".hell").filter(function() {
//         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//       });
//     });
//   });
var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
  function searchbtn(){
      var searchValue= document.getElementById("searchinp").value;
      console.log(searchValue)
    // var httprequest= new XMLHttpRequest();
    // httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/en/api/Search/Search/"+searchValue+"?Index=0&Size=10");
    // httprequest.send();
    // httprequest.onreadystatechange=function(){
    //     if(httprequest.status==200 && httprequest.readyState==4){
    //         var Data=JSON.parse(httprequest.response).items
    //         displayresult(Data);
    //      console.log(Data)
    //     }
    // }
    window.location.replace("search.html?search="+searchValue);
  }


jQuery(document).ready(function() {
    "use strict";


    /******************************************
       Newsletter popup
    ******************************************/

    jQuery('#myModal').appendTo("body");

    function show_modal() {cd
        jQuery('#myModal').modal('show');
    }

    jQuery('#myModal').modal({
        keyboard: false,
        backdrop: false
    });
    /******************************************
    	Mobile menu
    ******************************************/

    jQuery("#mobile-menu").mobileMenu({
            MenuWidth: 250,
            SlideSpeed: 300,
            WindowsMaxWidth: 767,
            PagePush: !0,
            FromLeft: !0,
            Overlay: !0,
            CollapseMenu: !0,
            ClassName: "mobile-menu"

        }),

        /******************************************
        	Our clients slider
        ******************************************/

        jQuery("#our-clients-slider .slider-items").owlCarousel({
            items: 6,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [640, 2],
            itemsMobile: [360, 1],
            navigation: false,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: false,
            autoPlay: true
        }),

 /******************************************
           computer slider
  ******************************************/

        // jQuery("#computer-slider .slider-items").owlCarousel({
        //     items: 4,
        //     itemsDesktop: [1024, 4],
        //     itemsDesktopSmall: [900, 3],
        //     itemsTablet: [640, 2],
        //     itemsMobile: [390, 1],
        //     navigation: !0,
        //     navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
        //     slideSpeed: 500,
        //     pagination: !1,
        //     autoPlay: false
        // }),
		
        /******************************************
          smartphone slider
        ******************************************/

        jQuery("#smartphone-slider .slider-items").owlCarousel({
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
        }),


        /******************************************
        	watches slider
        ******************************************/

        jQuery("#watches-slider .slider-items").owlCarousel({
            items: 4,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [640, 2],
            itemsMobile: [390, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1,
            autoPlay: true
        }),

        /******************************************
        	daily deal slider
        ******************************************/

        jQuery("#daily-deal-slider .slider-items").owlCarousel({
            items: 1,
            itemsDesktop: [1024, 1],
            itemsDesktopSmall: [900, 1],
            itemsTablet: [640, 1],
            itemsMobile: [390, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1,
            autoPlay: true
        }),
		
		/******************************************
        	Photo slider
        ******************************************/

        jQuery("#photo-slider .slider-items").owlCarousel({
            items: 4,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [640, 2],
            itemsMobile: [390, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1,
            autoPlay: true
        }),

        /******************************************
        	best sale slider
        ******************************************/
        // jQuery("#jtv-best-sale-slider .slider-items").owlCarousel({
        //     items: 4, //10 items above 1000px browser width
        //     itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        //     itemsDesktopSmall: [900, 3],
        //     itemsTablet: [640, 2],
        //     navigation: true,
        //     navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        //     slideSpeed: 500,
        //     pagination: false,
        //     autoPlay: true
        // });
        /******************************************
        	toprate products slider
        ******************************************/
        jQuery("#toprate-products-slider .slider-items").owlCarousel({
             items: 1, //10 items above 1000px browser width
            itemsDesktop: [1024, 1], //5 items between 1024px and 901px
            itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
            itemsTablet: [767, 1], //2 items between 600 and 0;
            itemsMobile: [360, 1],
            navigation: false,
            navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
            slideSpeed: 500,
            pagination: true
        });

    /******************************************
    	Special products slider
    ******************************************/

    jQuery("#special-products-slider .slider-items").owlCarousel({
            items: 3,
            itemsDesktop: [1024, 3],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [640, 2],
            itemsMobile: [390, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1,
            autoPlay: false
        }),


        /******************************************
        	on sale produc slider
        ******************************************/

        jQuery("#new-products-slider .slider-items").owlCarousel({
            items: 1, //10 items above 1000px browser width
            itemsDesktop: [1024, 1], //5 items between 1024px and 901px
            itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
            itemsTablet: [767, 1], //2 items between 600 and 0;
            itemsMobile: [360, 1],
            navigation: false,
            navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
            slideSpeed: 500,
            pagination: true
        });

    /******************************************
    	Latest news slider
    ******************************************/

    jQuery("#latest-news-slider .slider-items").owlCarousel({
            autoplay: !0,
            items: 4,
            itemsDesktop: [1024, 3],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [640, 1],
            itemsMobile: [480, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1,
            transitionStyle: "backSlide"
        }),
        /******************************************
        	testimonials slider
        ******************************************/

        jQuery("#testimonials-slider .slider-items").owlCarousel({
            items: 2,
            itemsDesktop: [1024, 2],
            itemsDesktopSmall: [900, 1],
            itemsTablet: [640, 1],
            itemsMobile: [390, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: false,
            autoPlay: true,
            singleItem: true
        }),

        /******************************************
        	Mega Menu
        ******************************************/

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
    /******************************************
       Category desc slider
    ******************************************/

    // jQuery("#category-desc-slider .slider-items").owlCarousel({
    //     autoPlay: true,
    //     items: 1, //10 items above 1000px browser width
    //     itemsDesktop: [1024, 1], //5 items between 1024px and 901px
    //     itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
    //     itemsTablet: [600, 1], //2 items between 600 and 0;
    //     itemsMobile: [320, 1],
    //     navigation: true,
    //     navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
    //     slideSpeed: 500,
    //     pagination: false
    // });

    /******************************************
       Upsell product slider
    ******************************************/

    jQuery("#upsell-product-slider .slider-items").owlCarousel({
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
        }),

        /******************************************
        	Related product slider
        ******************************************/

        // jQuery("#related-product-slider .slider-items").owlCarousel({
        //     items: 4,
        //     itemsDesktop: [1024, 4],
        //     itemsDesktopSmall: [900, 3],
        //     itemsTablet: [640, 2],
        //     itemsMobile: [390, 1],
        //     navigation: !0,
        //     navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
        //     slideSpeed: 500,
        //     pagination: !1,
        //     autoPlay: true
        // }),

        /******************************************
        	Related posts
        ******************************************/

        jQuery("#related-posts .slider-items").owlCarousel({
            items: 3,
            itemsDesktop: [1024, 3],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [640, 2],
            itemsMobile: [390, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1,
            autoPlay: true
        }),


        /******************************************
            PRICE FILTER
        ******************************************/

        jQuery('.slider-range-price').each(function() {
            var min = jQuery(this).data('min');
            var max = jQuery(this).data('max');
            var unit = jQuery(this).data('unit');
            var value_min = jQuery(this).data('value-min');
            var value_max = jQuery(this).data('value-max');
            var label_reasult = jQuery(this).data('label-reasult');
            var t = jQuery(this);
            jQuery(this).slider({
                range: true,
                min: min,
                max: max,
                values: [value_min, value_max],
                slide: function(event, ui) {
                    var result = label_reasult + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                    console.log(t);
                    t.closest('.slider-range').find('.amount-range-price').html(result);
                }
            });
        })

    /******************************************
        Footer expander
    ******************************************/

    jQuery(".collapsed-block .expander").on("click", function(e) {
        var collapse_content_selector = jQuery(this).attr("href");
        var expander = jQuery(this);
        if (!jQuery(collapse_content_selector).hasClass("open")) expander.addClass("open").html("&minus;");
        else expander.removeClass("open").html("+");
        if (!jQuery(collapse_content_selector).hasClass("open")) jQuery(collapse_content_selector).addClass("open").slideDown("normal");
        else jQuery(collapse_content_selector).removeClass("open").slideUp("normal");
        e.preventDefault()
    });

    /******************************************
        Category sidebar
    ******************************************/

    jQuery(function() {
        jQuery(".category-sidebar ul > li.cat-item.cat-parent > ul").hide();
        jQuery(".category-sidebar ul > li.cat-item.cat-parent.current-cat-parent > ul").show();
        jQuery(".category-sidebar ul > li.cat-item.cat-parent.current-cat.cat-parent > ul").show();
        jQuery(".category-sidebar ul > li.cat-item.cat-parent").on("click", function() {
            if (jQuery(this).hasClass('current-cat-parent')) {
                var li = jQuery(this).closest('li');
                li.find(' > ul').slideToggle('fast');
                jQuery(this).toggleClass("close-cat");
            } else {
                var li = jQuery(this).closest('li');
                li.find(' > ul').slideToggle('fast');
                jQuery(this).toggleClass("cat-item.cat-parent open-cat");
            }
        });
        jQuery(".category-sidebar ul.children li.cat-item,ul.children li.cat-item > a").on("click", function(e) {
            e.stopPropagation();
        });
    });

    /******************************************
        colosebut
    ******************************************/

    jQuery("#colosebut1").on("click", function() {
        jQuery("#div1").fadeOut("slow");
    });
    jQuery("#colosebut2").on("click", function() {
        jQuery("#div2").fadeOut("slow");
    });
    jQuery("#colosebut3").on("click", function() {
        jQuery("#div3").fadeOut("slow");
    });
    jQuery("#colosebut4").on("click", function() {
        jQuery("#div4").fadeOut("slow");
    });


    /******************************************
        totop
    ******************************************/
    if (jQuery('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function() {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery('#back-to-top').addClass('show');
                } else {
                    jQuery('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function() {
            backToTop();
        });
        jQuery('#back-to-top').on('click', function(e) {
            e.preventDefault();
            jQuery('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    /******************************************
        tooltip
    ******************************************/


    jQuery('[data-toggle="tooltip"]').tooltip();

    /* ---------------------------------------------
        slider typist
    --------------------------------------------- */

    if (typeof Typist == 'function') {
        new Typist(document.querySelector('.typist-element'), {
            letterInterval: 60,
            textInterval: 3000
        });
    }

})


    /* ---------------------------------------------
        slider Home Page
    --------------------------------------------- */
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

                    temp+=`<li data-transition="fade" data-slotamount="7" data-masterspeed="10000" data-thumb="" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;"><div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="left top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="http://aaaserver-001-site31.ftempurl.com`+Data[i].image+`" data-src="http://aaaserver-001-site31.ftempurl.com`+Data[i].image+`" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(http://aaaserver-001-site31.ftempurl.com`+Data[i].image+`); background-size: cover; background-position: left top; width: 100%; height: 100%; opacity: 1; position: relative;"></div></div>
                   
                  </li>`
                    titles.push(Data[i].image);
                    
                }
            
            
            document.getElementById("slider-list").innerHTML = temp;
                
}





  



getTopProducts()


function like(){
    var a=$(".itemo").data('attr');

    console.log(a);
    alert("yes")
    // var productTitle=document.getElementsByClassName("producTitle")
    // alert(productTitle)
    // console.log(productTitle)
}


    /* ---------------------------------------------
      Get ProductsDetails method
    --------------------------------------------- */

// function productdetailes(event){
// var ProductId=event;
// console.log(ProductId)
// var httprequest= new XMLHttpRequest();
// httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/en/api/Products/GetProduct/63");
// httprequest.send();
// httprequest.onreadystatechange=function(){
//     if(httprequest.status==200 && httprequest.readyState==4){
//         var Data=JSON.parse(httprequest.response)
//        displayhtml(Data) 
// }

// }

// window.location.replace("single_product.html");
// }

// function displayhtml(Data){
//   productDe = " ";
//   productDe+=`<p>hello</p>`
//   console.log(productDe)
//   document.getElementById("pbnh").innerHTML= productDe;
// }





// function clickk(){
//   var selectedproducts=[]
//   this.x="";
//   // console.log("hello")
//   var listproduct=$('.list-products');
// listproduct.html('');
// $('#other_product input[type="checkbox"]:checked').each(function(){
//   var bgh=$(this).val();
//   console.log("id "+bgh)
// selectedproducts.push(bgh);
// console.log("array"+selectedproducts)
// // console.log(y)
//   // var showw=selectedproducts.join(', ');
//   // listproduct.html(showw);

  
// })
// }


