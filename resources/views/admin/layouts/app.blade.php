<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | PhysicLab</title> 
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/public/admin/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="/public/admin/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/public/admin/assets/css/style.css">
    @yield('styles') 
</head>

<body>
    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="/">
                            <img src="/public/admin/assets/images/logo/logo.png" alt="">
                            <img src="/public/admin/assets/images/logo/logo-light.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">
{{--
                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag" src="/public/admin/assets/images/flags/flag-1.jpg" alt=""><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img src="/public/admin/assets/images/flags/flag-1.jpg" alt=""> English</a></li>
                                            <li><a href="#"><img src="/public/admin/assets/images/flags/flag-2.jpg" alt=""> Japanese</a></li>
                                            <li><a href="#"><img src="/public/admin/assets/images/flags/flag-3.jpg" alt=""> Spanish </a></li>
                                            <li><a href="#"><img src="/public/admin/assets/images/flags/flag-4.jpg" alt=""> Germany</a></li>
                                        </ul>

                                    </li>

                                    <!--Mail-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-mail">
                                            <div class="head">
                                                <h4 class="title">You have 3 new mail.</h4>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="/public/admin/assets/images/avatar/avatar-2.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: New Account</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="/public/admin/assets/images/avatar/avatar-1.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="/public/admin/assets/images/avatar/avatar-2.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Product inquiry</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="/public/admin/assets/images/avatar/avatar-1.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">You have 4 new notification.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>

                                    </li>
--}}
                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="/public/admin/assets/user.svg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">{{ Auth::user()->name }}</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            
                                            <div class="body">
                                            <ul>
                                                <li>
                                                <form id="logout" action="/logout" method="post">
                                                    @csrf
                                                    <a href="javascript:document.getElementById('logout').submit()" >
                                                    <i class="zmdi zmdi-lock-open"></i>Выход</a>
                                                    </form>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li ><a href="/admin/scientist"><i class="fa fa-users"></i> <span>Scientists</span></a></li>
                        <li><a href="/admin/book"><i class="ti-book"></i> <span>Books</span></a></li>
                        <li><a href="/admin/article"><i class="ti-map"></i> <span>Articles</span></a></li>
                        <li><a href="/admin/category"><i class="ti-map"></i> <span>Category</span></a></li>
                        {{--
                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Basic Elements</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="elements-alerts.html"><span>Alerts</span></a></li>
                                <li><a href="elements-accordions.html"><span>Accordions</span></a></li>
                                <li><a href="elements-avatar.html"><span>Avatar</span></a></li>
                                <li><a href="elements-badge.html"><span>Badge</span></a></li>
                                <li><a href="elements-buttons.html"><span>Buttons</span></a></li>
                                <li><a href="elements-carousel.html"><span>Carousel</span></a></li>
                                <li><a href="elements-dropdown.html"><span>Dropdown</span></a></li>
                                <li><a href="elements-list-group.html"><span>List Group</span></a></li>
                                <li><a href="elements-media.html"><span>Media</span></a></li>
                                <li><a href="elements-modal.html"><span>Modal</span></a></li>
                                <li><a href="elements-pagination.html"><span>Pagination</span></a></li>
                                <li><a href="elements-progress.html"><span>Progress Bar</span></a></li>
                                <li><a href="elements-spinners.html"><span>Spinners</span></a></li>
                                <li><a href="elements-tabs.html"><span>Tabs</span></a></li>
                                <li><a href="elements-tooltip.html"><span>Tooltip</span></a></li>
                                <li><a href="elements-typography.html"><span>Typography</span></a></li>
                            </ul>
                        </li> 
                        --}}
                        

                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

        @yield('content')



        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2021 &copy; </p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="/public/admin/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/public/admin/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/public/admin/assets/js/vendor/popper.min.js"></script>
    <script src="/public/admin/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="/public/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/public/admin/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="/public/admin/assets/js/main.js"></script>

    @yield('scripts')


</body>

</html>