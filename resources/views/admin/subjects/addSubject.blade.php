@extends('admin.layout.master.master')
@section('main-content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('admin.supervisor')</h4>
                <div class="col-8">
                    {!! Form::open(['method' => 'POST', 'route' => 'subjectStructure.store', 'enctype' => 'multipart/form-data']) !!}
                        <h2 class="text-uppercase">@lang('subject.lblAddTrainee')</h2>
                        @include('Error.error')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {!! Form::label('name', trans('subject.lblName'), ['class' => 'form-control-label']) !!}
                                    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => trans('subject.plName')]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', trans('subject.lblDescription'), ['class' => 'form-control-label']) !!}
                                    {!! Form::textarea('description', '' , ['class' => 'form-control', 'placeholder' => trans('subject.plDescription'), 'id' => 'message-text']) !!}
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            {!! link_to(URL::previous(), trans('profile.btnCancel'), ['class' => 'border rounded border-danger btn btn-outline-danger']) !!}
                            {!! Form::submit(trans('subject.btnSave'), ['class' => 'border rounded border-success btn btn-outline-success']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
