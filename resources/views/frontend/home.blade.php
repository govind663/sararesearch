@extends('frontend.layouts.master')

@section('title')
SARA Research & Development Center Pvt. Ltd. | Home
@endsection

@push('styles')
@endpush

@section('content')
{{-- Slider Section Start Here --}}
<section class="shock-section">
    <div class="has-overlay"></div>
    <div class="video-text-slider">
        <div class="owl-carousel owl-theme video-banner">
            <div class="item">
                <div class="video-content">
                    <h2>Where Commitment Meets Curiosity, Breakthroughs Begins</h2>
                </div>
            </div>
            <div class="item">
                <div class="video-content">
                    <h2>Your Partner in Specialty Chemical Innovation</h2>
                </div>
            </div>
            <div class="item">
                <div class="video-content">
                    <h2>Specialty Chemicals for a Sustainable Future</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="video-wrapper">
        <video class="video vh-85 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted"
            loop="loop">
            <source src="{{ asset('frontend/assets/images/video/1.mp4') }}" type="video/mp4" >
        </video>
    </div>
</section>

{{-- What We Offer Section Start Here --}}
<section class="offer-wrap">
    <div class="container-fluid">
        <div class="heading heading-center">
            <h2>What We Offer</h2>
            <div class="heading-divider"></div>
            <p>Sara Research & Development Centre (SRDC) delivers cutting-edge solutions across multiple service
                areas</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="service-card style1 img-custom-anim-left" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="content">
                        <h3><a href="#">Contract Research Organization (CRO) </a></h3>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/assets/images/icons/servicesIcon1_1.png') }}" alt="icon">
                            <span>01</span>
                        </div>
                        <ul>
                            <li>Process research & development for organic chemistry </li>
                            <li>Scale-up assistance & turnkey solutions for plant modifications</li>
                        </ul>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style1" href="#">Know More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="service-card style1 img-custom-anim-left" data-aos="fade-up"
                    data-aos-duration="1300">
                    <div class="content">
                        <h3><a href="#">Contract Research & Manufacturing Services (CRAMS) </a></h3>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/assets/images/icons/servicesIcon1_2.png') }}" alt="icon">
                            <span>02</span>
                        </div>
                        <ul>
                            <li>Customized manufacturing of specialty & performance chemicals </li>
                            <li>Multistage synthesis and complex chemical transformations</li>
                        </ul>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style1" href="#">Know More <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="service-card style1 img-custom-anim-left" data-aos="fade-up"
                    data-aos-duration="1800">
                    <div class="content">
                        <h3><a href="#">Specialty Chemicals Production </a></h3>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/assets/images/icons/servicesIcon1_3.png') }}" alt="icon">
                            <span>03</span>
                        </div>
                        <ul>
                            <li>High-value, low-volume specialty chemicals </li>
                            <li>Manufacturing from gram to kilogram scale </li>
                        </ul>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style1" href="#">Know More <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tailored Section Start Here --}}
<section class="applications-wrap">
    <div class="container">
        <div class="heading heading-center">
            <h2>Tailored Solutions</h2>
            <div class="heading-divider"></div>
            <p>Our solutions cater to a wide range of industrial applications, including: </p>
        </div>
        <div class="row applications-flex-row">
            <div class="col-xl-3 col-lg-3">
                <div class="service-card style2">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service1.png') }}" alt="icon">
                        </div>
                        <div class="line-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                <path
                                    d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                    stroke="#b4b4b4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">Building Block Chemistry</a></h3>
                        <p>The industry &amp; factory and the category encompasses</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                            More
                        </a>
                    </div>
                </div>

                <div class="service-card style2">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service2.png') }}" alt="icon">
                        </div>
                        <div class="line-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                <path
                                    d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                    stroke="#b4b4b4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">Specialty Intermediates</a></h3>
                        <p>The industry &amp; factory and the category encompasses</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                            More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="thumb" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('frontend/assets/images/home/about.webp') }}" alt="thub">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="service-card style2 right-side">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service3.png') }}" alt="icon">
                        </div>
                        <div class="right-line-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" width="290" height="27"
                                viewBox="0 0 290 27" fill="none">
                                <path
                                    d="M290 1.00005L146.458 1.00006C145.506 1.00006 144.573 1.27201 143.77 1.78392L106.23 25.7162C105.427 26.2281 104.494 26.5 103.542 26.5L0 26.5"
                                    stroke="#b4b4b4">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">Precursor</a></h3>
                        <p>The industry &amp; factory and the category encompasses</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                            More
                        </a>
                    </div>
                </div>
                <div class="service-card style2 right-side">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service4.png') }}" alt="icon">
                        </div>
                        <div class="right-line-shape">
                            <svg xmlns="http://www.w3.org/2000/svg" width="290" height="27"
                                viewBox="0 0 290 27" fill="none">
                                <path
                                    d="M290 1.00005L146.458 1.00006C145.506 1.00006 144.573 1.27201 143.77 1.78392L106.23 25.7162C105.427 26.2281 104.494 26.5 103.542 26.5L0 26.5"
                                    stroke="#b4b4b4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">Cooling Agents</a></h3>
                        <p>The industry &amp; factory and the category encompasses</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                            More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 applications-text">
                <p>Sara Research & Development Centre (SRDC) is committed to Green Chemistry, ensuring sustainable
                    and efficient chemical processes that reduce waste and optimize resources. </p>
            </div>
        </div>
    </div>
</section>

{{-- About Sara Section Start Here --}}
<section class="about-wrap">
    <div class="container">
        <div class="heading heading-center">
            <h2>About Sara</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="about-text">
                    <p>Established in 1992, Sara Research & Development Centre (SRDC) has evolved into a leader in
                        chemical research, development, and manufacturing. With a strong foundation in scientific
                        expertise and innovation, we have consistently pushed the boundaries of process chemistry
                        and specialty chemical production. Over the years, we have built a reputation for precision,
                        reliability, and sustainability, making us a trusted partner for industries worldwide. </p>
                    <p>With state-of-the-art R&D and production facilities, a team of highly skilled chemists and
                        engineers, and a commitment to Green Chemistry, SRDC continues to drive scientific
                        advancements and industrial solutions. Our journey from a research-focused organization to a
                        full-fledged chemical manufacturing powerhouse reflects our dedication to excellence,
                        efficiency, and long-term industry impact.
                </div>
            </div>
        </div>
        <div class="row counter-row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box style2" data-aos="fade-up" data-aos-duration="1000">
                    <div class="counter">
                        <span class="counter-number">30</span> <span class="plus">+</span>
                    </div>
                    <div class="text">
                        <div class="line"></div>
                        <p>Specialty Chemicals Manufactured</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box style2" data-aos="fade-up" data-aos-duration="1300">
                    <div class="counter">
                        <span class="counter-number">100</span> <span class="plus">+</span>
                    </div>
                    <div class="text">
                        <div class="line"></div>
                        <p>Process R&D & Scale-Up Projects Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box style2" data-aos="fade-up" data-aos-duration="1600">
                    <div class="counter">
                        <span class="counter-number">30</span> <span class="plus">+</span>
                    </div>
                    <div class="text">
                        <div class="line"></div>
                        <p>Years of Industry Expertise</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-box style2" data-aos="fade-up" data-aos-duration="1800">
                    <div class="counter">
                        <span class="counter-number">7</span> <span class="plus">+</span>
                    </div>
                    <div class="text">
                        <div class="line"></div>
                        <p>Countries Catered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Advantages Section Start Here --}}
<section class="why-choose-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="heading heading-left">
                    <h2>Our Advantages </h2>
                    <div class="heading-divider"></div>
                    <p>Experience exceptional service, innovative solutions, and commitment to your satisfaction
                        with every interaction.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="owl-carousel owl-theme whyus">
                    <div class="item">
                        <div class="process-item">
                            <span class="process-number">1</span>
                            <div class="process-icon">
                                <i class="icon-bacteria"></i>
                            </div>
                            <h4 class="process-title">30+ Years of Expertise</h4>
                            <p class="process-desc">in Chemical R&D and Manufacturing</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="process-item">
                            <span class="process-number">2</span>
                            <div class="process-icon">
                                <i class="icon-bacteria"></i>
                            </div>
                            <h4 class="process-title">Seamless Scale-Up Capabilities</h4>
                            <p class="process-desc"> – From lab to commercial production </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="process-item">
                            <span class="process-number">3</span>
                            <div class="process-icon">
                                <i class="icon-bacteria"></i>
                            </div>
                            <h4 class="process-title">Custom Solutions</h4>
                            <p class="process-desc">– Tailored to your specific requirements </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="process-item">
                            <span class="process-number">4</span>
                            <div class="process-icon">
                                <i class="icon-bacteria"></i>
                            </div>
                            <h4 class="process-title">State-of-the-Art Infrastructure</h4>
                            <p class="process-desc">– Cutting-edge research & production facilities </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="process-item">
                            <span class="process-number">5</span>
                            <div class="process-icon">
                                <i class="icon-bacteria"></i>
                            </div>
                            <h4 class="process-title">Global Reach</h4>
                            <p class="process-desc">– Serving clients across India and worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Media & Events Section Start Here --}}
<section class="events-wrap">
    <div class="container">
        <div class="heading heading-center">
            <h2>Media & Events </h2>
            <div class="heading-divider"></div>
            <p>Stay tuned for the latest updates in chemical innovation, industry trends, and event participation.
            </p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="post-card style-1" data-aos="fade-up" data-aos-duration="1000">
                    <div class="image">
                        <img src="{{ asset('frontend/assets/images/home/img-1.webp') }}" alt="image" class="img-responsive" />
                        <div class="circle-btn-wrapper">
                            <a href="#" class="circle-btn">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tag-wrapper">
                            <span class="single-tag">News</span>
                            <span class="single-tag">Tach</span>
                        </div>
                        <h3 class="title">
                            <a href="#">Inspiring Designs for Inspired Where Innovation Meets</a>
                        </h3>
                        <div class="post-meta">
                            <a class="single-post-meta">
                                <span>Mary Fox</span>
                            </a>
                            <span class="dots"></span>
                            <a class="single-post-meta">
                                <span>07/11/2022</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="post-card style-1" data-aos="fade-up" data-aos-duration="1400">
                    <div class="image">
                        <img src="{{ asset('frontend/assets/images/home/img-2.webp') }}" alt="image" class="img-responsive" />
                        <div class="circle-btn-wrapper">
                            <a href="#" class="circle-btn">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tag-wrapper">
                            <span class="single-tag">News</span>
                            <span class="single-tag">Tach</span>
                        </div>
                        <h3 class="title">
                            <a href="#">The role of medical laboratories in infectious disease testing</a>
                        </h3>
                        <div class="post-meta">
                            <a class="single-post-meta">
                                <span>Mary Fox</span>
                            </a>
                            <span class="dots"></span>
                            <a class="single-post-meta">
                                <span>07/11/2022</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="post-card style-1" data-aos="fade-up" data-aos-duration="1800">
                    <div class="image">
                        <img src="{{ asset('frontend/assets/images/home/img-3.webp') }}" alt="image" class="img-responsive" />
                        <div class="circle-btn-wrapper">
                            <a href="#" class="circle-btn">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tag-wrapper">
                            <span class="single-tag">News</span>
                            <span class="single-tag">Tach</span>
                        </div>
                        <h3 class="title">
                            <a href="#">The benefits of digital sequence information in biological
                                research</a>
                        </h3>
                        <div class="post-meta">
                            <a class="single-post-meta">
                                <span>Mary Fox</span>
                            </a>
                            <span class="dots"></span>
                            <a class="single-post-meta">
                                <span>07/11/2022</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form Section Start Here --}}
<div class="contact-form-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 contact-image">
                <!-- <div class="image">
                  <img src="images/home/form-img.webp" class="img-responsive" alt="contact form image">
                </div> -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 contact-form-bg">
                <div class="comment-respond">
                    <div class="heading heading-center">
                        <h2>Get In Touch</h2>
                        <div class="heading-divider"></div>
                    </div>
                    <form action="#" method="post" class="comment-form">
                        <div class="row gx-2">
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="service">
                                        <option value="0" disabled selected>Select Service</option>
                                        <option value="1">CRO</option>
                                        <option value="2">CRAMS</option>
                                        <option value="3">Specialty Chemicals</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="country">
                                        <option value="SE">Select Country</option>
                                        <option value="US">United States</option>
                                        <option value="IN">India</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="CA">Canada</option>
                                        {{-- <option value="AU">Australia</option>
                                        <option value="DE">Germany</option>
                                        <option value="FR">France</option>
                                        <option value="IT">Italy</option>
                                        <option value="ES">Spain</option>
                                        <option value="MX">Mexico</option>
                                        <option value="BR">Brazil</option>
                                        <option value="JP">Japan</option>
                                        <option value="CN">China</option>
                                        <option value="RU">Russia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="KR">South Korea</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="EG">Egypt</option>
                                        <option value="AR">Argentina</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SE">Sweden</option>
                                        <option value="PL">Poland</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="TH">Thailand</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="PH">Philippines</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="BD">Bangladesh</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" cols="20" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="gt-btn style1" href="#">Submit <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
