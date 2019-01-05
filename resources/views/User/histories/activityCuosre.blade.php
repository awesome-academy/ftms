@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="activity_course">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('home.course')</h2>
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
                        <h1 id="custom_lable">{{$getCourse->name}}</h1>
                        <div class="col-md-12">
                            <div class="single-event">
                                <div class="row">
                                    <h1 id="custom_lable">@lang('home.subject')</h1>
                                    @foreach($getSubjects as $getSubject)
                                        @if($getSubject->end_subject == null)
                                            @php
                                                continue;
                                            @endphp
                                        @else
                                            <div class="event-info">
                                                <div class="event-header">
                                                    <div class="title">
                                                        <h2><a href="event-details.html">{{$getSubject->name}}</a></h2>
                                                        <span class="time"> <i class="fa fa-clock-o"></i> @lang('home.start') {{$getSubject->start_subject}} </span>
                                                        <br>
                                                        <span class="time"> <i class="fa fa-clock-o"></i> @lang('home.end') {{$getSubject->end_subject}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <h1 id="custom_lable">@lang('home.task')</h1>
                                    @foreach($getTasks as $getTask)
                                        <div class="event-info">
                                            <div class="event-header">
                                                <div class="title">
                                                    <h2><a href="event-details.html">{{$getTask->name}}</a></h2>
                                                    <span class="time"> <i class="fa fa-clock-o"></i> @lang('home.write') {{$getTask->created_at}}</span>
                                                    <br>
                                                    <span class="time"> @lang('home.title'): {{$getTask->description}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="text-center">
                                        {{ $getTasks->render() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
