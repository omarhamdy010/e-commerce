<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

    <script>
        $(function(){
            $("#top-search-div-2").load("header.html");
        });
    </script>


    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Low-cost </title>
    <meta name="description" content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- CSS Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body class="cms-index-index cms-home-page" >


<!-- mobile menu -->
<div id="mobile-menu">
    <ul>
        <li><a href="index.html" class="home1">Home</a>

        </li>
        <li id="categ-mob">
            <!-- <a href="#">Pages</a>
            <ul>
              <li ><a href="#">Shop Pages </a>
                <ul>
                  <li><a href="shop_grid.html"><span>Grid View Category Page</span></a></li>
                  <li><a href="shop_grid_full_width.html"><span>Grid View Full Width</span></a></li>
                  <li><a href="shop_list.html"><span>List View Category Page</span></a></li>
                  <li><a href="single_product.html"><span>Full Width Product Page</span> </a></li>
                  <li><a href="single_product_sidebar.html"><span>Product Page With Sidebar</span> </a></li>
                  <li><a href="single_product_magnify_zoom.html"><span>Product Page Magnify Zoom</span> </a></li>
                  <li><a href="shopping_cart.html"><span>Shopping Cart</span></a></li>
                  <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                  <li><a href="compare.html"><span>Compare Products</span></a></li>
                  <li><a href="checkout.html"><span>Checkout</span></a></li>
                  <li><a href="sitemap.html"><span>Sitemap</span></a></li>
                </ul>
              </li>
              <li><a href="#">Static Pages </a>
                <ul>
                  <li><a href="about_us.html"><span>About Us</span></a></li>
                  <li><a href="contact_us.html"><span>Contact Us</span></a></li>
                  <li><a href="orders_list.html"><span>Orders List</span></a></li>
                  <li><a href="order_details.html"><span>Order Details</span></a></li>
                  <li><a href="404error.html"><span>404 Error</span> </a></li>
                  <li><a href="faq.html"><span>FAQ Page</span></a></li>
                  <li><a href="manufacturers.html"><span>Manufacturers</span></a></li>
                  <li><a href="quick_view.html"><span>Quick View</span></a></li>
                  <li><a href="dashboard.html"><span>Account Dashboard</span></a></li>
                  <li><a href="shortcodes.html"><span>Shortcodes</span> </a></li>
                  <li><a href="typography.html"><span>Typography</span></a></li>
                </ul>
              </li>
              <li><a href="#"> Blog Pages </a>
                <ul>
                  <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
                  <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
                  <li><a href="blog_full_width.html">Blog - Full width</a></li>
                  <li><a href="blog_single_post.html">Single post </a></li>
                </ul>
              </li>
            </ul> -->
        </li>
        <li><a href="blog.html">Brands</a>
            <ul id="brandMobile">

            </ul>
        </li>

        <li><a href="shop_grid.html">Shop</a>

        </li>

    </ul>
</div>
<!-- end mobile menu -->
<div id="page">

    <!-- Header -->
    <header id="top-search-div-2">

    </header>
    <!-- end header -->
    <nav>
        <div class="container">
            <div class="row">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
                    <span class="mm-label">All Categories</span> </div>
                <div class="col-md-3 col-sm-3 mega-container hidden-xs">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><span>All Categories</span></h3>
                        </div>

                        <!-- Shop by category -->
                        <div class="mega-menu-category">
                            <ul class="nav" id="nav-categories">

                                <!--
                                                <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                 <li><a href="#">Supermarket</a>
                                                  <div class="wrap-popup">
                                                    <div class="popup">
                                                      <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                          <h3>Televisions</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">LCD Televisions</a></li>
                                                            <li><a href="shop_grid.html">Projection Televisions</a></li>
                                                            <li><a href="shop_grid.html">Play Stations</a></li>
                                                            <li><a href="shop_grid.html">Televisions/Tube</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Headphones</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Players &amp; Video</a></li>
                                                            <li><a href="shop_grid.html">Party Dresses</a></li>
                                                            <li><a href="shop_grid.html">Midi Dresses</a></li>
                                                            <li><a href="shop_grid.html">Strapless Dresses</a></li>
                                                            <li><a href="shop_grid.html">Day Dresses</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 has-sep">
                                                          <h3>Appliances</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Kitchen</a></li>
                                                            <li><a href="shop_grid.html">Refrigerators</a></li>
                                                            <li><a href="shop_grid.html">Laundry &amp; Garment</a></li>
                                                            <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                                                          </ul>
                                                          <br>
                                                          <h3>Video Accessories</h3>
                                                          <ul class="nav">
                                                            <li><a href="shop_grid.html">Bags &amp; Cases</a></li>
                                                            <li><a href="shop_grid.html">Video Tapes</a></li>
                                                            <li><a href="shop_grid.html">Memory Card</a></li>
                                                            <li><a href="shop_grid.html">Readers Tripods</a></li>
                                                            <li><a href="shop_grid.html">Batteries</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-4 has-sep hidden-sm">
                                                          <div class="custom-menu-right">
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Computer <br>
                                                                  Services </h3>
                                                                <div class="price-sale">2016</div>
                                                                <a href="#">Shop Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img2.jpg" alt="fashion"></a></div>
                                                            </div>
                                                            <div class="box-banner media">
                                                              <div class="add-desc">
                                                                <h3>Save up to</h3>
                                                                <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                                                                <a href="#">Shopping Now</a> </div>
                                                              <div class="add-right"><a href="#"><img src="images/menu-banner-img3.jpg" alt=" html store"></a></div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li> -->

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 jtv-megamenu">
                    <div class="mtmegamenu">
                        <ul class="hidden-xs">
                            <li class="mt-root demo_custom_link_cms">
                                <div class="mt-root-item"><a href="index.html">
                                        <div class="title title_font"><span class="title-text">Home</span></div>
                                    </a></div>

                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item"><a href="#">
                                        <div class="title title_font"><span class="title-text">Brands</span></div>
                                    </a></div>
                                <ul class="menu-items col-xs-12" id="brands">

                                </ul>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item"><a href="shop_grid.html">
                                        <div class="title title_font"><span class="title-text">Shop</span> </div>
                                    </a></div>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item"><a href="about_us.html">
                                        <div class="title title_font"><span class="title-text">Contact Us</span></div>
                                    </a></div>
                            </li>


                            <li><a href="#">.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Slideshow  -->
    <div class="main-slider" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img src="images/banner-left.jpg" alt="banner"></div>
                <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
                    <div id="jtv-slideshow">
                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                <!-- <ul id="slider-list"> -->
                                <ul id="slider-list" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;"><li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb=""> <img src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1006.jpg?q=-8585714250225824836" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner">

                                    </li> <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb=""> <img src="http://aaaserver-001-site31.ftempurl.com/Uploads/Sliders/1004.jpg?q=-8585714250225823169" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="banner">

                                    </li> </ul>

                                <!-- <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='images/slider/slide-2.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                  <div class="caption-inner">
                                    <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>
                                    <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New Standard. under favorable smartwatches</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying </a> </div>
                                  </div>
                                </li> -->
                                <!-- </ul> -->
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section -->
    <!-- <div class="jtv-service-area">
      <div class="container">
        <div class="row">
          <div class="col col-md-3 col-sm-6 col-xs-12">
            <div class="block-wrapper ship">
              <div class="text-des">
                <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                <div class="service-wrapper">
                  <h3>World-Wide Shipping</h3>
                  <p>On order over $99</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-sm-6 col-xs-12 ">
            <div class="block-wrapper return">
              <div class="text-des">
                <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                <div class="service-wrapper">
                  <h3>100% secure payments</h3>
                  <p>Credit/ Debit Card/ Banking </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-sm-6 col-xs-12">
            <div class="block-wrapper support">
              <div class="text-des">
                <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                <div class="service-wrapper">
                  <h3>Support 24/7</h3>
                  <p>Call us: ( +123 ) 456 789</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-sm-6 col-xs-12">
            <div class="block-wrapper user">
              <div class="text-des">
                <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                <div class="service-wrapper">
                  <h3>Member Discount</h3>
                  <p>25% on order over $199</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <section class="banner-area">
        <div class="container">

            <div class="row">
                <div class="col-md-12" id="offersSection">

                </div>
                <div class="col-md-12">
                    <div id="backgroundImg">

                    </div>
                </div>
            </div>
            </sec0tion> </br></br></br>


            <!-- All products-->

            <div class="container">
                <div class="home-tab">
                    <div class="tab-title text-left">
                        <h2>Top selling</h2>
                        <ul class="nav home-nav-tabs home-product-tabs" id="top-selling">
                            <!-- <li class="active"><a href="#computer" data-toggle="tab" aria-expanded="false">Computer</a></li>
                            <li><a href="#smartphone" data-toggle="tab" aria-expanded="false">Smartphone</a></li>
                            <li><a href="#watches" data-toggle="tab" aria-expanded="false">Watches</a></li>
                            <li><a href="#photo" data-toggle="tab" aria-expanded="false">Photo & Camera</a></li> -->
                        </ul>
                    </div>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane active in" id="computer">
                            <div class="featured-pro">
                                <div class="slider-items-products">
                                    <div id="computer-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4" id="sellingg">
                                            <!-- <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="icon-new-label new-left">New</div>
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                      </div>
                                                      <div class="pro-action">
                                                        <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box">
                                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box">
                                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="icon-sale-label sale-left">Sale</div>
                                                <div class="icon-new-label new-right">New</div>
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                      </div>
                                                      <div class="pro-action">
                                                        <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="icon-new-label new-left">New</div>
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box">
                                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                      </div>
                                                      <div class="pro-action">
                                                        <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane wow animated fadeInLeft" id="smartphone">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane wow animated fadeInRight" id="watches">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="watches-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane wow animated fadeInUp" id="photo">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="photo-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
              <div class="container">
                <div class="home-tab">
                  <div class="tab-title text-left">
                    <h2>Hot Deals</h2>

                  </div>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane active in" id="computer">
                      <div class="featured-pro">
                        <div class="slider-items-products">
                          <div id="computer-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-new-label new-left">New</div>
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="icon-sale-label sale-left">Sale</div>
                                  <div class="icon-new-label new-right">New</div>
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-new-label new-left">New</div>
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane wow animated fadeInLeft" id="smartphone">
                      <div class="top-sellers-pro">
                        <div class="slider-items-products">
                          <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 ">
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="icon-new-label new-right">New</div>
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane wow animated fadeInRight" id="watches">
                      <div class="top-sellers-pro">
                        <div class="slider-items-products">
                          <div id="watches-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 ">
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="icon-new-label new-right">New</div>
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane wow animated fadeInUp" id="photo">
                      <div class="top-sellers-pro">
                        <div class="slider-items-products">
                          <div id="photo-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 ">
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                    <div class="icon-new-label new-right">New</div>
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                              </div>
                              <div class="product-item">
                                <div class="item-inner">
                                  <div class="product-thumbnail">
                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                      <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                      </a> </div>
                                    <div class="pr-info-area">
                                      <div class="pr-button">
                                        <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                        <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                        <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                      <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                        <div class="pro-action">
                                          <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               -->


            <div class="container" id="zero-section" >
                <div class="home-tab">
                    <div class="tab-title text-left">
                        <h2>Zero cost</h2>
                        <!-- <ul class="nav home-nav-tabs home-product-tabs">
                          <li class="active"><a href="#computer" data-toggle="tab" aria-expanded="false">Computer</a></li>
                          <li><a href="#smartphone" data-toggle="tab" aria-expanded="false">Smartphone</a></li>
                          <li><a href="#watches" data-toggle="tab" aria-expanded="false">Watches</a></li>
                          <li><a href="#photo" data-toggle="tab" aria-expanded="false">Photo & Camera</a></li>
                        </ul> -->
                    </div>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane active in" id="computer">
                            <div class="featured-pro">
                                <div class="slider-items-products">
                                    <div id="computer-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4" id="zero-cost">
                                            <!-- <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="icon-new-label new-left">New</div>
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                      </div>
                                                      <div class="pro-action">
                                                        <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box">
                                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box">
                                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="icon-sale-label sale-left">Sale</div>
                                                <div class="icon-new-label new-right">New</div>
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                      </div>
                                                      <div class="pro-action">
                                                        <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="icon-new-label new-left">New</div>
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box">
                                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                              <div class="item-inner">
                                                <div class="product-thumbnail">
                                                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                    </a> </div>
                                                  <div class="pr-info-area">
                                                    <div class="pr-button">
                                                      <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                      <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                      <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item-info">
                                                  <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                    <div class="item-content">
                                                      <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                      <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                      </div>
                                                      <div class="pro-action">
                                                        <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane wow animated fadeInLeft" id="smartphone">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane wow animated fadeInRight" id="watches">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="watches-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-4.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane wow animated fadeInUp" id="photo">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="photo-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
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
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                                <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!--div class="container">
              <div class="row">
                <div class="daily-deal-section">
                  <!-- daily deal section-->
            <!--div class="col-md-7 daily-deal">
              <h3 class="deal-title">Deal of the day</h3>
              <div class="title-divider"><span></span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa eget ante tincidunt vestibulum. Aenean vel metus magna. Mauris nec. Nunc congue ac libero ut lacinia. In ultrices
                elementum ipsum, in tempus enim accumsan.. </p>
              <div class="hot-offer-text">Summer Sale <span>2017</span></div>
              <div class="box-timer"> <span class="des-hot-deal">Hurry up! Special offer</span>
                <div class="time" data-countdown="countdown" data-date="09-30-2017-10-20-50"></div>
                <a href="#" class="link">Shopping Now</a> </div>
            </div>
            <div class="col-md-5 hot-pr-img-area">
              <div id="daily-deal-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"></figure>
                    </a> </div>
                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> </figure>
                    </a> </div>
                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> </figure>
                    </a> </div>
                  <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/product-1.jpg" alt="HTML template"> </figure>
                    </a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <figure> <a href="#" target="_self" class="image-wrapper"><img src="images/banner-laptop.jpg" alt="banner laptop"></a></figure>
            </div>
            <div class="col-sm-6">
              <figure> <a href="#" target="_self" class="image-wrapper"><img src="images/banner-mob.jpg" alt="banner moblie"></a></figure>
            </div>
          </div>
        </div>
      </div>
      <div class="featured-products">
        <div class="container">
          <div class="row">

            <!-- Best Sale -->
            <!--div class="col-sm-12 col-md-4 jtv-best-sale">
              <div class="jtv-best-sale-list">
                <div class="wpb_wrapper">
                  <div class="best-title text-left">
                    <h2>Top Rate</h2>
                  </div>
                </div>
                <div class="slider-items-products">
                  <div id="toprate-products-slider" class="product-flexslider">
                    <div class="slider-items">
                      <ul class="products-grid">
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="products-grid">
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="products-grid">
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                  </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner -->
            <!--div class="col-md-4 top-banner hidden-sm">
              <div class="jtv-banner3">
                <div class="jtv-banner3-inner"><a href="#"><img src="images/sub1a.jpg" alt="HTML template"></a>
                  <div class="hover_content">
                    <div class="hover_data bottom">
                      <div class="desc-text">Top Brands at discount prices </div>
                      <div class="title">Electronisc Sale</div>
                      <span>Smartphone & Cell phone</span>
                      <p><a href="#" class="shop-now">Get it now!</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div-->
            <!--div class="col-sm-12 col-md-4 jtv-best-sale">
              <div class="jtv-best-sale-list">
                <div class="wpb_wrapper">
                  <div class="best-title text-left">
                    <h2>New products</h2>
                  </div>
                </div>
                <div class="slider-items-products">
                  <div id="new-products-slider" class="product-flexslider">
                    <div class="slider-items">
                      <ul class="products-grid">
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                  </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="products-grid">
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                  </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="products-grid">
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="item">
                          <div class="item-inner">
                            <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="HTML template" src="images/products/product-1.jpg"> </a> </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                  <div class="price-box">
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                  </div>
                                </div>
                                <div class="pro-action">
                                  <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="pr-button-hover">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart-o"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div-->
        </div>
</div>
</div>


<!--section class="blog-post-wrapper">
  <div class="container">
    <div class="best-title text-left">
      <h2>Our Latest News</h2>
    </div>
    <div class="slider-items-products">
      <div id="latest-news-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col6">
          <div class="item">
            <div class="blog-box"> <a href="blog_single_post.html"> <img class="primary-img" src="images/blog-img1.jpg" alt="HTML template"></a>
              <div class="blog-btm-desc">
                <div class="blog-top-desc">
                  <div class="blog-date"> 28 Jan 2017 </div>
                  <h4><a href="blog_single_post.html">Lorem ipsum dolor sit</a></h4>
                  <div class="jtv-entry-meta"> <i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>15 Comments</strong></a></div>
                </div>
                <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, Mauris fermentum dictum.</p>
                <a class="read-more" href="blog_single_post.html"> Read More</a> </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box"> <a href="blog_single_post.html"> <img class="primary-img" src="images/blog-img2.jpg" alt="HTML template"></a>
              <div class="blog-btm-desc">
                <div class="blog-top-desc">
                  <div class="blog-date"> 18 Feb 2017 </div>
                  <h4><a href="blog_single_post.html">Sed do eiusmod sit amet</a></h4>
                  <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>50 Comments</strong></a></div>
                </div>
                <p> Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <a class="read-more" href="blog_single_post.html"> Read More</a> </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box"> <a href="blog_single_post.html"> <img class="primary-img" src="images/blog-img3.jpg" alt="HTML template"></a>
              <div class="blog-btm-desc">
                <div class="blog-top-desc">
                  <div class="blog-date"> 5 Mar 2017 </div>
                  <h4><a href="blog_single_post.html">Integer scelerisque diam</a></h4>
                  <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                </div>
                <p> Doloremque nam. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna.</p>
                <a class="read-more" href="blog_single_post.html"> Read More</a> </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box"> <a href="blog_single_post.html"> <img class="primary-img" src="images/blog-img4.jpg" alt="HTML template"></a>
              <div class="blog-btm-desc">
                <div class="blog-top-desc">
                  <div class="blog-date"> 5 May 2017 </div>
                  <h4><a href="blog_single_post.html">Integer scelerisque diam</a></h4>
                  <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>05 Comments</strong></a></div>
                </div>
                <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
                <a class="read-more" href="blog_single_post.html"> Read More</a> </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-box"> <a href="blog_single_post.html"> <img class="primary-img" src="images/blog-img2.jpg" alt="HTML template"></a>
              <div class="blog-btm-desc">
                <div class="blog-top-desc">
                  <div class="blog-date"> 06 Aug 2017 </div>
                  <h4><a href="blog_single_post.html">Duis ac turpis aliquam leo</a></h4>
                  <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                </div>
                <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat.</p>
                <a class="read-more" href="blog_single_post.html"> Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section-->

<!-- our clients Slider -->


<!-- BANNER-AREA-START >
<section class="banner-area">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
            <div class="banner-block"> <a href="#"> <img src="images/banner-sunglasses.jpg" alt="banner sunglasses"> </a>
              <div class="text-des-container">
                <div class="text-des">
                  <h2>Galaxy Note 5</h2>
                  <p>Fall Phone 25% off Colorful designs!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
            <div class="banner-block"> <a href="#"> <img src="images/banner-kids.jpg" alt="banner kids"> </a>
              <div class="text-des-container">
                <div class="text-des">
                  <h2>Music & Sound</h2>
                  <p>For the littlest people</p>
                </div>
              </div>
            </div>
            <div class="banner-block"> <a href="#"> <img src="images/banner-women.jpg" alt="banner women"> </a>
              <div class="text-des-container">
                <div class="text-des">
                  <h2>Best Quality Music</h2>
                  <p>Modern Headphones designs shop!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
        <div class="banner-block"> <a href="#"> <img src="images/banner-arrival.jpg" alt="banner arrival"> </a>
          <div class="text-des-container">
            <div class="text-des">
              <h2>special collection</h2>
              <p>Sale upto 50% off on selected items</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- BANNER-AREA-END -->
<div class="swiper mySwiper container">
    <div class="swiper-wrapper">

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-xs-12">
                <div class="footer-logo"><a href="index.html"><img src="images/logofinal.png" alt="fotter logo" style="width:100px"></a> </div>
                <p>Lorem Ipsum is simply dummy text of the print and typesetting industry. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet.</p>
                <div class="social">
                    <ul class="inline-mode">
                        <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com"><i class="fa fa-google"></i></a></li>
                        <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-network linkedin"><a title="Connect us on Pinterest" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-xs-12 collapsed-block">
                <div class="footer-links">
                    <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
                    <div class="tabBlock" id="TabBlock-1">
                        <ul class="list-links list-unstyled">
                            <li><a href="#s">Delivery Information</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="#">Terms &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
                <div class="footer-links">
                    <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
                    <div class="tabBlock" id="TabBlock-3">
                        <ul class="list-links list-unstyled">
                            <li><a href="sitemap.html"> Sites Map </a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Trends</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
                            <li><a href="#">My Orders</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
                <div class="footer-links">
                    <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
                    <div class="tabBlock" id="TabBlock-4">
                        <ul class="list-links list-unstyled">
                            <li><a href="account_page.html">Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="shopping_cart.html">Shopping Cart</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Special</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 collapsed-block">
                <div class="footer-links">
                    <h3 class="links-title">Working hours<a class="expander visible-xs" href="#TabBlock-5">+</a></h3>
                    <div class="tabBlock" id="TabBlock-5">
                        <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                        <div class="footer-description"> <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                            <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                            <b>Sunday:</b> Closed </div>
                        <div class="payment">
                            <ul>
                                <li><a href="#"><img title="Visa" alt="Visa" src="images/visa.png"></a></li>
                                <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                                <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                                <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-coppyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2020 <a href="http://zaid.info/"> Ahmed Zaid </a>. All Rights Reserved. </div>
                <div class="col-sm-6 col-xs-12">
                    <ul class="footer-company-links">
                        <li> <a href="about_us.html">About Low-cost</a> </li>
                        <li> <a href="#">Careers</a> </li>
                        <li> <a href="#">Privacy Policy</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>

<!-- End Footer -->
</div>

<!-- JS -->
<!-- home js -->

<!-- jquery js -->
<!-- home js -->

<!-- jquery js -->
<!--<script type="text/javascript" src="js/jquery.min.js"></script> -->

<!-- bootstrap js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="http://aaaserver-001-site44.dtempurl.com/js/owl.carousel.min.js"></script>

<!-- jquery.mobile-menu js -->
<!-- <script type="text/javascript" src="js/global-methods.js"></script>  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="{{asset('js/home.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mobile-menu.js')}}"></script>

<!--jquery-ui.min js -->


<!-- main js -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<!-- countdown js -->
<script type="text/javascript" src="{{asset('js/countdown.js')}}"></script>

<!-- Slider Js -->
<script type="text/javascript" src="{{asset('js/revolution-slider.js')}}"></script>
<!-- <script type="text/javascript" src="js/cart.js"></script>  -->
<script type='text/javascript'>
    jQuery(document).ready(function(){

        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 865,
            startheight: 450,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,


            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>

</body>
</html>




