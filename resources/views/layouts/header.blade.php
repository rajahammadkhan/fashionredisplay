<!-- Start Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <ul class="header-contact-info">
                            <li><a href="#">Your Number One Source To Secondhand Fashion!</a></li>
                            <li><a href="#">Trusted Quality Control</a></li>
                            <li><a href="#">Guaranteed Satisfaction</a></li>
                            <li><a href="tel:+971000000000"><i class='bx bxs-phone'></i> +971 00 0000000</a></li>

                            <!-- <li>
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{url('')}}/assets/img/us-flag.jpg" alt="image">
                                        <span>Eng <i class='bx bx-chevron-down'></i></span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="{{url('')}}/assets/img/germany-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Ger</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="{{url('')}}/assets/img/france-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Fre</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="{{url('')}}/assets/img/spain-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Spa</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="{{url('')}}/assets/img/russia-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Rus</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="{{url('')}}/assets/img/italy-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Ita</span>
                                        </a>
                                    </div>
                                </div>
                            </li> -->
                        </ul>

                    </div>

                    <div class="col-lg-4 col-md-12">
                        <ul class="header-top-menu">
                            <li><a href="#"><img src="{{url('')}}/assets/img/us-flag.jpg" style="padding-right: 0.5rem; width: 30px;"> USD</a></li>
                            <li><a href="#"><i class='bx bxs-truck' ></i> Free shipping*</a></li>
                        </ul>

                        <ul class="header-top-others-option">
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="search-btn bx bx-search-alt"></i>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i class='bx bx-shopping-bag'></i><span>0</span></a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area" >

            <div class="xton-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{url('')}}/assets/img/fashionredisplay_black_logo.png" class="main-logo" alt="logo">
                            <img src="{{url('')}}/assets/img/fashionredisplay_white_logo.png" class="white-logo" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse" >
                            <ul class="navbar-nav" style="min-width: 70%;">
                                <aside class="widget-area" style="min-width: 100%; max-width: 100%;">
                                    <section class="widget widget_search">
                                        <form class="search-form">
                                            <label>
                                                <span class="screen-reader-text">Search for:</span>
                                                <input type="search" class="search-field" placeholder="Search...">
                                            </label>
                                            <button type="submit"><i class="bx bx-search-alt"></i></button>
                                        </form>
                                    </section>
                                </aside>
                            </ul>

                            <div class="others-option">
                                <div class="option-item">
                                    <div class="search-btn-box">
                                        <a href="{{ route('login') }}"><i class='bx bxs-user' style="font-size: x-large;"></i></a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <i class='bx bx-heart' ></i>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="burger-menu">
                                        <a href="{{ route('cart') }}"><i class='bx bx-cart-alt' style="font-size: x-large;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="xton-responsive-nav" >
                <div class="container">
                    <div class="xton-responsive-menu">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{url('')}}/assets/img/fashionredisplay_black_logo.png" class="main-logo" alt="logo">
                                <img src="{{url('')}}/assets/img/fashionredisplay_white_logo.png" class="white-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xton-nav" style="background: rgb(0, 0, 0,0.1);">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light" style="padding-top: 0rem; padding-bottom: 0rem;">

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item megamenu"><a href="{{ route('product') }}" class="nav-link @if(Route::currentRouteName()=='product') active @endif">VINTAGE <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">WOMEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Blouses & Tops</a></li>
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Jerseys</a></li>
                                                            <li><a href="#">Pants</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">MEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Jerseys</a></li>
                                                            <li><a href="#">Paints</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">T-Shirts</a></li>
                                                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">YOUTH</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Jerseys</a></li>
                                                            <li><a href="#">T-Shirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>

                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/1.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/2.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item megamenu"><a href="{{ route('product') }}" class="nav-link">RETRO <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">WOMEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Blouses & Tops</a></li>
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Pants</a></li>
                                                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">T-Shirt</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">MEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Paints</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">T-Shirts</a></li>
                                                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">YOUTH GIRLS</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/3.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/4.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item megamenu"><a href="{{ route('product') }}" class="nav-link">Y2K <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">WOMEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Pants</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">SHOP BY BRAND</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">Juicy Couture</a></li>
                                                            <li><a href="#">True Religion</a></li>
                                                            <li><a href="#">Guess</a></li>
                                                            <li><a href="#">GAP</a></li>
                                                            <li><a href="#">Calvin Klein</a></li>
                                                            <li><a href="#">Eddie Bauer</a></li>
                                                            <li><a href="#">Levi Strauss & Co.</a></li>
                                                            <li><a href="#">Mossimo</a></li>
                                                            <li><a href="#">Old Navy</a></li>
                                                            <li><a href="#">Tommv Hilfiqer</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/5.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/6.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/7.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item megamenu"><a href="{{ route('product') }}" class="nav-link">THRIFT <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">WOMEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li style="float: left; width: 40%;"><a href="#">View all</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Active Wears</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Blouses & Tops</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Dresses</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Hoodies & Sweetshirts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jackets</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jeans</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jerseys</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jumpsuits & Rompers</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Nightwears</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Paints</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Shorts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Shirts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Sweaters</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Swimwears</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">T-Shirts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Scarf</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">MEN</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Active Wears</a></li>
                                                            <li><a href="#">Hoodies & Sweetshirts</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Jerseys</a></li>
                                                            <li><a href="#">Paints</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">T-Shirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">YOUTH GIRLS</h6>

                                                       <ul class="megamenu-submenu">
                                                            <li style="float: left; width: 40%;"><a href="#">View all</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Active Wears</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Blouses & Tops</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Dresses</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Hoodies & Sweetshirts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jackets</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jeans</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Jerseys</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Paints</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Shorts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Shirts</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Sweaters</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">Swimwears</a></li>
                                                            <li style="float: left; width: 40%;"><a href="#">T-Shirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">YOUTH BOYS</h6>

                                                       <ul class="megamenu-submenu">
                                                            <li><a href="#">View all</a></li>
                                                            <li><a href="#">Active Wears</a></li>
                                                            <li><a href="#">Hoodies & Sweetshirts</a></li>
                                                            <li><a href="#">Jackets</a></li>
                                                            <li><a href="#">Jeans</a></li>
                                                            <li><a href="#">Jerseys</a></li>
                                                            <li><a href="#">Paints</a></li>
                                                            <li><a href="#">Shirts</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                            <li><a href="#">Sweaters</a></li>
                                                            <li><a href="#">T-Shirts</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/8.png" alt="image" >
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="{{ route('rework') }}" class="nav-link @if(Route::currentRouteName()=='rework') active @endif">REWORKS </a></li>
                                <li class="nav-item"><a href="#" class="nav-link">FEATURED </a></li>

                                <li class="nav-item megamenu"><a href="{{ route('brands') }}" class="nav-link @if(Route::currentRouteName()=='brands') active @endif">BRANDS <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">TOP BRANDS</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li style="float: left; width: 33%;"><a href="#">Nike</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Jordan</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Adidas</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Reebok</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Puma</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Fila</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Supreme</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Stussy</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Brockum</a></li>

                                                            <li style="float: left; width: 33%;"><a href="#">Carhartt</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Dickies</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">The Northface</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Patagonia</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">The Mountain</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Columbia</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Champion</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Russell</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Starter</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Ralph Lauren</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Tommy Hilfiger</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">GAP</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Calvin Klein</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Levi's</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Coogi</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Van Heusen</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Lee</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#">Harley Davidson</a></li>
                                                            <li style="float: left; width: 33%;"><a href="#"><b>A - Z Brands</b></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <ul class="megamenu-submenu">
                                                            <li>
                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/9.png" alt="image" style="height:250px">
                                                                </div>

                                                                <div class="aside-trending-products">
                                                                    <img src="{{url('')}}/assets/img/categories/10.png" alt="image" style="height:250px">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="{{ route('gift-card') }}" class="nav-link @if(Route::currentRouteName()=='gift-card') active @endif">GIFT CARDS </a></li>

                                <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link @if(Route::currentRouteName()=='blog') active @endif">BLOG </a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->