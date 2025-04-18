@extends('frontend.layouts.master')

@section('title')
    SARA Research & Development Center Pvt. Ltd. | Home
@endsection

@push('styles')
<style>
    .invalid-feedback{
        color: rgb(230, 23, 23);
        font-size: 14px;
    }
    .g-recaptcha {
        display: inline-block;
    }
</style>
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
                <source src="{{ asset('frontend/assets/images/video/1.mp4') }}" type="video/mp4">
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
                    <div class="service-card style1 img-custom-anim-left" data-aos="fade-up" data-aos-duration="1000">
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
                    <div class="service-card style1 img-custom-anim-left" data-aos="fade-up" data-aos-duration="1300">
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
                    <div class="service-card style1 img-custom-anim-left" data-aos="fade-up" data-aos-duration="1800">
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
                <h2>Offering Tailored Solutions & Specialty Products For</h2>
                <div class="heading-divider"></div>
                <!-- <p>Our solutions cater to a wide range of industrial applications, including: </p> -->
            </div>
            <div class="row applications-flex-row">
                <div class="col-xl-3 col-lg-3">
                    <div class="service-card style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/electronic.png') }}" alt="icon">
                            </div>
                            <div class="line-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                    <path
                                        d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                        stroke="#b4b4b4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Electronics Chemicals</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/service3.png') }}" alt="icon">
                            </div>
                            <div class="line-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                    <path
                                        d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                        stroke="#b4b4b4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Material Science</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/flames.png') }}" alt="icon">
                            </div>
                            <div class="line-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                    <path
                                        d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                        stroke="#b4b4b4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Flame Retardant Chemicals</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/drugs.png') }}" alt="icon">
                            </div>
                            <div class="line-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                    <path
                                        d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                        stroke="#b4b4b4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Pharmaceutical</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/flowers.png') }}" alt="icon">
                            </div>
                            <div class="line-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                    <path
                                        d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                        stroke="#b4b4b4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Flavor & Fragrances</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/flask.png') }}" alt="icon">
                            </div>
                            <div class="line-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 32" fill="none">
                                    <path
                                        d="M0 0.5H143.551C144.498 0.5 145.425 0.768609 146.224 1.27461L192.776 30.7254C193.575 31.2314 194.502 31.5 195.449 31.5H294"
                                        stroke="#b4b4b4">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="#">Biochemistry</a></h3>
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
                    <div class="thumb">
                        <img src="{{ asset('frontend/assets/images/home/about.webp') }}" alt="thub">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="service-card style2 right-side" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/service2.png') }}" alt="icon">
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
                            <h3><a href="#">Specialty Chemicals</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2 right-side" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/chain.png') }}" alt="icon">
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
                            <h3><a href="#">Polymer Chemicals</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2 right-side" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/expert-advice.png') }}" alt="icon">
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
                            <h3><a href="#">Specialty Catalyst</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2 right-side" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/bio.png') }}" alt="icon">
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
                            <h3><a href="#">Nutraceutical</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2 right-side" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/wheat.png') }}" alt="icon">
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
                            <h3><a href="#">Agro Chemicals</a></h3>
                            <p>The industry &amp; factory and the category encompasses</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="gt-btn style6  gt-btn-icon-2 " href="#">Read
                                More
                            </a>
                        </div>
                    </div>
                    <div class="service-card style2 right-side" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/fashion.png') }}" alt="icon">
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
                            <h3><a href="#">Textile Chemicals</a></h3>
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
                    <p>SARA Research & Development Centre (SRDC) is committed to Green Chemistry, ensuring sustainable and
                        efficient manufacturing processes that reduce waste and optimize resources for a better tomorrow.
                    </p>
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
                            <img src="{{ asset('frontend/assets/images/home/img-1.webp') }}" alt="image"
                                class="img-responsive" />
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
                            <img src="{{ asset('frontend/assets/images/home/img-2.webp') }}" alt="image"
                                class="img-responsive" />
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
                            <img src="{{ asset('frontend/assets/images/home/img-3.webp') }}" alt="image"
                                class="img-responsive" />
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
                        <form action="{{ route('frontend.contact.send') }}" method="post" class="comment-form" id="contact-section" enctype="multipart/form-data">
                            @csrf

                            <div class="row gx-2">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control @error('f_name') is-invalid @enderror" type="text" id="f_name" name="f_name" placeholder="First Name" value="{{ old('f_name') }}">
                                        @error('f_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control @error('l_name') is-invalid @enderror" type="text" id="l_name" name="l_name" placeholder="Last Name" value="{{ old('l_name') }}">
                                        @error('l_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control @error('phone') is-invalid @enderror" maxlength="10" type="text" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control @error('service') is-invalid @enderror" id="service" name="service">
                                            <option value="" >Select Service</option>
                                            <option value="CRO" {{ old('service') == 'CRO' ? 'selected' : '' }}>CRO</option>
                                            <option value="CRAMS" {{ old('service') == 'CRAMS' ? 'selected' : '' }}>CRAMS</option>
                                            <option value="Specialty Chemicals" {{ old('service') == 'Specialty Chemicals' ? 'selected' : '' }}>Specialty Chemicals</option>
                                        </select>
                                        @error('service')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control @error('country') is-invalid @enderror" id="country" name="country">
                                            <option value="">Select Country</option>
                                            <option value="Afghanistan" {{ old('country') == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                            <option value="Albania" {{ old('country') == 'Albania' ? 'selected' : '' }}>Albania</option>
                                            <option value="Algeria" {{ old('country') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                            <option value="American Samoa" {{ old('country') == 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
                                            <option value="Andorra" {{ old('country') == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                                            <option value="Angola" {{ old('country') == 'Angola' ? 'selected' : '' }}>Angola</option>
                                            <option value="Anguilla" {{ old('country') == 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cabo Verde">Cabo Verde</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China, People's Republic of">China, People's Republic of</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Islands">Cocos Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                            <option value="Congo, Republic of the">Congo, Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaçao">Curaçao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France, Metropolitan">France, Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French South Territories">French South Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island And Mcdonald Island">Heard Island And Mcdonald Island</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Johnston Island">Johnston Island</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="North Macedonia">North Macedonia</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestine, State of">Palestine, State of</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn Islands">Pitcairn Islands</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion Island">Reunion Island</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre & Miquelon">Saint Pierre & Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and South Sandwich">South Georgia and South Sandwich</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Stateless Persons">Stateless Persons</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Sudan, South">Sudan, South</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America (USA)">United States of America (USA)</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City">Vatican City</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" cols="20" rows="3" placeholder="Message" value="{{ old('message') }}">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12">
                                    <div class="form-group text-center">    
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}  
                                        <br>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif 
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="col-12 text-center">
                                    <button type="submit" class="gt-btn style1">Submit <i class="fa fa-angle-right"></i></button>
                                    {{-- <a class="gt-btn style1" href="#">Submit <i class="fa fa-angle-right"></i></a> --}}
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.location.hash === "#contact-section") {
            document.querySelector("#contact-section")?.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>

@endpush
