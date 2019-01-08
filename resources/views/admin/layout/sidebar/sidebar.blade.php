<div class="sidebar-header">
    <div class="logo">
        <a href="#"><img src="{{ asset('image/logos/logo.png') }}" alt="logo"></a>
    </div>
</div>
<div class="main-menu">
    <div class="menu-inner">
        <nav>
            <ul class="metismenu" id="menu">
                <li class="{{ request()->routeIs('supervisor.*', 'trainee.*') ? "active" : "" }}">
                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>@lang('admin.user')</span></a>
                    <ul class="collapse">
                        <li class="{{ request()->routeIs('supervisor.index') ? "active" : "" }}">
                            <a href="{{ route('supervisor.index')}}">@lang('admin.supervisor')</a>
                        </li>
                        <li class="{{ request()->routeIs('trainee.index') ? "active" : "" }}">
                            <a href="{{ route('trainee.index')}}">@lang('admin.trainee')</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ request()->routeIs('course.*') ? "active" : "" }}">
                    <a href="{{ route('course.index') }}" aria-expanded="true">
                        <i class="ti-book"></i><span>@lang('admin.course')</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
