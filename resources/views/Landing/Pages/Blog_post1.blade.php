
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.8.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
       @include('Landing.layouts.landing_css_links')

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
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
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html" class="sub-menu-item">Saas</a></li>
                                        <li><a href="index-classic-saas.html" class="sub-menu-item">Classic Saas</a></li>
                                        <li><a href="index-agency.html" class="sub-menu-item">Agency</a></li>
                                        <li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
                                        <li><a href="index-classic-app.html" class="sub-menu-item">Classic Application</a></li>
                                        <li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
                                        <li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
                                        <li><a href="index-enterprise.html" class="sub-menu-item">Enterprise</a></li>
                                        <li><a href="index-services.html" class="sub-menu-item">Service</a></li>
                                        <li><a href="index-payments.html" class="sub-menu-item">Payments</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-developer.html" class="sub-menu-item">Developer</a></li>
                                        <li><a href="index-seo-agency.html" class="sub-menu-item">SEO Agency</a></li>
                                        <li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
                                        <li><a href="index-coworking.html" class="sub-menu-item">Coworking</a></li>
                                        <li><a href="index-it-solution.html" class="sub-menu-item">IT Solution </a></li>
                                        <li><a href="index-it-solution-two.html" class="sub-menu-item">IT Solution Two </a></li>
                                        <li><a href="index-business.html" class="sub-menu-item">Business</a></li>
                                        <li><a href="index-modern-business.html" class="sub-menu-item">Modern Business</a></li>
                                        <li><a href="index-finance.html" class="sub-menu-item">Finance </a></li>
                                        <li><a href="index-logistics.html" class="sub-menu-item">Delivery & Logistics <span class="mdi mdi-star text-warning"></span></a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-hotel.html" class="sub-menu-item">Hotel</a></li>
                                        <li><a href="index-construction.html" class="sub-menu-item">Construction</a></li>
                                        <li><a href="index-real-estate.html" class="sub-menu-item">Real Estate</a></li>
                                        <li><a href="index-videocall.html" class="sub-menu-item">Video Conference </a></li>
                                        <li><a href="index-blockchain.html" class="sub-menu-item">Blockchain </a></li>
                                        <li><a href="index-crypto-two.html" class="sub-menu-item">Cryptocurrency Two </a></li>
                                        <li><a href="index-integration.html" class="sub-menu-item">Integration</a></li>
                                        <li><a href="index-task-management.html" class="sub-menu-item">Task Management </a></li>
                                        <li><a href="index-email-inbox.html" class="sub-menu-item">Email Inbox </a></li>
                                        <li><a href="index-travel.html" class="sub-menu-item">Travel </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-insurance.html" class="sub-menu-item">Insurance</a></li>
                                        <li><a href="index-online-learning.html" class="sub-menu-item">Online Learning</a></li>
                                        <li><a href="index-course.html" class="sub-menu-item">Course</a></li>
                                        <li><a href="index-single-product.html" class="sub-menu-item">Product</a></li>
                                        <li><a href="index-social-marketing.html" class="sub-menu-item">Social Media</a></li>
                                        <li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
                                        <li><a href="index-car-riding.html" class="sub-menu-item">Car Ride</a></li>
                                        <li><a href="index-customer.html" class="sub-menu-item">Customer</a></li>
                                        <li><a href="index-software.html" class="sub-menu-item">Software</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-landing-one.html" class="sub-menu-item">Landing One </a></li>
                                        <li><a href="index-landing-two.html" class="sub-menu-item">Landing Two </a></li>
                                        <li><a href="index-landing-three.html" class="sub-menu-item">Landing Three </a></li>
                                        <li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
                                        <li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
                                        <li><a href="index-freelancer.html" class="sub-menu-item">Freelance </a></li>
                                        <li><a href="index-event.html" class="sub-menu-item">Event</a></li>
                                        <li><a href="index-ebook.html" class="sub-menu-item">E-Book</a></li>
                                        <li><a href="index-onepage.html" class="sub-menu-item">Saas <span class="badge bg-warning ms-2">Onepage</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                        <li><a href="page-aboutus-two.html" class="sub-menu-item"> About Us Two </a></li>
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-history.html" class="sub-menu-item">History </a></li>
                                        <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                        <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Account </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="account-profile.html" class="sub-menu-item">Profile</a></li>
                                        <li><a href="account-members.html" class="sub-menu-item">Members </a></li>
                                        <li><a href="account-works.html" class="sub-menu-item">Works </a></li>
                                        <li><a href="account-messages.html" class="sub-menu-item">Messages </a></li>
                                        <li><a href="account-chat.html" class="sub-menu-item">Chat </a></li>
                                        <li><a href="account-payments.html" class="sub-menu-item">Payments </a></li>
                                        <li><a href="account-setting.html" class="sub-menu-item">Setting</a></li>
                                        <li><a href="page-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                        <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                        <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html" class="sub-menu-item">Blog Grid</a></li>
                                        <li><a href="blog-grid-sidebar.html" class="sub-menu-item">Blog with Sidebar</a></li>
                                        <li><a href="blog-list.html" class="sub-menu-item">Blog Listing</a></li>
                                        <li><a href="blog-list-sidebar.html" class="sub-menu-item">Blog List & Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                        <li><a href="blog-detail-two.html" class="sub-menu-item">Blog Detail 2 </a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Case Study </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-cases.html" class="sub-menu-item">All Cases </a></li>
                                        <li><a href="page-case-detail.html" class="sub-menu-item">Case Detail </a></li>
                                    </ul>
                                </li>
                                <li><a href="course-detail.html" class="sub-menu-item">Course Detail <span class="mdi mdi-star text-warning"></span> </a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Login </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                                <li><a href="auth-cover-login.html" class="sub-menu-item">Login Cover</a></li>
                                                <li><a href="auth-login-three.html" class="sub-menu-item">Login Simple</a></li>
                                                <li><a href="auth-bs-login.html" class="sub-menu-item">BS5 Login </a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Signup </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                                <li><a href="auth-cover-signup.html" class="sub-menu-item">Signup Cover</a></li>
                                                <li><a href="auth-signup-three.html" class="sub-menu-item">Signup Simple</a></li>
                                                <li><a href="auth-bs-signup.html" class="sub-menu-item">BS5 Singup </a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Reset password </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                                <li><a href="auth-cover-re-password.html" class="sub-menu-item">Reset Password Cover</a></li>
                                                <li><a href="auth-re-password-three.html" class="sub-menu-item">Reset Password Simple</a></li>
                                                <li><a href="auth-bs-reset.html" class="sub-menu-item">BS5 Reset Password </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-comingsoon2.html" class="sub-menu-item">Coming Soon Two</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                        <li><a href="page-contact-one.html" class="sub-menu-item">Contact One</a></li>
                                        <li><a href="page-contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                        <li><a href="page-contact-three.html" class="sub-menu-item">Contact Three</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="footer.html" class="sub-menu-item">Footer Layouts </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="components.html" class="sub-menu-item">Components</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Demos</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-corporate.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/corporate.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Corporate</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-crypto.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/crypto.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Cryptocurrency</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-shop.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/shop.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Shop</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-portfolio.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/portfolio.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Portfolio</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="helpcenter-overview.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/help-center.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Help Center</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-hosting.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/hosting.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Hosting & Domain</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-job.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/job.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Job & Career</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forums.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/forums.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Forums</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-blog.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/blog.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Blog</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/comingsoon.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="../dashboard/index.html" target="_blank" class="sub-menu-item">Admin</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="bg-half-170 bg-light d-table w-100">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading">
                            <h2> Design your apps in your own way </h2>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li class="list-inline-item h6 user text-muted me-2"><i class="mdi mdi-account"></i> Calvin Carlo</li>
                                <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i> 25th June 2021</li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="position-breadcrumb">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                            <li class="breadcrumb-item"><a href="index.html">Landrick</a></li>
                            <li class="breadcrumb-item"><a href="#">Page</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                        </ul>
                    </nav>
                </div>
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="card blog blog-detail border-0 shadow rounded">
                            <img src="{{asset('landing-assets/images/blog/01.jpg')}}" class="img-fluid rounded-top" alt="">
                            <div class="card-body content">
                                <h6><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)" class="text-primary">Software</a>, <a href="javscript:void(0)" class="text-primary">Application</a></h6>
                                <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>
                                <blockquote class="blockquote mt-3 p-3">
                                    <p class="text-muted mb-0 fst-italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                </blockquote>
                                <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                                <div class="post-meta mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Comments :</h5>

                                <ul class="media-list list-unstyled mb-0">
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                    <small class="text-muted">15th August, 2021 at 01:25 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </li>

                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="images/client/02.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                    <small class="text-muted">15th August, 2021 at 05:44 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </li>

                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="images/client/03.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                    <small class="text-muted">16th August, 2021 at 03:44 pm</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>

                                        <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                            <li class="mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a class="pe-3" href="#">
                                                            <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                        </a>
                                                        <div class="commentor-detail">
                                                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                            <small class="text-muted">17th August, 2021 at 01:25 pm</small>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Leave A Comment :</h5>

                                <form class="mt-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Comment</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input id="name2" name="name" type="text" placeholder="Name" class="form-control ps-5" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input id="email2" type="email" placeholder="Email" name="email" class="form-control ps-5" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="send d-grid">
                                                <button type="submit" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div>
                        </div>

                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Related Posts :</h5>

                                <div class="row">
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="card blog rounded border-0 shadow">
                                            <div class="position-relative">
                                                <img src="images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top"></div>
                                            </div>
                                            <div class="card-body content">
                                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                                    </ul>
                                                    <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                                <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="card blog rounded border-0 shadow">
                                            <div class="position-relative">
                                                <img src="images/blog/02.jpg" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top"></div>
                                            </div>
                                            <div class="card-body content">
                                                <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                                    </ul>
                                                    <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                                <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                    <!-- BLog End -->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar ms-lg-4" style="margin-right:-100px;">
                            <div class="card-body p-0" >
                                <!-- Author -->
                                <div class="text-center">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Author
                                    </span>

                                    <div class="mt-4">
                                        <img src="{{asset('landing-assets/images/client/03.jpg')}}" class="img-fluid avatar avatar-medium rounded-pill shadow-md d-block mx-auto" alt="">

                                        <a href="blog-about.html" class="text-primary h5 mt-4 mb-0 d-block">Cristina Jota</a>
                                        <small class="text-muted d-block">Photographer & Blogger</small>
                                    </div>
                                </div>
                                <!-- Author -->

                                 <!-- Author -->
                                 <br>
                                @if ($sidebar_Data->Top_sidebar_status == "Show")
                                    <div class="card" style="width: 100%;">
                                        @if ($sidebar_Data->Top_sidebar_url == '')
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Top_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @else
                                        <a href="{{$sidebar_Data->Top_sidebar_url}}">
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Top_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @endif
                                  </div>
                                  @endif

                                  &nbsp;

                                  @if ($sidebar_Data->Top_sidebar_status == "Show")
                                    <div class="card" style="width: 100%;">
                                        @if ($sidebar_Data->Top_sidebar_url == '')
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Top_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @else
                                        <a href="{{$sidebar_Data->Top_sidebar_url}}">
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Top_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @endif
                                  </div>
                                  @endif

                                <!-- Author -->

                                <!-- RECENT POST -->
                                <div class="widget mt-4">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Recent Post
                                    </span>

                                    <div class="mt-4">
                                        <div class="d-flex align-items-center">
                                            <img src="images/blog/01.jpg" class="avatar avatar-small rounded" style="width: auto;" alt="">
                                            <div class="flex-1 ms-3">
                                                <a href="javascript:void(0)" class="d-block title text-dark">Consultant Business</a>
                                                <span class="text-muted">15th April 2021</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mt-3">
                                            <img src="images/blog/02.jpg" class="avatar avatar-small rounded" style="width: auto;" alt="">
                                            <div class="flex-1 ms-3">
                                                <a href="javascript:void(0)" class="d-block title text-dark">Grow Your Business</a>
                                                <span class="text-muted">15th April 2021</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mt-3">
                                            <img src="images/blog/03.jpg" class="avatar avatar-small rounded" style="width: auto;" alt="">
                                            <div class="flex-1 ms-3">
                                                <a href="javascript:void(0)" class="d-block title text-dark">Look On The Glorious Balance</a>
                                                <span class="text-muted">15th April 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- RECENT POST -->

                                <!-- TAG CLOUDS -->
                                <div class="widget mt-4">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Tagclouds
                                    </span>

                                    <div class="tagcloud text-center mt-4">
                                        <a href="jvascript:void(0)" class="rounded">Business</a>
                                        <a href="jvascript:void(0)" class="rounded">Finance</a>
                                        <a href="jvascript:void(0)" class="rounded">Marketing</a>
                                        <a href="jvascript:void(0)" class="rounded">Fashion</a>
                                        <a href="jvascript:void(0)" class="rounded">Bride</a>
                                        <a href="jvascript:void(0)" class="rounded">Lifestyle</a>
                                        <a href="jvascript:void(0)" class="rounded">Travel</a>
                                        <a href="jvascript:void(0)" class="rounded">Beauty</a>
                                        <a href="jvascript:void(0)" class="rounded">Video</a>
                                        <a href="jvascript:void(0)" class="rounded">Audio</a>
                                    </div>
                                </div>
                                <!-- TAG CLOUDS -->
                                <br>

                                @if ($sidebar_Data->Bottom_sidebar_status == "Show")
                                    <div class="card" style="width: 100%;">
                                        @if ($sidebar_Data->Bottom_sidebar_url == '')
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Bottom_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @else
                                        <a href="{{$sidebar_Data->Bottom_sidebar_url}}">
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Bottom_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @endif
                                  </div>
                                  @endif

                                  &nbsp;

                                  @if ($sidebar_Data->Bottom_sidebar_status == "Show")
                                    <div class="card" style="width: 100%;">
                                        @if ($sidebar_Data->Bottom_sidebar_url == '')
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Bottom_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @else
                                        <a href="{{$sidebar_Data->Bottom_sidebar_url}}">
                                        <img src="{{asset('uploads/users/'.$sidebar_Data->Bottom_sidebar_ad)}}" class="card-img-top" alt="Advertisement"></a>
                                        @endif
                                  </div>
                                  @endif

                                <!-- SOCIAL -->
                                <div class="widget mt-4">
                                    <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">
                                        Social Media
                                    </span>

                                    <ul class="list-unstyled social-icon text-center mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-py-60">
                            <div class="row">
                                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                    <a href="#" class="logo-footer">
                                        <img src="images/logo-light.png" height="24" alt="">
                                    </a>
                                    <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->

                                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Company</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Usefull Links</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Newsletter</h5>
                                    <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="foot-subscribe mb-3">
                                                    <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="footer-py-30 footer-bar">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div>
                        </div><!--end col-->

                        <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <ul class="list-unstyled text-sm-end mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="images/logo-dark.png" height="24" class="light-version" alt="">
                    <img src="images/logo-light.png" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <img src="images/contact.svg" class="img-fluid d-block mx-auto" style="max-width: 256px;" alt="">
                        <div class="card border-0 mt-5" style="z-index: 1">
                            <div class="card-body p-0">
                                <form method="post" name="myForm" onsubmit="return validateForm()">
                                    <p id="error-msg" class="mb-0"></p>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/4n73n" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- Style switcher -->
        <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
            <div>
                <h6 class="title text-center">Select Your Color</h6>
                <ul class="pattern">
                    <li class="list-inline-item">
                        <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color2" href="javascript: void(0);" onclick="setColor('green')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color3" href="javascript: void(0);" onclick="setColor('purple')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color4" href="javascript: void(0);" onclick="setColor('red')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color5" href="javascript: void(0);" onclick="setColor('skyblue')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color6" href="javascript: void(0);" onclick="setColor('skobleoff')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color7" href="javascript: void(0);" onclick="setColor('cyan')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color8" href="javascript: void(0);" onclick="setColor('slateblue')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color9" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                    </li>
                </ul>

                <h6 class="title text-center pt-3 mb-0 border-top">Theme Option</h6>
                <ul class="text-center list-unstyled">
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary rtl-version t-rtl-light mt-2" onclick="setTheme('style-rtl')">RTL</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary ltr-version t-ltr-light mt-2" onclick="setTheme('style')">LTR</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-rtl-version t-rtl-dark mt-2" onclick="setTheme('style-dark-rtl')">RTL</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-ltr-version t-ltr-dark mt-2" onclick="setTheme('style-dark')">LTR</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2" onclick="setTheme('style-dark')">Dark</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark light-version t-light mt-2" onclick="setTheme('style')">Light</a></li>
                </ul>

                <h6 class="title text-center pt-3 mb-0 border-top">Admin</h6>
                <ul class="text-center list-unstyled mb-0">
                    <li><a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-block btn-success mt-2">Admin Dashboard</a></li>
                </ul>
            </div>
            <div class="bottom">
                <a href="javascript: void(0);" class="settings bg-white title-bg-dark shadow d-block"><i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
            </div>
        </div>
        <!-- end Style switcher -->

        <!-- javascript -->
     @include('Landing.layouts.landing_javascript')<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>
