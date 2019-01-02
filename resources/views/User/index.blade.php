@extends('User.masters.master')
@section('content')
<div id="home-search-section" class="home-search-section-area home-header-two before-bg bg-image" id="imgSubject">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="welcome-text text-center tb">
                    <div class="tb-cell">
                        <h1>Learn anything to anyone from anywhere</h1>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint.</p>
                        {!! Form::open(['class' => 'product-search-form']) !!}
                            <div class="form-group">
                                <input class="form-controllar" name="search" placeholder="Search here" type="text">
                                <button class="btn btn-default btn-primary" type="submit">@lang('home.search')</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="services-section" class="services-section-area s-pd1">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
			    <div class="section-heading-area text-center">
				    <h2 class="section-heading text-capitalize">@lang('home.title1')</h2>
                    <p>{{$getCourse->description}}</p>
			    </div>
			</div>
		</div>
	</div>
</section>
<section id="courses-section" class="popular-courses-area bg-gray s-pd2">
	<div class="container">
	    <div class="row justify-content-md-center">
			<div class="col-lg-8">
			    <div class="section-heading-area text-center">
				    <h2 class="section-heading text-capitalize">@lang('home.popular')</h2>
			    </div>
			</div>
		</div>
		<div class="row courses-item-content">
            @foreach($getSubjects as $getSubject)
                <div class="col-lg-4 col-sm-6 design photography">
                    <a href="{{route('getSubject',$getSubject->IdSub)}}">
                        <div class="single-course-item border-radius">
                            <div class="course-thumb-area">
                                <img class="img-fluid" src="{{asset('image/')}}/courses/course1.jpg" alt="img">
                            </div>
                            <div class="course-content">
                                <h2>{{$getSubject->name}}</h2>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
	   </div>
    </div>
</section>
<section id="learning-section" class="learning-section-area s-pd2">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
			    <div class="section-heading-area text-center">
				    <h2 class="section-heading text-capitalize">@lang('home.title2')</h2>
			    </div>
			</div>
		</div>
		<div class="row">
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div>
   				</div>
   			</div>
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div>
   				</div>
   			</div>
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div>
   				</div>
   			</div>
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div>
   				</div>
   			</div>
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div>
   				</div>
   			</div>
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div>
   				</div>
   			</div>
		</div>
		<div class="row">
		    <div class="col-lg-12">
                <div class="group-btn text-center">
                    <a href="#" class="btn btn-default btn-primary">@lang('home.start')</a>
                    <a href="#" class="btn btn-default">@lang('home.explore')</a>
                </div>
            </div>
		</div>
	</div>
</section>
<section id="faqs-section" class="faqs-section-area s-pd1">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <div class="section-heading-area text-center">
                    <h2 class="section-heading text-capitalize">@lang('home.calendar')</</h2>
                </div>
            </div>
        </div>
        <div class="single-blog-page page-wrapper bg-gray s-pd100">
            <div class="blog-page-content">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <ul class="timeline">
                            @foreach($getSubjects as $getSubject)
                                <li>
                                    <h2>{{$getSubject->name}}</h2>
                                    <h3><a href="">Start</a>  {{$getSubject->start_subject}}</h3>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog-section" class="blog-section-area bg-gray s-pd2">
    <div class="container center">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <div class="section-heading-area text-center">
                    <h2 class="section-heading text-capitalize">@lang('home.member')</h2>
                </div>
            </div>
        </div>
        <div class="faq-resourse-area">
            <div class="container">
                <div class="row">
                    @foreach($getMembers as $getMember)
                        <div class="col-lg-3 col-md-6 col-6">
                            <a href="{{route('getMemberProfile',$getMember->id)}}">
                                <div class="single-resourse box text-center border-radius">
                                    <span class="fa fa-user"></span>
                                    <h3>{{$getMember->name}}</h3>
                                    <p>{{$getMember->address}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-button text-center">
                    <a href="#" class="btn btn-default btn-primary">@lang('home.go')</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
