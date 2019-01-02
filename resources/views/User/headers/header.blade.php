<!--====Header Area-->
<header id="site-header" class="header-area">
    <div class="header-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-menu-wrap hidden-xs hidden-sm">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="{{asset('image/')}}/logo.png}}" alt="avatar">
                            </a>
                        </div>
                        <nav class="menu">
                            <ul id="nav">
                                <li class="dropdown-trigger"><a href="#">@lang('home.home')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.Courses')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.Events')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.Pages')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.Blog')</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="register-contact-nav pull-right">
                            <div class="">
                                <a href="{{ route('logout') }}" title="">@lang('home.logout')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header"></div>

    <div class="mobile-menu">
        <a class="mobile-logo" href="index-2.html"><img src="{{asset('image/')}}/logo.png}}" alt="avatar"></a>
    </div>
</header>
