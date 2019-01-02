@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="member_Profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('home.profile')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                {!! Form::open(['method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                    <h2 class="text-uppercase">@lang('home.profile')</h2>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                {!! Form::label('name', trans('home.lbName'), ['class' => 'form-control-label']) !!}
                                {!! Form::label('name', $member->name, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', trans('home.lbAdress'), ['class' => 'form-control-label']) !!}
                                {!! Form::label('address', $member->address, ['class' => 'form-control']) !!}
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('phone', trans('home.lbPhone'), ['class' => 'form-control-label']) !!}
                                        {!! Form::label('phone', $member->phone, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('email', trans('home.lbEmail'), ['class' => 'form-control-label']) !!}
                                        {!! Form::label('email', $member->email, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('gender', trans('home.lbGender'), ['class' => 'form-control-label']) !!}
                                        {!! Form::label('gender', [config('setting.male') => trans('home.male'),
                                         config('setting.female') => trans('home.female')], $member->gender, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('birthday', trans('home.lbBirthay'), ['class' => 'form-control-label']) !!}
                                        {!! Form::label('birthday', $member->birthday, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    {!! Form::label('imageUpload', ' ') !!}
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview">
                                        <img src="{{ asset('image') }}/author/{{ $member->avatar }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
