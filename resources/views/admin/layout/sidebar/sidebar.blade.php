<div class="sidebar-header">
    <div class="logo">
        <a href="#"><img src="{{ asset('image/logos/logo.png') }}" alt="logo"></a>
    </div>
</div>
<div class="main-menu">
    <div class="menu-inner">
        <nav>
            <ul class="metismenu" id="menu">
                <li class="active">
                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>@lang('admin.user')</span></a>
                    <ul class="collapse">
                        <li class="{{ Request::is('supervisor') ? "active" : "" }}">
                            <a href="{{ route('supervisor')}}">@lang('admin.supervisor')</a>
                        </li>
                        <li class="{{ Request::is('trainee') ? "active" : "" }}">
                            <a href="{{ route('trainee')}}">@lang('admin.trainee')</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
