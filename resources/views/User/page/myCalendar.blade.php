@extends('User.masters.master')
@section('content')
    <section class="page-heading-section before-bg bg-image" id="imgTimeLine">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">@lang('home.calendar')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h4>@lang('home.calendar')</h4>
				<ul class="timeline">
					<li>
						<a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
						<a href="#" class="float-right">21 March, 2014</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
					</li>
					<li>
						<a href="#">21 000 Job Seekers</a>
						<a href="#" class="float-right">4 March, 2014</a>
						<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
					</li>
					<li>
						<a href="#">Awesome Employers</a>
						<a href="#" class="float-right">1 April, 2014</a>
						<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection
