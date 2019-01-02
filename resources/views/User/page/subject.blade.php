@extends('User.masters.master')
@section('content')    
    <section class="page-heading-section before-bg bg-image" id="imgSubject">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">{{$subject->name}}</h2>
                        <a href="{{route('getIndex')}}" class="btn btn-default btn-primary">@lang('home.back')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="single-blog-page page-wrapper bg-gray s-pd100">
        <div class="blog-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sa-blog">
                            <div class="sa-blog__details">
                                <h2 class="sa-blog__title">Ridiculous Rules About Tweets not integtrte in face</h2>
                                <div class="sa-blog__more">
                                    <span><span class="blog__date"><a href="#">Start</a> {{$subject->start_subject}} </span></span>
                                </div>
                                <div class="sa-blog__content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium fugiat, beatae dolor possimus deleniti, a harum corporis iusto, adipisci quia reprehenderit numquam? Error autem cupiditate debitis nisi eum consequuntur maiores?</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolorem facilis dolores maiores repudiandae enim odit illum quibusdam magni, quidem repellat dolor soluta suscipit pariatur ipsa a dicta eius ducimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nostrum animi, in vero ducimus culpa neque explicabo saepe fugiat.</p>
                                    <p class="sa-blog__content__marked">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam accusantium porro molestiae dolor ullam adipisci reprehenderit corrupti.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, culpa dignissimos pariatur, sequi magni expedita! Porro minima similique quisquam, provident, tempora Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolore non iusto soluta labore voluptates iste, expedita ipsa. Minima voluptates autem, in a, quibusdam debitis recusandae harum! Maxime, praesentium deleniti.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolorem facilis dolores maiores repudiandae enim odit illum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="blog-sidebar">
                            <div class="bay-ticket-area">
                                <div class="header">
                                    <h2><span class="fa fa-ticket"></span>@lang('home.report')</h2>
                                </div>
                                @include('User.commons.errors')
                                {!! Form::open(['route' => ['postTask', $subject->id], 'method' => 'POST']) !!}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            {!! Form::label('title', trans('home.title2'), ['class' => 'col-form-label']) !!}
                                            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => trans('home.titlePl'), 'id' => 'recipient-name']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('description', trans('home.description'), ['class' => 'col-form-label']) !!}
                                            {!! Form::textarea('description', '' , ['class' => 'form-control', 'placeholder' => trans('home.descriptionPl'), 'id' => 'message-text']) !!}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::submit(trans('home.btnDone'), ['class' => 'btn btn-primary']) !!}
                                    </div>
                                {!! Form::close() !!}
                            </div>
                            <aside class="widget widget-recent-post">
                                <h2>@lang('home.Task')</h2>
                                @foreach($getTaks as $getTak)
                                    <div class="sidebar__single-post">
                                        <div class="single-post__thumb">
                                        </div>
                                        <div class="single-post__details">
                                            <h5><a href="#">{{$getTak->name}}</a></h5>
                                            <div class="single-post__more">
                                                <span class="date"><span class="blog__date">{{$getTak->description}}</span></span>
                                                <br>
                                                <span class="date"><span class="blog__date">{{$getTak->created_at}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-button text-center">
                    @if($subject->status == config('setting.default'))
                        <a href="#" class="btn btn-default btn-success">@lang('home.btnDone')</a>
                    @else
                        {!! Form::open(['route'=>['postFinish',$subject->id],'method' => 'POST']) !!}
                            {!! Form::submit(trans('home.finish'), ['class' => 'btn btn-default btn-primary']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
