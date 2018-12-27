@extends('User.masters.master')
@section('content')
<div id="home-search-section" class="home-search-section-area home-header-two before-bg bg-image" style="background-image: url({{asset('image/')}}/welcome-bg2.jpg);">
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
                                <button class="btn btn-default btn-primary" type="submit">@lang('home.Search')</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div><!--/.welcome-text-->
            </div><!--/.col-lg-12-->
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#home-search-section-->
<!--====Services Section
====================================-->
<section id="services-section" class="services-section-area s-pd1">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
			    <div class="section-heading-area text-center">
				    <h2 class="section-heading text-capitalize">@lang('home.title1')</h2>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia est deserunt mollit anim laborum. Sed perspiciatis unde omnis iste natus.</p>
			    </div><!--/.section-heading-area--> 
			</div><!--/.col-lg-8-->
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="single-service text-center">
                    <div class="icon">
                        <img src="{{asset('image/')}}/icon/s-icon1.png" alt="icon">
			        </div>
					<h3>@lang('home.Expert')</h3>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div><!--/.single-service-->
			</div><!--/.col-lg-4-->
			<div class="col-lg-4 col-md-4">
				<div class="single-service text-center">
                    <div class="icon">
                        <img src="{{asset('image/')}}/icon/s-icon2.png" alt="icon">
			        </div><!--/.row-->
					<h3>@lang('home.Learn')</h3>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut  enim ad minim veniam.</p>
				</div><!--/.single-service-->
			</div><!--/.col-lg-4-->
			<div class="col-lg-4 col-md-4">
				<div class="single-service text-center">
                    <div class="icon">
                        <img src="{{asset('image/')}}/icon/s-icon3.png" alt="icon">
			        </div><!--/.row-->
					<h3>@lang('home.Unlimited')</h3>
					<p>Sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div><!--/.single-service-->
			</div><!--/.col-lg-4-->	
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#services-section-->

<!--====Courses Section
====================================-->
<section id="courses-section" class="popular-courses-area bg-gray s-pd2">
	<div class="container">
	    <div class="row justify-content-md-center">
			<div class="col-lg-8">
			    <div class="section-heading-area text-center">
				    <h2 class="section-heading text-capitalize">@lang('home.Popular')</h2>
			    </div><!--/.section-heading-area--> 
			</div><!--/.col-lg-8-->
		</div><!--/.row-->	
		<div class="row">
            <div class="col-lg-12">
				<ul class="list-unstyled popular-filter-nav text-center">
					<li><a class="filter" href="#" data-filter="*">@lang('home.All')</a></li>
					<li><a class="filter" href="#" data-filter=".design">@lang('home.Design')</a></li>
					<li><a href="#" class="filter" data-filter=".development">@lang('home.Development')</a></li>
					<li><a href="#" class="filter" data-filter=".business">@lang('home.Business')</a></li>
					<li><a href="#" class="filter" data-filter=".photography">@lang('home.Photography')</a></li>
				</ul><!--/.popular-filter-nav-->
			</div><!--/.col-lg-12-->
        </div><!--/.row-->	
		<div class="row courses-item-content">
            <div class="col-lg-4 col-sm-6 design photography">
                <!--Single Course Item Start-->
                <div class="single-course-item border-radius">
                    <div class="course-thumb-area">
                        <img class="img-fluid" src="{{asset('image/')}}/courses/course1.jpg" alt="img">
                        <div class="course-meta">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <span class="course-duration">2.2 hours</span>
                    </div><!--/.course-thumb-area-->
                    <div class="course-content">
                        <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="course-reviews">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span class="total-reviews">(105 reviews)</span>
                        </div><!--/.course-reviews-->
                        <div class="trainer-profile clearfix">
                            <img class="rounded-circle" src="{{asset('image/')}}/author/author-1.jpg" alt="img">
                            <div class="trainer-info">
                                <h3>Kelium Smith</h3>
                                <p>24 april 2017</p>
                            </div>
                            <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                        </div><!--/.trainer-profile-->
                    </div><!--/.course-content-->
                </div><!--/.single-course-item-end-->
            </div><!--/.col-lg-4-->
            
            <div class="col-lg-4 col-sm-6 business">
                <!--Single Course Item Start-->
                <div class="single-course-item border-radius">
                    <div class="course-thumb-area">
                            <img class="img-fluid" src="{{asset('image/')}}/courses/course2.jpg" alt="img">
                        <div class="course-meta">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <span class="course-duration">2.2 hours</span>
                    </div><!--/.course-thumb-area-->
                    <div class="course-content">
                        <h2><a href="single-course.html">Isometric Mockup Design</a></h2>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="course-reviews">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span class="total-reviews">(105 reviews)</span>
                        </div><!--/.course-reviews-->
                         <div class="trainer-profile clearfix">
                            <img class="rounded-circle" src="{{asset('image/')}}/author/author-1.jpg" alt="img">
                            <div class="trainer-info">
                                <h3>Kelium Smith</h3>
                                <p>24 april 2017</p>
                            </div>
                            <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                        </div><!--/.trainer-profile-->
                    </div><!--/.course-content-->
                </div><!--/.single-course-item-end-->
            </div><!--/.col-lg-4-->
            <div class="col-lg-4 col-sm-6 design photography">
                <!--Single Course Item Start-->
                <div class="single-course-item border-radius">
                    <div class="course-thumb-area">
                        <img class="img-fluid" src="{{asset('image/')}}/courses/course3.jpg" alt="img">
                        <div class="course-meta">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <span class="course-duration">2.2 hours</span>
                    </div><!--/.course-thumb-area-->
                    <div class="course-content">
                        <h2><a href="single-course.html">HTML5 Essential Training</a></h2>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="course-reviews">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span class="total-reviews">(105 reviews)</span>
                        </div><!--/.course-reviews-->
                         <div class="trainer-profile clearfix">
                            <img class="rounded-circle" src="{{asset('image/')}}/author/author-1.jpg" alt="img">
                            <div class="trainer-info">
                                <h3>Kelium Smith</h3>
                                <p>24 april 2017</p>
                            </div>
                            <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                        </div><!--/.trainer-profile-->
                    </div><!--/.course-content-->
                </div><!--/.single-course-item-end-->
            </div><!--/.col-lg-4-->
            <div class="col-lg-4 col-sm-6 development business">
                <!--Single Course Item Start-->
                <div class="single-course-item border-radius">
                    <div class="course-thumb-area">
                        <img class="img-fluid" src="{{asset('image/')}}/courses/course4.jpg" alt="img">
                        <div class="course-meta">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <span class="course-duration">2.2 hours</span>
                    </div><!--/.course-thumb-area-->
                    <div class="course-content">
                        <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="course-reviews">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span class="total-reviews">(105 reviews)</span>
                        </div><!--/.course-reviews-->
                        <div class="trainer-profile clearfix">
                            <img class="rounded-circle" src="{{asset('image/')}}/author/author-1.jpg" alt="img">
                            <div class="trainer-info">
                                <h3>Kelium Smith</h3>
                                <p>24 april 2017</p>
                            </div>
                            <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                        </div><!--/.trainer-profile-->
                    </div><!--/.course-content-->
                </div><!--/.single-course-item-end-->
            </div><!--/.col-lg-4-->
            
            <div class="col-lg-4 col-sm-6 design">
                <!--Single Course Item Start-->
                <div class="single-course-item border-radius">
                    <div class="course-thumb-area">
                        <img class="img-fluid" src="{{asset('image/')}}/courses/course5.jpg" alt="img">
                        <div class="course-meta">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <span class="course-duration">2.2 hours</span>
                    </div><!--/.course-thumb-area-->
                    <div class="course-content">
                        <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="course-reviews">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span class="total-reviews">(105 reviews)</span>
                        </div><!--/.course-reviews-->
                        <div class="trainer-profile clearfix">
                            <img class="rounded-circle" src="{{asset('image/')}}/author/author-1.jpg" alt="img">
                            <div class="trainer-info">
                                <h3>Kelium Smith</h3>
                                <p>24 april 2017</p>
                            </div>
                            <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                        </div><!--/.trainer-profile-->
                    </div><!--/.course-content-->
                </div><!--/.single-course-item-end-->
            </div><!--/.col-lg-4-->
            <div class="col-lg-4 col-sm-6 development photography">
                <!--Single Course Item Start-->
                <div class="single-course-item border-radius">
                    <div class="course-thumb-area">
                        <img class="img-fluid" src="{{asset('image/')}}/courses/course6.jpg" alt="img">
                        <div class="course-meta">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <span class="course-duration">2.2 hours</span>
                    </div><!--/.course-thumb-area-->
                    <div class="course-content">
                        <h2><a href="single-course.html">Object-Oriented Python</a></h2>
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="course-reviews">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span class="total-reviews">(105 reviews)</span>
                        </div><!--/.course-reviews-->
                        <div class="trainer-profile clearfix">
                            <img class="rounded-circle" src="{{asset('image/')}}/author/author-1.jpg" alt="img">
                            <div class="trainer-info">
                                <h3>Kelium Smith</h3>
                                <p>24 april 2017</p>
                            </div>
                            <div class="course-cat text-capitalize text-right"><a href="#">Development</a></div>
                        </div><!--/.trainer-profile-->
                    </div><!--/.course-content-->
                </div><!--/.single-course-item-end-->
            </div><!--/.col-lg-4-->
			</div><!--/.row-->
			<div class="row">
			    <div class="col-lg-12">
                <div class="group-btn text-center">
                    <a href="#" class="btn btn-default btn-primary">Start Your Free Trail</a>
                    <a href="#" class="btn btn-default">Explore More Courses</a>
                </div><!--/.form-group-btn-->
            </div><!--/.col-lg-12-->
			</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#courses-section-->

<!--====Counter Section
====================================-->
<section class="counter-section before-bg bg-image s-pd145" style="background-image: url(image/counter-bg.jpg);">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-10">   
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-6">
                        <div class="single-counter">
                            <h2><span class="counter">874</span></h2>
                            <p>courses</p>
                        </div><!--/.single-counter-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-sm-3 col-6">
                        <div class="single-counter">
                            <h2><span class="counter">600</span></h2>
                            <p>students</p>
                        </div><!--/.single-counter-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-sm-3 col-6">
                        <div class="single-counter">
                            <h2><span class="counter">472</span></h2>
                            <p>E-Book</p>
                        </div><!--/.single-counter-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-sm-3 col-6">
                        <div class="single-counter">
                            <h2><span class="counter">243</span></h2>
                            <p>Teachers</p>
                        </div><!--/.single-counter-->
                    </div><!--/.col-lg-3-->
                </div><!--/.row-->
            </div><!--/.col-lg-10-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/.counter-section-->

<!--====Learning Section
====================================-->
<section id="learning-section" class="learning-section-area s-pd2">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
			    <div class="section-heading-area text-center">
				    <h2 class="section-heading text-capitalize">@lang('home.title2')</h2>
			    </div><!--/.section-heading-area--> 
			</div><!--/.col-lg-8-->
		</div><!--/.row-->
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
                    </div><!--/.learning-overlay-text-->
   				</div><!--/.single-learning-item-->
   			</div><!--/.col-lg-4-->
           
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div><!--/.learning-overlay-text-->
   				</div><!--/.single-learning-item-->
   			</div><!--/.col-lg-4-->
           
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div><!--/.learning-overlay-text-->
   				</div><!--/.single-learning-item-->
   			</div><!--/.learning-overlay-text-->
           
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div><!--/.learning-overlay-text-->
   				</div><!--/.single-learning-item-->
   			</div><!--/.col-lg-4-->
           
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div><!--/.learning-overlay-text-->
   				</div><!--/.single-learning-item-->
   			</div><!--/.col-lg-4-->
           
            <div class="col-lg-4 col-sm-12">
   				<div class="single-learning-item bg-image" style="background-image: url(image/learning/1.jpg);">
                    <div class="learning-overlay-text tb">
                        <div class="tb-cell">
                            <span class="course-duration">18 hours</span>
                            <h2><a href="#">Full Stack Web Developer</a></h2>
                            <p>Cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn btn-default">Explore</a>
                        </div>
                    </div><!--/.learning-overlay-text-->
   				</div><!--/.single-learning-item-->
   			</div><!--/.col-lg-4-->
		</div><!--/.row-->
		
		<div class="row">
		    <div class="col-lg-12">
                <div class="group-btn text-center">
                    <a href="#" class="btn btn-default btn-primary">@lang('home.Start')</a>
                    <a href="#" class="btn btn-default">@lang('home.Explore')</a>
                </div><!--/.group-btn-->
            </div><!--/.col-lg-12-->
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#learning-section-->

<!--====Faqs Section
====================================-->
<section id="faqs-section" class="faqs-section-area s-pd1">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <div class="section-heading-area text-center">
                    <h2 class="section-heading text-capitalize">Frequently Asked Questions</h2>
                </div><!--/.section-heading-area--> 
            </div><!--/.col-lg-8-->
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!--Single FAQ-->
                <div class="sengle-faq">
                    <span class="faq-number">A</span>
                    <div class="sengle-faq-content">
                        <h3>Officia deserunt mollit anim est laborum?</h3>
                        <P>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                    </div>
                </div><!--/.sengle-faq-end-->
                
                <!--Single FAQ-->
                <div class="sengle-faq">
                    <span class="faq-number">C</span>
                    <div class="sengle-faq-content">
                        <h3>Excepteur sint occaecat cupidatat?</h3>
                        <P>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div><!--/.sengle-faq-end-->
            </div><!--/.col-lg-6-->
            
            <div class="col-lg-6 col-sm-12">
                <!--Single FAQ-->
                <div class="sengle-faq">
                    <span class="faq-number">B</span>
                    <div class="sengle-faq-content">
                        <h3>Sed ut perspiciatis unde omnis?</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                </div><!--/.sengle-faq-end-->
                <!--Single FAQ-->
                <div class="sengle-faq">
                    <span class="faq-number">D</span>
                    <div class="sengle-faq-content">
                        <h3>Duis aute irure dolor in reprehenderit?</h3>
                        <p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div><!--/.sengle-faq-end-->
            </div><!--/.col-lg-6-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#faqs-section-->

<!--====Blog Section
====================================-->
<section id="blog-section" class="blog-section-area bg-gray s-pd2">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <div class="section-heading-area text-center">
                    <h2 class="section-heading text-capitalize">Recent news</h2>
                </div><!--/.section-heading-area--> 
            </div><!--/.col-lg-8-->
        </div><!--/.row-->
        <div class="row">
            <!-- Start single blog -->
            <div class="col-lg-4 col-sm-12">
                <div class="blog">
                    <div class="blog-thumb">
                        <img src="{{asset('image/')}}/blog/post-1.jpg" alt="blog image">     
                    </div>
                    <div class="blog-details">
                        <div class="blog-time">
                            <span class="blog-date">April 19th, 2017 By <a href="#">Alex Doe</a></span>
                            <span class="blog__category">Category <a href="#">Travel</a></span>
                        </div>
                        <div class="blog-title">
                            <h3><a href="single-blog.html">9 Ridiculous Rules About Tweets</a></h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quisquam, et laboriosam beatae. Voluptate omni.</p>
                        <div class="blog-more">
                            <a href="#" class="btn btn-default">Read More</a>
                            <span class="blog-comments"><a href="#">6 comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
            <!-- Start single blog -->
            <div class="col-lg-4 col-sm-12">
                <div class="blog">
                    <div class="blog-thumb">
                        <img src="{{asset('image/')}}/blog/post-2.jpg" alt="blog image">     
                    </div>
                    <div class="blog-details">
                        <div class="blog-time">
                            <span class="blog-date">April 19th, 2017 By <a href="#">Alex Doe</a></span>
                            <span class="blog__category">Category <a href="#">Travel</a></span>
                        </div>
                        <div class="blog-title">
                            <h3><a href="single-blog.html">9 Ridiculous Rules About Tweets</a></h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quisquam, et laboriosam beatae. Voluptate omni.</p>
                        <div class="blog-more">
                            <a href="#" class="btn btn-default">Read More</a>
                            <span class="blog-comments"><a href="#">6 comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
            <!-- Start single blog -->
            <div class="col-lg-4 col-sm-12">
                <div class="blog">
                    <div class="blog-thumb">
                        <img src="{{asset('image/')}}/blog/post-3.jpg " alt="blog image">     
                    </div>
                    <div class="blog-details">
                        <div class="blog-time">
                            <span class="blog-date">April 19th, 2017 By <a href="#">Alex Doe</a></span>
                            <span class="blog__category">Category <a href="#">Travel</a></span>
                        </div>
                        <div class="blog-title">
                            <h3><a href="single-blog.html">9 Ridiculous Rules About Tweets</a></h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quisquam, et laboriosam beatae. Voluptate omni.</p>
                        <div class="blog-more">
                            <a href="#" class="btn btn-default">Read More</a>
                            <span class="blog-comments"><a href="#">6 comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-button text-center">
                    <a href="#" class="btn btn-default btn-primary">@lang('home.go')</a>
                </div>
            </div><!--/.col-lg-12-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!-- End blog area -->
@endsection
