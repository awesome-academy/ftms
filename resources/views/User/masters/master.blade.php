<!DOCTYPE html>
<html lang="en">
<head>
    <!--========= Basic Page Needs =========-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--========== Specific Meta ==========-->
    <meta name="description" content="Online Education template Based on HTML5.">
    <meta name="keywords" content="HTML5, Template, Design, Development, education, edulab, online cources, training, online education, best education template">
    <!--======== Page Title===========-->
    <title>@lang('home.title')</title>
    <!--========== Favicons =========-->
    <!--====== Custom CSS for themes =======-->
    {{ Html::style(asset('css/style.css')) }}
    {{ Html::style(asset('css/font-awesome.min.css')) }}
    {{ Html::style(asset('css/themify-icons.css')) }}
    {{ Html::style(asset('css/plugins.css')) }}
    {{ Html::style(asset('css/app.css')) }}
    {{ Html::style(asset('css/custom.css')) }}
    {{ Html::style(asset('css/timeLine.css')) }}
    {{ Html::script(asset('js/modernizr-2.8.3.min.js')) }}

</head>
<body>
    <!-- HEADER section -->
    @include('User.headers.header')
    <!-- END HEADER section -->
    @yield('content')
    <!-- FOOTER section -->
    @include('User.footers.footer')
    <!-- END FOOTER section -->
    <!-- jQuery Latest Version -->
    {{ Html::script(asset('js/app.js')) }}
    {{ Html::script(asset('js/popper.min.js')) }}
    {{ Html::script(asset('js/bootstrap.min.js')) }}
    {{ Html::script(asset('js/plugins.js')) }}
    {{ Html::script(asset('js/main.js')) }}
    {{ Html::script(asset('js/custom.js')) }}
</body>
</html>
