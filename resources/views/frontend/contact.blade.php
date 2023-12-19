@extends('layout.frontend.app')
@section('content')
        <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-6">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Contact</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact inner pt-100 md-pt-80">
                <div class="container">
                    <div class="content-info-part mb-60">
                        <div class="row gutter-16">
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-at"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Phone Number</h4>
                                        <a href="tel:+919519807777">
                                            (+91) 9519807777, 9696047083</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Email Address</h4>
                                        <a href="mailto:">fintaxbazar20@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-map-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Office Address</h4>
                                        <p>MMIG-01/08, Sitapur road yojana, Sector A, Aliganj Lucknow-226024, Uttar Pradesh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-part">
                        <div class="row md-col-padding">
                            <div class="col-md-5 custom1 pr-0">
                                <div class="img-part"></div>
                            </div>
                            <div class="col-md-7 custom2 pl-0">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="#">
                                    <div class="sec-title mb-53 md-mb-42">
                                        <div class="sub-title white-color">Let's Talk</div>
                                        <h2 class="title white-color mb-0">Get In Touch</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="E-mail" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="website" placeholder="Your Website" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="readon modify">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-map mt-100 md-mt-80">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.7286925238217!2d85.08436860652472!3d25.604724571735147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57bcc963a15b%3A0x544f557ed359598f!2sAshiana%2C%20Patna%2C%20Bihar%20800025!5e0!3m2!1sen!2sin!4v1685086717569!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Contact Section End -->
        </div>
        <!-- Main content End -->
@endsection
