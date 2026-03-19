<!-- Start Header Area -->
<header class="header navbar-area">

    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select id="select4">
                                        <option selected>$ USD</option>
                                        <option>€ EURO</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="select-position">
                                    <select id="select5">
                                        <option selected>English</option>
                                        <option>اردو</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-end">
                        <div class="user">
                            <i class="lni lni-user"></i> Hello
                        </div>
                        <ul class="user-login">
                            <li><a href="{{route('login')}}">Sign In</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">

                <!-- Logo -->
                <div class="col-lg-3 col-md-3 col-7">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('templates/assets/images/logo/logo.png') }}" alt="">
                    </a>
                </div>

                <!-- SEARCH FORM WITH CATEGORY -->
                <div class="col-lg-5 col-md-7 d-xs-none">
                    <form action="{{ route('products.search') }}" method="GET" class="main-menu-search">
                        <div class="navbar-search search-style-5">

                            <!-- CATEGORY SELECT -->
                            <div class="search-select">
                                <div class="select-position">
                                    <select name="category_id">
                                        <option value="">All Categories</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- SEARCH INPUT -->
                            <div class="search-input">
                                <input type="text" name="query" placeholder="Search products...">
                            </div>

                            <div class="search-btn">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </div>

                        </div>
                    </form>
                </div>

                <!-- Hotline / Contact -->
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Hotline: <span>(+92) 300 1234567</span></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Header Bottom -->
    <div class="container">
        <div class="row align-items-center">

            <!-- DYNAMIC CATEGORY MENU -->
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">
                    <div class="mega-category-menu">
                        <span class="cat-button"><i class="lni lni-menu"></i> All Categories</span>
                        <ul class="sub-category">
                            @foreach($categories as $category)
                                <li><a href="{{ route('products.category', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- NAVBAR -->
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse sub-menu-bar">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a href="{{ route('home') }}" class="active">Home</a></li>
                                <li class="nav-item"><a href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a href="{{ route('our.products') }}">Our Products</a></li>
                                <li class="nav-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- SOCIAL -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</header>
<!-- End Header Area -->
