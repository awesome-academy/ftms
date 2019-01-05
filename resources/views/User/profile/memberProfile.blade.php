@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="profile_section">
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
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            {!! Form::label('name', trans('profile.lbName'), ['class' => 'form-control-label']) !!}
                            {!! Form::label('name', $member->name, ['class' => 'form-control', 'placeholder' => trans('profile.plName')]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', trans('profile.lbAddress'), ['class' => 'form-control-label']) !!}
                            {!! Form::label('address', $member->address, ['class' => 'form-control', 'placeholder' => trans('profile.plAddress')]) !!}
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('phone', trans('profile.lbPhone'), ['class' => 'form-control-label']) !!}
                                    {!! Form::label('phone', $member->phone, ['class' => 'form-control', 'placeholder' => trans('profile.plPhone')]) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('email', trans('profile.lbEmail'), ['class' => 'form-control-label']) !!}
                                    {!! Form::label('email', $member->email, ['class' => 'form-control', 'placeholder' => trans('profile.plEmail'), 'disabled']) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('gender', trans('profile.lbGender'), ['class' => 'form-control-label']) !!}
                                    {!! Form::select('gender', [config('setting.male') => trans('profile.male'),
                                     config('setting.female') => trans('profile.female')], $member->gender, ['class' => 'form-control disabled']) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('birthday', trans('profile.lbBirthday'), ['class' => 'form-control-label']) !!}
                                    {!! Form::label('birthday', $member->birthday, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                {!! Form::hidden('old_avatar', $member->avatar) !!}
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview">
                                    <img src="{{ asset('image/avatar').'/'.$member->avatar }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
