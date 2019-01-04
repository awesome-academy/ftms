@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="activity_course">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('history.current')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="events-page page-wrapper s-pd4">
        <div class="container">
            <div class="row">
                <h1 id="custom_lable"></h1>
                <div class="col-md-12">
                    <div class="single-event">
                        <div class="row">
                            @foreach($getSubjects as $getSubject)
                            <div class="col-lg-7 col-md-12 event-info">
                                <div class="event-header">
                                    <div class="title">
                                        <h2><a href="#">{{$getSubject->name}}</a></h2>
                                        <span class="time"> <i class="fa fa-clock-o"></i> Start {{$getSubject->start_subject}} | End {{$getSubject->end_subject}}</span>
                                    </div>
                                </div>
                                <div class="event-details">
                                    <a class="btn btn-default" href="#">
                                        @if($getSubject->status == config('setting.default'))
                                            @lang('history.done')
                                        @else
                                            @lang('history.unfinished')
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="event-thumb">
                                    <img class="img-fluid border-radius" src="{{asset('image/')}}/events/1.jpg" alt="img">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
