<header id="topnav" class="defaultscroll sticky bg-white">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="images/logo-dark.png" height="24" class="logo-light-mode" alt="">
            <img src="images/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>

        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0 pe-1">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    <i class="uil uil-search h5 text-dark align-middle"></i>
                </a>
            </li>

            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                </a>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <a href="https://1.envato.market/4n73n" target="_blank">
                    <div class="btn btn-icon btn-pills btn-primary"><i data-feather="shopping-cart" class="fea icon-sm"></i></div>
                </a>
            </li>
        </ul>

        {{-- @php
        if (auth('web')->user()) { --}}
            <a href="{{route('logout')}}" class="btn btn-soft-primary">Logout</a>
        }

        {{-- @endphp --}}

        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="index-blog.html" class="sub-menu-item">Home</a></li>

                <li><a href="blog-about.html" class="sub-menu-item">About</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Categories</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="blog-standard-post.html" class="sub-menu-item">Standard Post</a></li>
                        <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a></li>
                        <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a></li>
                    </ul>
                </li>

                <li><a href="javascript:void(0)" class="sub-menu-item">Lifestyle</a></li>

                <li><a href="javascript:void(0)" class="sub-menu-item">Technology</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>
