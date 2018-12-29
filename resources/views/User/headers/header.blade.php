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
                                <li class="dropdown-trigger"><a href="#">@lang('home.courses')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.events')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.pages')</a>
                                </li>
                                <li class="dropdown-trigger"><a href="#">@lang('home.blog')</a>
                                </li>
                            </ul>
                        </nav><!--/.menu-->
                        <div class="pull-right">
                            <span class="float-left">@lang('home.hello'){{ auth()->user()->name }}</span>
                            <div class="avatar-dropdown-menu float-right">
                                <div class="avatar-image">
                                    <img src="{{ asset('image/avatar').'/'.auth()->user()->avatar }}">
                                </div>
                                <div class="avatar-dropdown-menu-items">
                                    <ul>
                                        <li>
                                            <a href="{{ route('edit_profile') }}">@lang('home.myProfile')</a>
                                        </li>
                                        <li>
                                            <a href="">@lang('home.changePassword')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}">@lang('home.logout')</a>
                                        </li>
                                    </ul>
                                </div>
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
