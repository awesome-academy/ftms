@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="login_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('profile.profile')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                {!! Form::open(['method' => 'POST', 'route' => 'post_edit_profile', 'enctype' => 'multipart/form-data']) !!}
                    <h2 class="text-uppercase">@lang('profile.profile')</h2>
                    @include('Error.error')
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                {!! Form::label('name', trans('profile.lbName'), ['class' => 'form-control-label']) !!}
                                {!! Form::text('name', auth()->user()->name, ['class' => 'form-control', 'placeholder' => trans('profile.plName')]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', trans('profile.lbAddress'), ['class' => 'form-control-label']) !!}
                                {!! Form::text('address', auth()->user()->address, ['class' => 'form-control', 'placeholder' => trans('profile.plAddress')]) !!}
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('phone', trans('profile.lbPhone'), ['class' => 'form-control-label']) !!}
                                        {!! Form::text('phone', auth()->user()->phone, ['class' => 'form-control', 'placeholder' => trans('profile.plPhone')]) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('email', trans('profile.lbEmail'), ['class' => 'form-control-label']) !!}
                                        {!! Form::email('email', auth()->user()->email, ['class' => 'form-control', 'placeholder' => trans('profile.plEmail'), 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('gender', trans('profile.lbGender'), ['class' => 'form-control-label']) !!}
                                        {!! Form::select('gender', [config('setting.male') => trans('home.male'),
                                         config('setting.female') => trans('home.female')], auth()->user()->gender, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('birthday', trans('profile.lbBirthday'), ['class' => 'form-control-label']) !!}
                                        {!! Form::date('birthday', auth()->user()->birthday, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    {!! Form::hidden('old_avatar', auth()->user()->avatar) !!}
                                    {!! Form::file('new_avatar', ['id' => 'imageUpload', 'accept' => '.png, .jpg, .jpeg']) !!}
                                    {!! Form::label('imageUpload', ' ') !!}
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview">
                                        <img src="{{ asset('image/avatar').'/'.auth()->user()->avatar }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div align="center">
                        {!! Form::submit(trans('profile.btnSave'), ['class' => 'border rounded border-success btn btn-outline-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
