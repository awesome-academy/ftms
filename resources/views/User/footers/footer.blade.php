<footer id="footer" class="site-footer">
    <div class="footer-widgets-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">@lang('home.quick')</h4>
                        <ul class="footer-widget-list list-unstyled">
                            <li><a href="#">@lang('home.help')</a></li>
                            <li><a href="#">@lang('home.contact')</a></li>
                            <li><a href="#">@lang('home.reviews')</a></li>
                            <li><a href="#">@lang('home.about')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">@lang('home.navigation')</h4>
                        <ul class="footer-widget-list list-unstyled">
                            <li><a href="#">@lang('home.screen')</a></li>
                            <li><a href="#">@lang('home.how')</a></li>
                            <li><a href="#">@lang('home.testimonial')</a></li>
                            <li><a href="#">@lang('home.contact')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="footer-newsletter footer-widget">
                        <h4 class="footer-title">@lang('home.newsletter')</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat.</p>
                        {!! Form::open(['class' => 'newsletter-form']) !!}
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Your email address">
                                <button type="submit" class="btn btn-default btn-primary">@lang('home.subscribe')</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        &copy; Copyrighted by <a href="#">Thien&Duy.</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
