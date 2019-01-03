<div class="row align-items-center">
    <div class="col-sm-12">
        <div class="user-profile pull-right">
            <img class="avatar user-thumb" src="{{ asset('image/avatar').'/'.auth()->user()->avatar }}" alt="avatar">
            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }} <i class="fa fa-angle-down"></i></h4>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">@lang('admin.profile')</a>
                <a class="dropdown-item" href="#">@lang('admin.changePassword')</a>
                <a class="dropdown-item" href="{{ route('logout') }}">@lang('admin.logout')</a>
            </div>
        </div>
    </div>
</div>
