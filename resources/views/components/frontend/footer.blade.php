{{-- Footer Section Start Here --}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <a href="{{ route('frontend.home') }}">
                    <img src="{{ asset('frontend/assets/images/home/footer-logo.webp') }}" alt="footer-logo" class="footer-logo">
                </a>
                <p class="morbi">Established in 1992, Sara Research & Development Centre (SRDC) has evolved into a
                    leader in chemical research, development, and manufacturing. With a strong foundation in
                    scientific expertise and innovation, we have consistently pushed the boundaries of process
                    chemistry and specialty chemical production.
                </p>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="row two-rows-wrap">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="useful-link-text">Useful Links</h2>
                        <ul class="usefulLinks-List">
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">CRAMS </a></li>
                            <li><a href="#">CRO</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <h2 class="useful-link-text">Contact Us</h2>
                <div class="head-phone-white-main">
                    <div class="headphone-white">
                        <img src="{{ asset('frontend/assets/images/icons/location-blue.webp') }}" alt="loaction-white">
                    </div>
                    <div>
                        <p class="CallUs">Find Us</p>
                        <p class="CallUs-phone">W‐250 A, M.I.D.C, TTC, Rabale Industrial Area, Navi Mumbai ‐ 400
                            701, Maharashtra, India</p>
                        <a href="https://g.co/kgs/RcZVcdS" class="view-map-btn" target="_blank">Viwe Map</a>
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
