<footer id="footer" class="site-footer">
    <!-- Start footer widgets area -->
    <div class="footer-widgets-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">@lang('home.QUICK')</h4>
                        <ul class="footer-widget-list list-unstyled">
                            <li><a href="#">@lang('home.Help')</a></li>
                            <li><a href="#">@lang('home.Contact')</a></li>
                            <li><a href="#">@lang('home.Reviews')</a></li>
                            <li><a href="#">@lang('home.About')</a></li>
                        </ul>
                    </div><!--/.footer-widget-->
                </div><!--/.col-lg-3-->
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">@lang('home.NAVIGATION')</h4>
                        <ul class="footer-widget-list list-unstyled">
                            <li><a href="#">@lang('home.Screen')</a></li>
                            <li><a href="#">@lang('home.how')</a></li>
                            <li><a href="#">@lang('home.Testimonial')</a></li>
                            <li><a href="#">@lang('home.Contact')</a></li>
                        </ul>
                    </div><!--/.footer-widget-->
                </div><!--/.col-lg-3-->
                <div class="col-lg-6 col-sm-12">
                    <div class="footer-newsletter footer-widget">
                        <h4 class="footer-title">@lang('home.NEWSLETTER')</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat.</p>
                        {!! Form::open(['class' => 'newsletter-form']) !!}
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Your email address">
                                <button type="submit" class="btn btn-default btn-primary">@lang('home.Subscribe')</button>
                            </div>
                        {!! Form::close() !!}
                    </div><!--/.footer-newsletter-->  
                </div><!--/.col-lg-6-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- End footer widgets area -->

    <!-- Start footer copyright area -->
    <div class="footer-copyright-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        &copy; Copyrighted by <a href="#">Thien&Duy.</a> 
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--End footer copyright area -->
</footer><!--End footer area -->
