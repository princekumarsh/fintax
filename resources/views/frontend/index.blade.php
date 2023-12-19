@extends('layout.frontend.app')
@section('content')

        <!-- Main content Start -->
        <div class="main-content">
           <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider11">
                <div class="slider-carousel3 owl-carousel">
                    <!-- Slide 1 -->
                    <div class="slider slide1">
                        <div class="container">
                            <div class="row">
                                <div class="offset-lg-5"></div>
                                <div class="col-lg-7 pl-30 md-pl-15">
                                    <div class="content-part">
                                        <div class="slider-des">
                                            <h1 class="sl-title mb-21">We Provide Personal loan Services</h1>
                                            <p class="sl-desc mb-40">We are leading Financial professional Consult providing company<br> all over world providing services over 40 years.</p>
                                        </div>
                                        <div class="slider-bottom">
                                            <ul>
                                                <li><a href="{{route('service.personalLoan')}}" class="readon">Get In Touch</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-part">
                                <img src="{{asset('public/assets/images/slider/sl11-ly1.png')}}" alt="">
                            </div>
                            <div class="sl-shape">
                                <img src="{{asset('public/assets/images/slider/sl11-ly3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="slider slide2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="content-part">
                                        <div class="slider-des">
                                            <h1 class="sl-title mb-21">We Provide Income tax Return for Salaried Person's Services</h1>
                                            <p class="sl-desc mb-40">We are leading   professional Financial Consultancy providing company<br> all over world providing services over 40 years.</p>
                                        </div>
                                        <div class="slider-bottom">
                                            <ul>
                                                <li><a href="{{route('service.salariedParsons')}}" class="readon">Get In Touch</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-part">
                                <img src="{{asset('public/assets/images/slider/sl11-ly2.png')}}" alt="">
                            </div>
                            <div class="sl-shape">
                                <img src="{{asset('public/assets/images/slider/sl11-ly3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--slide 3 -->
                    <div class="slider slide3">
                        <div class="container">
                            <div class="row">
                                <div class="offset-lg-5"></div>
                                <div class="col-lg-7 pl-30 md-pl-15">
                                    <div class="content-part">
                                        <div class="slider-des">
                                            <h1 class="sl-title mb-21">We Provide home loan Services</h1>
                                            <p class="sl-desc mb-40">We are leading Financial professional Consult providing company<br> all over world providing services over 40 years.</p>
                                        </div>
                                        <div class="slider-bottom">
                                            <ul>
                                                <li><a href="{{route('service.homeLoanSalaried')}}" class="readon">Get In Touch</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-part">
                                <img src="{{asset('public/assets/images/slider/sl11-ly1.png')}}" alt="">
                            </div>
                            <div class="sl-shape">
                                <img src="{{asset('public/assets/images/slider/sl11-ly3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--slide4-->
                    <div class="slider slide4">
                        <div class="container">
                            <div class="row">
                                <!--<div class="offset-lg-5"></div>-->
                                <div class="col-lg-6 pl-30 md-pl-15">
                                    <!-- <div class="image-part">-->
                                    <!--    <img src="{{asset('public/assets/images/slider/sl11-ly2.png')}}" alt="">-->
                                    <!--</div>-->
                                    <!--<div class="sl-shape">-->
                                    <!--    <img src="{{asset('public/assets/images/slider/sl11-ly3.png')}}" alt="">-->
                                    <!--</div>-->
                                    <div class="content-part">
                                        <div class="slider-des">
                                            <h1 class="sl-title mb-21">We Provide GST Registration for Private Limited Company Services</h1>
                                            <p class="sl-desc mb-40">We are leading   professional Financial Consultancy providing company<br> all over world providing services over 40 years.</p>
                                        </div>
                                        <div class="slider-bottom">
                                            <ul>
                                                <li><a href="{{route('service.gst_reg_pvtltdCom')}}" class="readon">Get In Touch</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6"
                                <div class="image-part">
                                <img src="{{asset('public/assets/images/slider/sl11-ly1.png')}}" alt="">
                                </div>
                                <div class="sl-shape">
                                    <img src="{{asset('public/assets/images/slider/sl11-ly3.png')}}" alt="">
                                    </div>
                                </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style5">
                <div class="container">
                    <div class="wraping pt-120 pb-50 md-pt-72">
                        <div class="row y-middle">
                            <div class="col-lg-5 pr-20 lg-pr-15 md-mb-30">
                                <div class="sec-title mb-45 md-mb-52 sm-mb-32">
                                    <div class="sub-title red-color2">Welcome to Fintax</div>
                                    <h2 class="title mb-18">We Are World Best in Finance and Consulting</h2>
                                    <div class="desc">"Trust our experienced team of financial experts to guide you towards a secure and prosperous future."</div>
                                </div>
                                <div class="counter-wrap">
                                    <div class="content-part mb-30">
                                        <div class="counter-part">
                                            <div class="rs-count thousand">25</div>
                                            <h4 class="title mb-0">Projects</h4>
                                        </div>
                                        <div class="desc-text">
                                            <div class="desc">"Discover a wealth of knowledge and resources on FinTax, empowering you to make informed decisions and take control of your finances."</div>
                                        </div>
                                    </div>
                                    <div class="content-part">
                                        <div class="counter-part">
                                            <div class="rs-count thousand">15</div>
                                            <h4 class="title mb-0">Customer</h4>
                                        </div>
                                        <div class="desc-text">
                                            <div class="desc">"Experience the peace of mind that comes from partnering with a trusted financial advisor dedicated to your financial success."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 pl-32 lg-pl-15">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/about/about11.png')}}" alt="">
                                    <div class="morphin"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Partner Section Start -->
            {{-- <div class="rs-partner modify6 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="70" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5"  data-lg-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <a href="https://rstheme.com/"><img src="{{asset('public/assets/images/partner/gray2/1.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="https://rstheme.com/"><img src="{{asset('public/assets/images/partner/gray2/2.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="https://rstheme.com/"><img src="{{asset('public/assets/images/partner/gray2/3.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="https://rstheme.com/"><img src="{{asset('public/assets/images/partner/gray2/4.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="https://rstheme.com/"><img src="{{asset('public/assets/images/partner/gray2/5.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="https://rstheme.com/"><img src="{{asset('public/assets/images/partner/gray2/6.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Partner Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style13 bg23 pt-108 pb-90 md-pt-72 md-pb-50">
                <div class="container">
                    <div class="sec-title mb-35 md-mb-51 sm-mb-31">
                        <div class="row y-middle">
                            <div class="col-lg-5 md-mb-18">
                                <div class="sub-title red-color2">Premium Services</div>
                                <h2 class="title mb-0">Our Latest Services</h2>
                            </div>
                            <div class="col-lg-7">
                                <div class="desc big pr-30 xs-pr-0">Beguiled and demoralized by the charms of pleasure of the moment so blinded by that they cannot foresee on the other hand we denounce with righteous indignation and dislike men who are so.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-30">
                            <div class="service-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/services/style13/1.jpg')}}" alt="">
                                    <div class="icon-part">
                                        <i class="fa fa fa-diamond"></i>
                                    </div>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Insurance Consulting</a></h4>
                                    <div class="desc">Lorem ipsum dolor sit amet consus sectetur adipiscing elit sed do eius mod.</div>
                                    <div class="btn-part">
                                        <a href="#"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="service-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/services/style13/2.jpg')}}" alt="">
                                    <div class="icon-part">
                                        <i class="fa fa fa-sitemap"></i>
                                    </div>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Financial Consulting</a></h4>
                                    <div class="desc">Lorem ipsum dolor sit amet consus sectetur adipiscing elit sed do eius mod.</div>
                                    <div class="btn-part">
                                        <a href="#"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <div class="service-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/services/style13/3.jpg')}}" alt="">
                                    <div class="icon-part">
                                        <i class="fa fa fa-line-chart"></i>
                                    </div>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Business Consulting</a></h4>
                                    <div class="desc">Lorem ipsum dolor sit amet consus sectetur adipiscing elit sed do eius mod.</div>
                                    <div class="btn-part">
                                        <a href="#"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- About Section Start -->
            <div class="rs-about style6 bg24 pt-120 pb-120 md-pt-72 md-pb-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-text-center">
                            <div class="img-part">
                                <img src="{{asset('public/assets/images/about/about11-2.png')}}" alt="">
                                <div class="morphin"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-80 lg-pl-15 md-mb-50 md-order-first">
                            <div class="sec-title mb-60 sm-mb-41">
                                <div class="sub-title red-color2">About Fintax</div>
                                <h2 class="title waving-line white-color">Best Reliable Solution For Your Business</h2>
                                <div class="desc white-color">Righteous indignation and dislike men who are so beguiled and demoralized by & charms of pleasure of the moment so blinded.Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. charms of pleasure of the moment so blinded on the other hand we denounce with.</div>
                            </div>
                            <div class="video-part">
                                <div class="video-btn border-style red2">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="title-part">
                                    <h4 class="title">Take a Tour <br>About Our Company</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Latest Project Section Start -->
            <div class="rs-project style2">
                <div class="top-part bg25 pt-112 md-pt-72">
                    <div class="container">
                        <div class="sec-title">
                            <div class="row">
                                <div class="col-lg-5 pl-40 lg-pl-15 md-mb-18">
                                    <div class="sub-title red-color2">Latest Projects</div>
                                    <h2 class="title mb-0">Our Latest Projects</h2>
                                </div>
                                <div class="col-lg-7 pr-40 lg-pr-15">
                                    <div class="desc big">"Experience the peace of mind that comes from partnering with a trusted financial advisor dedicated to your financial success."</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrappin">
                    <div class="container custom">
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="project-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/project/style2/1.jpg')}}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Insurance Consulting</a></h4>
                                    <span class="category"><a href="#">Business Advice</a></span>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="project-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/project/style2/2.jpg')}}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Market Research</a></h4>
                                    <span class="category"><a href="#">Business Advice</a></span>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="project-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/project/style2/3.jpg')}}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Financial Regulation</a></h4>
                                    <span class="category"><a href="">Business Advice</a></span>
                                </div>
                                <div class="btn-part">
                                    <a href=""><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                            <div class="project-wrap">
                                <div class="img-part">
                                    <img src="{{asset('public/assets/images/project/style2/4.jpg')}}" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="">Business Boosting</a></h4>
                                    <span class="category"><a href="#">Business Advice</a></span>
                                </div>
                                <div class="btn-part">
                                    <a href="#"><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Project Section End -->

            <!-- Request For Proposal Section Start -->
            <div class="rs-quote style2 pt-160 pb-161 md-pt-122 md-pb-124 sm-pt-80 sm-pb-80">
                <div class="container relative">
                    <div class="row">
                        <div class="offset-lg-5"></div>
                        <div class="col-lg-7 pr-55 lg-pr-15">
                            <form class="quote-form">
                                <div class="sec-title mb-34">
                                    <div class="sub-title red-color2">Need Financial Consulting?</div>
                                    <h2 class="title mb-0">Request For Callback</h2>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-30">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6 mb-30">
                                        <input type="email" name="email" placeholder="E-mail" required>
                                    </div>
                                    <div class="col-sm-6 mb-30">
                                        <input type="text" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    {{-- <div class="col-sm-6 mb-30">
                                        <input type="text" name="website" placeholder="Your Website" required>
                                    </div> --}}
                                    <div class="col-sm-12 mb-38">
                                        <textarea placeholder="Your Message Here"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="submit-btn">
                                            <button type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="left-img">
                        <img src="{{asset('public/assets/images/quote/left-img11.png')}}" alt="">
                        <div class="morphin"></div>
                    </div>
                </div>
            </div>
            <!-- Request For Proposal Section End -->

            <!-- Call to Action Section Start -->
            <div class="rs-cta style2 pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="cta-wrap text-center">
                    <h2 class="title">Let's Start Your Next Project With Us</h2>
                    <div class="btn-part">
                        <a class="readon" href="{{route('contact')}}">Contact Now</a>
                    </div>
                </div>
            </div>
            <!-- Call to Action Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style9 gray-bg2 pt-112 pb-111 md-pt-72 md-pb-80">
                <div class="container">
                    <div class="sec-title mb-51 sm-mb-31">
                        <div class="row">
                            <div class="col-lg-5 pl-40 lg-pl-15 md-mb-18">
                                <div class="sub-title red-color2">Testimonials</div>
                                <h2 class="title mb-0">Our Client Reviews</h2>
                            </div>
                            <div class="col-lg-7 pr-40 lg-pr-15">
                                <div class="desc big">"At FINTAX, we are committed to delivering personalized financial solutions tailored to your unique needs and goals."</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container custom-for-sl">
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="2" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2" data-lg-device="2" data-md-device-nav="false" data-md-device-dots="true" data-doteach="true">
                        <div class="testi-wrap mb-39 md-mb-0">
                            <div class="icon-part">
                                <img src="{{asset('public/assets/images/quote4.png')}}" alt="">
                            </div>
                            <div class="wraping">
                                <p class="desc mb-32">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                                <div class="posted-by">
                                    <div class="avatar">
                                        <img src="{{asset('public/assets/images/testimonial/avatar/1.jpg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Monty Moni</h4>
                                        <span class="designation">CEO, Keen IT Solution</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap mb-39 md-mb-0">
                            <div class="icon-part">
                                <img src="{{asset('public/assets/images/quote4.png')}}" alt="">
                            </div>
                            <div class="wraping">
                                <p class="desc mb-32">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                                <div class="posted-by">
                                    <div class="avatar">
                                        <img src="{{asset('public/assets/images/testimonial/avatar/2.jpg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Mike Hotten</h4>
                                        <span class="designation">CEO, Brick Consulting</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-wrap mb-39 md-mb-0">
                            <div class="icon-part">
                                <img src="{{asset('public/assets/images/quote4.png')}}" alt="">
                            </div>
                            <div class="wraping">
                                <p class="desc mb-32">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                                <div class="posted-by">
                                    <div class="avatar">
                                        <img src="{{asset('public/assets/images/testimonial/avatar/3.jpg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Nancy Lowe</h4>
                                        <span class="designation">CEO, Brick Consulting</span>
                                        <ul class="ratings">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Blog Section Start -->
            <div class="rs-blog style3 pt-104 pb-100 md-pt-72 md-pb-60 xs-pb-80">
                <div class="container">
                    <div class="sec-title mb-31 sm-mb-11 xs-mb-31">
                        <div class="row">
                            <div class="col-lg-5 pl-40 lg-pl-15 md-mb-18">
                                <div class="sub-title red-color2">News & Blog</div>
                                <h2 class="title mb-0">Latest News & Blog</h2>
                            </div>
                            <div class="col-lg-7 pr-40 lg-pr-15">
                                <div class="desc big">"At FINTAX, we are committed to delivering personalized financial solutions tailored to your unique needs and goals."</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container custom-for-sl">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="{{asset('public/assets/images/blog/1.jpg')}}" alt="">
                                <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Sep 2022</div>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><a href="#">"Factors That Affect Your Credit Score: What You Need to Know"</a></h4>
                                <div class="desc">"Unveiling the Credit Score Puzzle: Key Factors and Their Impact"</div>
                                <div class="btn-part">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="{{asset('public/assets/images/blog/2.jpg')}}" alt="">
                                <div class="blog-meta"><i class="fa fa-clock-o"></i> 15 Apr 2023</div>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><a href="#">
                                    "Managing Debt Effectively: Strategies for Paying off Loans"</a></h4>
                                <div class="desc">"Freedom from Debt: Proven Strategies to Conquer and Manage Your Loans"</div>
                                <div class="btn-part">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="{{asset('public/assets/images/blog/3.jpg')}}" alt="">
                                <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Apr 2023</div>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><a href="">
                                    Old vs New Tax Regime: Which Is Better?</a></h4>
                                <div class="desc">"Navigating the Tax Landscape: Comparing the Old and New Regimes to Determine the Best Fit for You"</div>
                                <div class="btn-part">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="{{asset('public/assets/images/blog/4.jpg')}}" alt="">
                                <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Apr 2023</div>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><a href="#">"Managing Multiple Credit Cards: Tips for Maintaining a Healthy Credit Score"</a></h4>
                                <div class="desc">"Credit Card Mastery: Strategies for Effectively Managing Multiple Cards and Boosting Your Credit Score"</div>
                                <div class="btn-part">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->
        </div>
        <!-- Main content End -->

@endsection
