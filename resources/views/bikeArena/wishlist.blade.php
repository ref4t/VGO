<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce HTML5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('bikearena/img/favicon.png') }}">

		<!-- all css here -->
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/chosen.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/icofont.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/responsive.css') }}">
        <script src="{{ URL::asset('bikearena/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="{{ route('bikearena.index') }}"><img alt="" src="{{ URL::asset('bikearena/img/logo/logo.png') }}"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>WANT TO TALK WITH US +01254 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="{{ URL::asset('bikearena/img/icon-img/menu.png') }}">
                                            <img class="s-close" alt="" src="{{ URL::asset('bikearena/img/icon-img/menu-close.png') }}">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="{{ route('bikearena.index') }}">home</a></li>
                                                    <li class="active"><a href="{{ route('bikearena.about') }}">about us </a></li>
                                                    <li><a href="#">shop</a>
                                                        <ul>
                                                            <li><a href="{{ route('bikearena.shop') }}">shop</a></li>
                                                            <li><a href="{{ route('bikearena.product-details') }}">product details</a></li>
                                                            <li><a href="{{ route('bikearena.checkout') }}">checkout</a></li>
                                                            <li><a href="{{ route('bikearena.wishlist') }}">wishlist</a></li>
                                                            <li><a href="{{ route('bikearena.cart') }}">cart</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">pages</a>
                                                        <ul>
                                                            <li><a href="{{ route('bikearena.about') }}">about us</a></li>
                                                            <li><a href="{{ route('bikearena.cart') }}">cart page</a></li>
                                                            <li><a href="{{ route('bikearena.checkout') }}">checkout</a></li>
                                                            <li><a href="{{ route('bikearena.wishlist') }}">wishlist</a></li>
                                                            <li><a href="{{ route('bikearena.login-register') }}">login</a></li>
                                                            <li><a href="{{ route('bikearena.contact') }}">contact</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">blog</a>
                                                        <ul>
                                                            <li><a href="{{ route('bikearena.blog') }}">blog</a></li>
                                                            <li><a href="{{ route('bikearena.blog-details') }}">blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('bikearena.contact') }}">contact us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart cart-small-device">
                                    <button class="icon-cart">
                                        <i class="ti-shopping-cart"></i>
                                        <span class="count-style">02</span>
                                        <span class="count-price-add">$295.95</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/cart/cart-1.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                                    <span>Price: $275</span>
                                                    <span>Qty: 01</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/cart/cart-2.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Demonissi Gori</a></h3>
                                                    <span>Price: $275</span>
                                                    <span class="qty">Qty: 01</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/cart/cart-3.jpg') }}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Demonissi Gori</a></h3>
                                                    <span>Price: $275</span>
                                                    <span class="qty">Qty: 01</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>total: <span>$550.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a class="btn-style cr-btn" href="{{ route('bikearena.checkout') }}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="{{ route('bikearena.index') }}">HOME</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="{{ route('bikearena.about') }}">about us</a></li>
                                                    <li><a href="{{ route('bikearena.cart') }}">cart page</a></li>
                                                    <li><a href="{{ route('bikearena.checkout') }}">checkout</a></li>
                                                    <li><a href="{{ route('bikearena.wishlist') }}">wishlist</a></li>
                                                    <li><a href="{{ route('bikearena.login-register') }}">login</a></li>
                                                    <li><a href="{{ route('bikearena.contact') }}">contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop</a>
                                                <ul>
                                                    <li><a href="{{ route('bikearena.shop') }}">shop</a></li>
                                                    <li><a href="{{ route('bikearena.product-details') }}">product details</a></li>
                                                    <li><a href="{{ route('bikearena.checkout') }}">checkout</a></li>
                                                    <li><a href="{{ route('bikearena.wishlist') }}">wishlist</a></li>
                                                    <li><a href="{{ route('bikearena.cart') }}">cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">BLOG</a>
                                                <ul>
                                                    <li><a href="{{ route('bikearena.blog') }}">blog page</a></li>
                                                    <li><a href="{{ route('bikearena.blog-details') }}">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('bikearena.contact') }}"> Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                            <button class="icon-cart">
                                <i class="ti-shopping-cart"></i>
                                <span class="count-style">02</span>
                                <span class="count-price-add">$295.95</span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/cart/cart-1.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                            <span>Price: $275</span>
                                            <span>Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/cart/cart-2.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Demonissi Gori</a></h3>
                                            <span>Price: $275</span>
                                            <span class="qty">Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/cart/cart-3.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Demonissi Gori</a></h3>
                                            <span>Price: $275</span>
                                            <span class="qty">Qty: 01</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>total: <span>$550.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a class="btn-style cr-btn" href="{{ route('bikearena.checkout') }}">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{ url('bikearena/img/banner/banner-4.jpg') }})">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>wishlist</h2>
                        <ul>
                            <li>
                                <a href="{{ route('bikearena.index') }}">home</a>
                            </li>
                            <li>wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-cart-area fluid-padding-3 pt-120 pb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">products</th>
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price</th>
                                            <th class="product-price">quantity</th>
                                            <th class="product-quantity">total</th>
                                            <th class="product-subtotal">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ URL::asset('bikearena/img/cart/4.jpg') }}" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Gloriori GSX 250 R</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1128.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1128.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ URL::asset('bikearena/img/cart/5.jpg') }}" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Klager GSX 250 R</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1450.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1450.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ URL::asset('bikearena/img/cart/6.jpg') }}" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Matrio Max</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1300.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1300.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ URL::asset('bikearena/img/cart/7.jpg') }}" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Demonissi Gori</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1190.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1190.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter-area">
                <div class="container">
                    <div class="newsletter-wrapper-all theme-bg-2">
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
                                <div class="newsletter-img bg-img" style="background-image: url({{ url('bikearena/img/banner/newsletter-bg.png') }})">
                                    <img alt="image" src="{{ URL::asset('bikearena/img/team/newsletter-img.png') }}">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <h3>Subscribe our newsletter</h3>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-top pt-210 pb-98 theme-bg">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="{{ route('bikearena.index') }}">
                                            <img src="{{ URL::asset('bikearena/img/logo/2.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-about">
                                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest ulity of motorcycle soucan sell here your motorcycle it quo </p>
                                        <div class="footer-support">
                                            <h5>FOR SUPPORT</h5>
                                            <span> 01245 658 698 (Toll Free)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30 pl-60">
                                    <div class="footer-widget-title">
                                        <h3>QUICK LINK</h3>
                                    </div>
                                    <div class="quick-links">
                                        <ul>
                                            <li><a href="{{ route('bikearena.about') }}">About us</a></li>
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">Inventory</a></li>
                                            <li><a href="{{ route('bikearena.shop') }}">Shop</a></li>
                                            <li><a href="{{ route('bikearena.blog') }}">Blog</a></li>
                                            <li><a href="#">Conditions</a></li>
                                            <li><a href="{{ route('bikearena.contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>LATEST TWEET</h3>
                                    </div>
                                    <div class="food-widget-content pr-30">
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 10 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>CONTACT INFO</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Address</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>276 Jhilli Nogor, 4th folor, Momen Tower, Main Town, New Yourk</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Phone</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>+090 12568 369 987</p>
                                                <p>+090 12568 369 987</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Web</span>
                                            </div>
                                            <div class="food-info-content">
                                                <a href="#">info@oswanmega.com</a>
                                                <a href="#">www.oswanmega.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom ptb-35 black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="copyright">
                                    <p>©Copyright, 2018 All Rights Reserved by <a href="https://freethemescloud.com/">Free themes Cloud</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="footer-payment-method">
                                    <a href="#"><img alt="" src="{{ URL::asset('bikearena/img/icon-img/payment.png') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

		<!-- all js here -->
        <script src="{{ URL::asset('bikearena/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/popper.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/waypoints.min.js') }}"></script>

        <script src="{{ URL::asset('bikearena/js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/plugins.js') }}"></script>
        <script src="{{ URL::asset('bikearena/js/main.js') }}"></script>
    </body>
</html>
