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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">


        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/chosen.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/icofont.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bikearena/css/responsive.css') }}">


        <script src="{{ URL::asset('bikearena/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
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
                                        <p>WANT TO TALK WITH US  +01254 265 987</p>
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
                                                    <li><a href="{{route('bikeArena.allBrands')}}">brands</a>
                                                        <ul>
                                                            @foreach ($brands as $item)
                                                            <li><a href="{{route('bikeArena.viewBrands',$item->brand_name)}}">{{$item->brand_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{route('bikeArena.allParts')}}">parts</a>
                                                        <ul>
                                                            @foreach ($parts_category as $item)
                                                            <li><a href="{{route('bikeArena.viewParts',$item->category_name)}}">{{$item->category_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    {{-- <li><a href="#">shop</a>
                                                        <ul>
                                                            <li><a href="{{ route('bikearena.shop') }}">shop</a></li>
                                                            <li><a href="{{ route('bikeArena.product-details') }}">product details</a></li>
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
                                                    </li> --}}
                                                    <li class="active"><a href="{{ route('bikearena.about') }}">about us </a></li>
                                                    <li><a href="{{ route('bikearena.contact') }}">contact us</a></li>
                                                    <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">login | register</button></li>
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



            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider slider-1" style="background-image: url({{ url('bikearena/img/slider/slider-bg.jpg')}})">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{ URL::asset('bikearena/img/slider/bike-1.png') }}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                    <img class="animated" src="{{ URL::asset('bikearena/img/icon-img/bike.png') }}" alt="slider images">
                                </div>
                                <h2 class="animated">MOTORCYCLE</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: url({{ url('bikearena/img/slider/slider-bg.jpg')}})">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{ URL::asset('bikearena/img/slider/bike-2.png') }}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                    <img class="animated" src="{{ URL::asset('bikearena/img/icon-img/bike.png') }}" alt="slider images">
                                </div>
                                <h2 class="animated">MOTORCYCLE</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: url({{ url('bikearena/img/slider/slider-bg.jpg')}})">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    <img class="animated" src="{{ URL::asset('bikearena/img/slider/bike-1.png') }}" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">BOOK YOUR BIKE INSTANTLY AND ENJOY DISCOUNT</h6>
                                    <img class="animated" src="{{ URL::asset('bikearena/img/icon-img/bike.png') }}" alt="slider images">
                                </div>
                                <h2 class="animated">MOTORCYCLE</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-social">
                    <ul>
                        <li class="facebook"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="language-currency-wrapper">
                    <div class="language-currency">
                        <div class="language">
                            <select class="select-header orderby">
                                <option value="">ENG</option>
                                <option value="">BANGLA </option>
                                <option value="">HINDI</option>
                            </select>
                        </div>
                        <div class="currency">
                            <select class="select-header orderby">
                                <option value="">$USD</option>
                                <option value="">US </option>
                                <option value="">EURO</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overview-area pt-135">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">
                                <h1><span>OSWAN</span> WORLD MOST </h1>
                                <h2>LATGEST <span>MOTORCYCLE STORE</span></h2>
                                <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                <div class="question-area">
                                    <h4>HAVE ANY QUESTION? </h4>
                                    <div class="question-contact">
                                        <div class="question-icon">
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                        <div class="question-content-number">
                                            <h6> 01245 658 698</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-img">
                                <img class="tilter" src="{{ URL::asset('bikearena/img/banner/banner-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area pt-135 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{ URL::asset('bikearena/img/banner/banner-1.jpg') }}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>BUY NEW BIKE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{ URL::asset('bikearena/img/banner/banner-2.jpg') }}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>SELL YOUR BIKE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <a href="#"><img src="{{ URL::asset('bikearena/img/banner/banner-3.jpg') }}" alt="image"></a>
                                <div class="banner-content">
                                    <h2>FIND SPARE PARTS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-area pb-190">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>CHOOSE YOUR BIKE</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" >
                            <h4>NEW BIKES </h4>
                        </a>
                        <a href="#home2" data-toggle="tab">
                            <h4> USED BIKES </h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="home1">
                            <div class="product-slider-active owl-carousel">
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-1.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Gloriori GSX 250 R</a></h4>
                                                    <span>6600 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-4.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>480 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Demonissi Gori</a></h4>
                                                    <span>6700 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-2.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>200 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Klager GSX 250 R</a></h4>
                                                    <span>5500 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-5.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>150 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Maxclon ZPE 54</a></h4>
                                                    <span>3300 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-3.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>150 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Matrio Max</a></h4>
                                                    <span>4600 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-6.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Rigoniss Z 1000</a></h4>
                                                    <span>8000 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-2.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Klager GSX 250 R</a></h4>
                                                    <span>5500 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-5.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>350 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Maxclon ZPE 54</a></h4>
                                                    <span>3300 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="home2">
                            <div class="product-slider-active owl-carousel">
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-6.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Gloriori GSX 250 R</a></h4>
                                                    <span>6600 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-5.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>480 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Demonissi Gori</a></h4>
                                                    <span>6700 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-4.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>200 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Klager GSX 250 R</a></h4>
                                                    <span>5500 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-3.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>150 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Maxclon ZPE 54</a></h4>
                                                    <span>3300 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-2.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>150 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Matrio Max</a></h4>
                                                    <span>4600 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-1.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Rigoniss Z 1000</a></h4>
                                                    <span>8000 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-2.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Klager GSX 250 R</a></h4>
                                                    <span>5500 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('bikeArena.product-details') }}">
                                                <img src="{{ URL::asset('bikearena/img/product/product-5.jpg') }}" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>350 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="{{ route('bikeArena.product-details') }}">Maxclon ZPE 54</a></h4>
                                                    <span>3300 RPM</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$2549</span>
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
            <div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url({{ url('bikearena/img/banner/banner-4.jpg') }})">
                <div class="container-fluid">
                    <div class="latest-product-slider owl-carousel">
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{ URL::asset('bikearena/img/banner/banner-2.png') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                        <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                        <div class="latest-price">
                                            <h3 class="animated">NOW AT <span>$1250</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">SELECT A BIKE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-col-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{ URL::asset('bikearena/img/banner/banner-3.png') }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-col-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                        <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                        <div class="latest-price">
                                            <h3 class="animated">NOW AT <span>$1250</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">SELECT A BIKE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accessories-area pt-152 pb-130">
                <div class="container-fluid">
                    <div class="section-title section-fluid text-center mb-60">
                        <h2>ACCESSORIES</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="accessories-wrapper">
                        <div class="product-accessories-active owl-carousel">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{ URL::asset('bikearena/img/product/product-7.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $120</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-8.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $180</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Reckles Jacket</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-9.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $25</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Softy Original Glove</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-10.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $140</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Flicky Traco Boot</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-11.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $150</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Flicky Traco Boot</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-7.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $150</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-8.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $160</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Reckles Jacket</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{ route('bikeArena.product-details') }}">
                                        <img src="{{ URL::asset('bikearena/img/product/product-9.jpg') }}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $120</span>
                                            <h4><a href="{{ route('bikeArena.product-details') }}">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-area">
                <div class="container">
                    <div class="section-title-2 section-title-position">
                        <h2>OUR CLIENTS REVIEW</h2>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="{{ URL::asset('bikearena/img/team/testimonial-1.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest  qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam quoten</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Rayed Ayash Hisham</h4>
                                            <span>COO, ASEKHA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="{{ URL::asset('bikearena/img/team/testimonial-2.png') }}">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> Lorem ipsum dolor sit amet, consectetur adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis dolor in reprehenderit.</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>James Momen Nirob</h4>
                                            <span>CEO, ASEKHA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area pt-150 pb-110">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <h2>BLOG POST</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="{{ route('bikearena.blog-details') }}"><img src="{{ URL::asset('bikearena/img/blog/blog-hm-1.jpg') }}" alt="image"></a>
                                    <div class="blog-date">
                                        <h4>24 February, 2018</h4>
                                    </div>
                                    <div class="blog-hm-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="{{ route('bikearena.blog-details') }}">Sports Motorbike for play in desert </a></h3>
                                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="{{ route('bikearena.blog-details') }}"><img src="{{ URL::asset('bikearena/img/blog/blog-hm-2.jpg') }}" alt="image"></a>
                                    <div class="blog-date">
                                        <h4>22 February, 2018</h4>
                                    </div>
                                    <div class="blog-hm-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="{{ route('bikearena.blog-details') }}">Motorbike Racing at October</a></h3>
                                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="{{ route('bikearena.blog-details') }}"><img src="{{ URL::asset('bikearena/img/blog/blog-hm-3.jpg') }}" alt="image"></a>
                                    <div class="blog-date">
                                        <h4>20 February, 2018</h4>
                                    </div>
                                    <div class="blog-hm-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="{{ route('bikearena.blog-details') }}">Latest Motorbike Release this Year </a></h3>
                                    <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                </div>
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
            <!-- modal -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="{{ URL::asset('bikearena/img/quick-view/l1.jpg') }}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="{{ URL::asset('bikearena/img/quick-view/l2.jpg') }}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="{{ URL::asset('bikearena/img/quick-view/l3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                        <img src="{{ URL::asset('bikearena/img/quick-view/s1.jpg') }}" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab">
                                        <img src="{{ URL::asset('bikearena/img/quick-view/s2.jpg') }}" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab">
                                        <img src="{{ URL::asset('bikearena/img/quick-view/s3.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Aerion Carbon Helmet</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!--Modal: Login / Register Form-->
    <form method="post" action="{{ route('bikearena.login') }}">
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
          <!--Content-->
          <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                    Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Register</a>
                </li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                  <!--Body-->
                  <div class="modal-body mb-1">
                    <div class="md-form form-sm mb-5">
                      <i class="fas fa-envelope prefix"></i>
                      <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                      <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                    </div>

                    <div class="md-form form-sm mb-4">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                      <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                    </div>
                    <div class="text-center mt-2">
                      <button type="submit" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                      <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                      <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                    </div>
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                  </div>

                </div>
                <!--/.Panel 7-->

                <!--Panel 8-->
                <div class="tab-pane fade" id="panel8" role="tabpanel">

                  <!--Body-->
                  <div class="modal-body">
                    <div class="md-form form-sm mb-5">
                      <i class="fas fa-envelope prefix"></i>
                      <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                      <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                    </div>

                    <div class="md-form form-sm mb-5">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                      <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                    </div>

                    <div class="md-form form-sm mb-4">
                      <i class="fas fa-lock prefix"></i>
                      <input type="repeat_password" id="modalLRInput14" class="form-control form-control-sm validate">
                      <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                    </div>

                    <div class="text-center form-sm mt-2">
                      <button type="submit" class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                    </div>

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <div class="options text-right">
                      <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                    </div>
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                  </div>
                </div>
                <!--/.Panel 8-->
              </div>

            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
    </form>
      <!--Modal: Login / Register Form-->

      <div class="text-center">
        <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
          Modal LogIn/Register</a>
      </div>
    </body>

</html>
