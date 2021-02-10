<header class="main-header header-style-three">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container clearfix">

            <!--Info-->
            <div class="logo-outer">
                <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt="" title=""></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler For Mobile-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="#">Home</a>
                                <ul>
                                    <li><a href="{{ url('/' . $page='index') }}">Home</a></li>


                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">About us</a>
                                <ul>
                                    <li><a href="{{ url('/' . $page='about') }}">About Us</a></li>
                                    <li><a href="{{ url('/' . $page='team') }}">Our Team</a></li>
                                    <li><a href="{{ url('/' . $page='faq') }}">Faq</a></li>
                                    <li><a href="{{ url('/' . $page='services') }}">Services</a></li>
                                    <li><a href="{{ url('/' . $page='gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('/' . $page='comming-soon') }}">Comming Soon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                <div class="mega-menu">
                                    <div class="mega-menu-bar row clearfix">
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>About Us</h3>
                                            <ul>
                                                <li><a href="{{ url('/' . $page='about') }}">About Us</a></li>
                                                <li><a href="{{ url('/' . $page='team') }}">Our Team</a></li>
                                                <li><a href="{{ url('/' . $page='faq') }}">Faq</a></li>
                                                <li><a href="{{ url('/' . $page='services') }}">Services</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>Doctors</h3>
                                            <ul>
                                                <li><a href="{{ url('/' . $page='doctors') }}">Doctors</a></li>
                                                <li><a href="{{ url('/' . $page='doctors-detail') }}">Doctors Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>Blog</h3>
                                            <ul>
                                                <li><a href="{{ url('/' . $page='blog') }}">Our Blog</a></li>
                                                <li><a href="{{ url('/' . $page='blog-classic') }}">Blog Classic</a>
                                                </li>
                                                <li><a href="{{ url('/' . $page='blog-detail') }}">Blog Detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>Shops</h3>
                                            <ul>
                                                <li><a href="{{ url('/' . $page='shop') }}">Shop</a></li>
                                                <li><a href="{{ url('/' . $page='shop-single') }}">Shop Details</a></li>
                                                <li><a href="{{ url('/' . $page='shoping-cart') }}">Cart Page</a></li>
                                                <li><a href="{{ url('/' . $page='checkout') }}">Checkout Page</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown"><a href="#">Doctors</a>
                                <ul>
                                    <li><a href="{{ url('/' . $page='doctors') }}">Doctors</a></li>
                                    <li><a href="{{ url('/' . $page='doctors-detail') }}">Doctors Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Department</a>
                                <ul>
                                    <li><a href="{{ url('/' . $page='department') }}">Department</a></li>
                                    <li><a href="{{ url('/' . $page='department-detail') }}">Department Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="{{ url('/' . $page='blog') }}">Our Blog</a></li>
                                    <li><a href="{{ url('/' . $page='blog-classic') }}">Blog Classic</a></li>
                                    <li><a href="{{ url('/' . $page='blog-detail') }}">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Shop</a>
                                <ul>
                                    <li><a href="{{ url('/' . $page='shop') }}">Shop</a></li>
                                    <li><a href="{{ url('/' . $page='shop-single') }}">Shop Details</a></li>
                                    <li><a href="{{ url('/' . $page='shoping-cart') }}">Cart Page</a></li>
                                    <li><a href="{{ url('/' . $page='checkout') }}">Checkout Page</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ url('/' . $page='contact') }}">Contact</a></li>

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Main Menu End-->
                    <div class="nav-box">
                        <div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-1"></span>
                        </div>
                    </div>

                    <!-- Social Box -->
                    <ul class="social-box clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>

                    <!-- Search Btn -->
                    <div class="search-box-btn"><span class="icon flaticon-search"></span></div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-window-close"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
