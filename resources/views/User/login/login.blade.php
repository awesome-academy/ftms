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
    {{ Html::script(asset('js/modernizr-2.8.3.min.js')) }}

</head>
<body>
    <section class="page-heading-section before-bg bg-image" id="login_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('login.login')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="login-form-area">
                        {!! Form::open(['method' => 'POST', 'route' => 'postLogin']) !!}
                            <h2>@lang('login.login')</h2>
                            @include('Error.error')
                            <p>
                                {{ Form::email('txtEmail', old('txtEmail'), ['class' => 'form-control', 'id' => 'user_login', 'placeholder' => trans('login.email')])}}
                            </p>
                            <p>
                                {{ Form::password('txtPassword', ['class' => 'form-control', 'id' => 'user_pass', 'placeholder' => trans('login.password')])}}
                            </p>
                            <a class="login-form-forgot-password" href="#">@lang('login.forgot_password')</a>
                            <p>
                                {{ Form::submit(trans('login.log_in_account'), ['class' => 'btn btn-default btn-primary']) }}
                            </p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
