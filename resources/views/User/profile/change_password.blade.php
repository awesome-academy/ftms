@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="profile_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('profile.change_password')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                {!! Form::open(['method' => 'POST', 'route' => 'post_change_password']) !!}
                <h2 class="text-uppercase">@lang('profile.change_password')</h2>
                @include('Error.error')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            {!! Form::label('old_password', trans('profile.lbOldPassword'), ['class' => 'form-control-label']) !!}
                            {!! Form::password('old_password', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('new_password', trans('profile.lbNewPassword'), ['class' => 'form-control-label']) !!}
                            {!! Form::password('new_password', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('confirm_password', trans('profile.lbConfirmPassword'), ['class' => 'form-control-label']) !!}
                            {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
                        </div>
                        <div align="center">
                            {!! Form::submit(trans('profile.btnSave'), ['class' => 'border rounded border-success btn btn-outline-success']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
