<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ Html::style(asset('css/app.css')) }}
    {{ Html::style(asset('css/font-awesome.min.css')) }}
    {{ Html::style(asset('css/themify-icons.css')) }}
    {{ Html::style(asset('css/metisMenu.css')) }}
    {{ Html::style(asset('css/owl.carousel.min.css')) }}
    {{ Html::style(asset('css/slicknav.min.css')) }}
    {{ Html::style(asset('css/typography.css')) }}
    {{ Html::style(asset('css/default-css.css')) }}
    {{ Html::style(asset('css/admin/styles.css')) }}
    {{ Html::style(asset('css/admin/responsive.css')) }}
    {{ Html::script(asset('js/modernizr-2.8.3.min.js')) }}
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            @include('admin.layout.sidebar.sidebar')
        </div>
        <div class="main-content">
            <div class="header-area">
                @include('admin.layout.header.header')
            </div>
            <div class="page-title-area">
                @include('admin.layout.user_profile.user_profile')
            </div>
            <div class="main-content-inner">
                @yield('main-content')
            </div>
        </div>
        @include('admin.layout.footer.footer')
    </div>
    <div class="offset-area">
        @include('admin.layout.offset.offset')
    </div>

    {{ Html::script(asset('js/app.js')) }}
    {{ Html::script(asset('js/popper.min.js')) }}
    {{ Html::script(asset('js/bootstrap.min.js')) }}
    {{ Html::script(asset('js/owl.carousel.min.js')) }}
    {{ Html::script(asset('js/metisMenu.min.js')) }}
    {{ Html::script(asset('js/jquery.slimscroll.min.js')) }}
    {{ Html::script(asset('js/jquery.slicknav.min.js')) }}
    {{ Html::script(asset('js/plugins.js')) }}
    {{ Html::script(asset('js/scripts.js')) }}
</body>
</html>
