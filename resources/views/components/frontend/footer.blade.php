{{-- Footer Section Start Here --}}
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                <a href="{{ route('frontend.home') }}">
                    <img src="{{ asset('frontend/assets/images/home/footer-logo.webp') }}" alt="footer-logo" class="footer-logo">
                </a>
                <p class="morbi">
                    Established in 1992, SARA Research & Development Centre (SRDC) has evolved into a leader
                    in chemical research, development, and manufacturing. With a strong foundation in scientific
                    expertise and innovation, we have consistently pushed the boundaries of process chemistry and
                    specialty chemical production.
                </p>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-4">
                <div class="row two-rows-wrap">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h2 class="useful-link-text">Useful Links</h2>
                        <ul class="usefulLinks-List">
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li><a href="{{ route('under-construction') }}">About Us</a></li>
                            <li><a href="{{ route('under-construction') }}">CRO</a></li>
                            <li><a href="{{ route('under-construction') }}">CRAMS </a></li>
                            <!--<li><a href="#">Media</a></li>-->
                            <li><a href="{{ route('under-construction') }}">Careers</a></li>
                            <li><a href="{{ route('under-construction') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="links-middle-footer">
                            <h2 class="useful-link-text">Product by Industries</h2>
                            <div class="links-middle-footer-list">
                                <ul class="usefulLinks-List">
                                    <li><a href="{{ route('under-construction') }}">Electronics Chemicals</a></li>
                                    <li><a href="{{ route('under-construction') }}">Specialty Chemicals</a></li>
                                    <li><a href="{{ route('under-construction') }}">Material Science</a></li>
                                    <li><a href="{{ route('under-construction') }}">Polymer Chemicals</a></li>
                                    <li><a href="{{ route('under-construction') }}">Flame Retardant Chemicals</a></li>
                                    <li><a href="{{ route('under-construction') }}">Specialty Catalyst</a></li>
                                </ul>
                                <ul class="usefulLinks-List">
                                    <li><a href="{{ route('under-construction') }}">Pharmaceutical</a></li>
                                    <li><a href="{{ route('under-construction') }}">Nutraceutical</a></li>
                                    <li><a href="{{ route('under-construction') }}">Flavor & Fragrances</a></li>
                                    <li><a href="{{ route('under-construction') }}">Agro Chemicals</a></li>
                                    <li><a href="{{ route('under-construction') }}">Biochemistry</a></li>
                                    <li><a href="{{ route('under-construction') }}">Textile Chemicals</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                <h2 class="useful-link-text">Contact Us</h2>
                <div class="head-phone-white-main">
                    <div class="headphone-white">
                        <img src="{{ asset('frontend/assets/images/icons/location-blue.webp') }}" alt="loaction-white">
                    </div>
                    <div>
                        <p class="CallUs">Find Us</p>
                        <p class="CallUs-phone">W‐250, M.I.D.C, TTC,<br> Rabale, Navi Mumbai ‐ 400 701,<br> Maharashtra, India</p>
                        <a href="https://g.co/kgs/RcZVcdS" class="view-map-btn" target="_blank">View Map</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Footer Copyright Section Start Here --}}
<div class="copyright-main">
    <div class="container">
        <div class="rights-reserved">
            <h2>
                <div id="copyright">
                    Copyright © {{ date('Y') }} SRDC. All rights reserved. Designed By
                    <a href="http://www.matrixbricks.com" target="_blank">
                        Matrix Bricks
                    </a>
                </div>
            </h2>
            <div class="home-media-icon-main-head">
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa fa-linkedin"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="home-media-icon-main">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
