@extends('admin.layout.master.master')
@section('main-content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('admin.supervisor')
                </h4>
                <div class="row justify-content-center">
                    {!! Form::open(['method' => 'PUT', 'route' => ['trainee.update', $getTrainee->id], 'enctype' => 'multipart/form-data']) !!}
                        <h2 class="text-uppercase">@lang('profile.lblEditTrainee')</h2>
                        @include('Error.error')
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    {!! Form::hidden('id_trainee', $getTrainee->id) !!}
                                    {!! Form::label('name', trans('profile.lbName'), ['class' => 'form-control-label']) !!}
                                    {!! Form::text('name', $getTrainee->name, ['class' => 'form-control', 'placeholder' => trans('profile.plName')]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('address', trans('profile.lbAddress'), ['class' => 'form-control-label']) !!}
                                    {!! Form::text('address', $getTrainee->address, ['class' => 'form-control', 'placeholder' => trans('profile.plAddress')]) !!}
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('phone', trans('profile.lbPhone'), ['class' => 'form-control-label']) !!}
                                            {!! Form::text('phone', $getTrainee->phone, ['class' => 'form-control', 'placeholder' => trans('profile.plPhone')]) !!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('email', trans('profile.lbEmail'), ['class' => 'form-control-label']) !!}
                                            {!! Form::email('email', $getTrainee->email , ['class' => 'form-control', 'placeholder' => trans('profile.plEmail')]) !!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('gender', trans('profile.lbGender'), ['class' => 'form-control-label']) !!}
                                            {!! Form::select('gender', [config('setting.male') => trans('profile.male'),
                                                 config('setting.female') => trans('profile.female')], $getTrainee->gender, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {!! Form::label('birthday', trans('profile.lbBirthday'), ['class' => 'form-control-label']) !!}
                                            {!! Form::date('birthday', $getTrainee->birthday, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        {!! Form::hidden('old_avatar', $getTrainee->avatar) !!}
                                        {!! Form::file('new_avatar', ['id' => 'imageUpload', 'accept' => '.png, .jpg, .jpeg']) !!}
                                        {!! Form::label('imageUpload', ' ') !!}
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview">
                                            <img src="{{ asset('image/avatar').'/'.$getTrainee->avatar }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            {!! link_to(URL::previous(), trans('profile.btnCancel'), ['class' => 'border rounded border-danger btn btn-outline-danger']) !!}
                            {!! Form::submit(trans('profile.btnEdit'), ['class' => 'border rounded border-success btn btn-outline-success']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
