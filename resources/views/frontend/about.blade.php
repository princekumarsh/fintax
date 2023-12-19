@extends('layout.frontend.app')
@section('content')

<!-- Main content Start -->
{{-- <div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-1">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">About</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- About Section Start -->
    <div class="rs-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row y-middle mb-64 lg-mb-30 md-mb-0">
                <div class="col-lg-6 md-mb-95">
                    <div class="image-part">
                        <img src="assets/images/about/inner/left-img.jpg" alt="">
                        <div class="author-info">
                            <h3 class="name">Marlina Moore</h3>
                            <span class="designation">CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15 pr-50 lg-pr-15">
                    <div class="sec-title mb-25">
                        <div class="sub-title primary">About</div>
                        <h2 class="title mb-18">We Provides Best Advice For Your Business</h2>
                        <div class="desc">Fintax donec pulvinar magna id leoersi pellentesque impered dignissim
                            rhoncus euismod euismod eros vitae.</div>
                    </div>
                    <ul class="listing-style2 mb-33">
                        <li>Production or Trading of Good or Services for Sale</li>
                        <li>Cost of supplies and equipment</li>
                        <li>Change in the volume of expected sales</li>
                        <li>Change in the volume of expected sales</li>
                        <li>Change in the volume of expected sales</li>
                    </ul>
                    <div class="btn-part">
                        <a class="readon" href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Counter Section Start -->
    <div class="rs-counter style1 modify bg21 pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-52 md-mb-29">
                <div class="sub-title white-color">Fun Facts</div>
                <h2 class="title mb-0 white-color">Facts For Choosing Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="couter-part thousand">
                        <div class="rs-count">100</div>
                        <h5 class="title">Happy Clients</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="couter-part plus">
                        <div class="rs-count">250</div>
                        <h5 class="title">Projects Done</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                    <div class="couter-part plus">
                        <div class="rs-count">60</div>
                        <h5 class="title">Expert People</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="couter-part thousand">
                        <div class="rs-count">230</div>
                        <h5 class="title">Portfolios</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Team Section Start -->
    <div class="rs-team inner pt-100 pb-60 md-pt-80 md-pb-40">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3"
                data-md-device-nav="false" data-md-device-dots="false">
                <div class="team-item">
                    <div class="team-image">
                        <img src="assets/images/team/1.jpg" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h3 class="person-name"><a href="team-single.html">Mike Jason</a></h3>
                        <span class="designation">Business Advisor</span>
                        <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                            tempore veriations.</div>
                        <div class="team-social">
                            <ul>
                                <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-image">
                        <img src="assets/images/team/2.jpg" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h3 class="person-name"><a href="team-single.html">Francis Ibikunle</a></h3>
                        <span class="designation">Senior Consultant</span>
                        <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                            tempore veriations.</div>
                        <div class="team-social">
                            <ul>
                                <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-image">
                        <img src="assets/images/team/3.jpg" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h3 class="person-name"><a href="team-single.html">Ara Gates</a></h3>
                        <span class="designation">Finance Consultant</span>
                        <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                            tempore veriations.</div>
                        <div class="team-social">
                            <ul>
                                <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-image">
                        <img src="assets/images/team/4.jpg" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h3 class="person-name"><a href="team-single.html">Claire Divas</a></h3>
                        <span class="designation">Business Advisor</span>
                        <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                            tempore veriations.</div>
                        <div class="team-social">
                            <ul>
                                <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-image">
                        <img src="assets/images/team/5.jpg" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h3 class="person-name"><a href="team-single.html">Isabella Croline</a></h3>
                        <span class="designation">IT Consultant</span>
                        <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                            tempore veriations.</div>
                        <div class="team-social">
                            <ul>
                                <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-image">
                        <img src="assets/images/team/6.jpg" alt="Team Image">
                    </div>
                    <div class="text-bottom">
                        <h3 class="person-name"><a href="team-single.html">Rafian Sagar</a></h3>
                        <span class="designation">Senior Consultant</span>
                        <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                            tempore veriations.</div>
                        <div class="team-social">
                            <ul>
                                <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- Free Quote Section Start -->
    <div id="rs-freequote" class="rs-freequote style1 modify pt-80 pb-106 md-pt-72 md-pb-78">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 pl-65 md-pl-15">
                    <div id="form-messages" class="white-color"></div>
                    <form id="contact-form" class="quote-form" method="post"
                        action="https://rstheme.com/products/html/Fintax/mailer.php">
                        <div class="sec-title mb-53">
                            <div class="sub-title white-color">Let's Talk</div>
                            <h2 class="title white-color mb-0">Request a Free Quote</h2>
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
    <!-- Free Quote Section End -->
</div> --}}
<!-- Main content End -->

<style>
    @media only screen and (min-width: 992px) {
        .card {
            margin: 5%;
        }
    }

    @media only screen and (max-width: 768px) {
        .mbile {
            text-align: center;
            align-items: center !important;
            margin: 5% 10% 5%;
        }
    }

    @media only screen and (min-width: 769px) and (max-width: 990px) {
        .card {
            margin: 10%;
        }
    }


    .dd li {
        margin-left: 70%;
        margin-top: -10%;
    }

    @media screen and (max-width: 400px) {
        .dd li {
            margin-left: 0px;
            margin-top: 0px;
        }
    }
    /* @media screen and (max-width: 768px) {
        .mcard{
            flex-direction: column;
        }
        .cc{
            width: 22rem;
            text-align: center;
        }
    } */

    ul {
        margin-bottom: 10%;
    }

    /* .card .read-more:hover{
    font-size: 14px;
} */

    .card:hover {
        box-shadow: 8px 8px 8px #44524c;
        transform: scale(1.1);
    }

    .card {
        height: auto;
        width: auto;
        border: 1px solid black;
        transition: .3s;
        margin: 3rem;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>About Us</h2>
            <h4><u>Our Vision:</u></h4>
            <p>Mishra Legal consultant & Finance Associates company (since 2017) is reformed as ABR FINTAX SOLUTIONS
                PRIVATE LIMITED (FINTAX BAZAR) with new working strategies via online platform. Here we associate to
                those who wants to pursue the dream of their own business through B2B platform. All our Digital
                Entrepreneurs connects with Legal & Taxation Services, Financial Services, all types of Banking
                services, & provides quality base services at their customers door step.</p>
            <p>As ABR FINTAX Company we have brought changes in the working style as well as a real combination of brain
                & technology which makes our work smarter. We believe in keeping things transparent so through our
                platform each digital entrepreneur can keep a track on his working & proceedings.</p>
            <p>Our online platform, FINTAX BAZAR is a complete solution to any business. Any requirement related with
                day to day working of the individual can be taken care & served at his doorstep. Currently our service
                availability is in UTTAR PRADESH & we have vision to cover PAN INDIA so no one in any corner of our
                nation left unserved.</p>
            <p>Being a part of DIGITAL INDIA, we are moving ahead keeping our nation and our DIGITAL ENTREPRENEURS
                together to create work opportunities for everyone and everywhere.</p>
        </div>
    </div>

    <h5>•TAX, Finance & Corporate services:</h5>

    <div class="row">
        <div class="col-md-6 col-lg-4 mbile">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrations For Startups:</h5>
                    <p class="card-text">Partnership Firm</p>
                    <p class="card-text">One Person Company (OPC)</p>
                    <p class="card-text">Limited Liability Partnership (LLP)</p>
                    <p class="card-text">Private & Public Limited Company</p>
                    <p class="card-text">Indian Subsidiary</p>
                    <p class="card-text">Nidhi Company</p>
                    <p class="card-text">Producer Company</p>
                    <p class="card-text">Section 8 Company (NGO)</p>
                    <p class="card-text">Company Registrations in United States</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mbile">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Taxation:</h5>
                    <p class="card-text">GST Registrations</p>
                    <p class="card-text">GST Returns & Filings</p>
                    <p class="card-text">GST Letter-of-Undertaking (LUT) </p>
                    <p class="card-text">Filing</p>
                    <p class="card-text">Temporary GST Registration</p>
                    <p class="card-text">GST Registration For Foreigners</p>
                    <p class="card-text">GST Registration Cancellation</p>
                    <p class="card-text">TDS Return Filing</p>
                    <p class="card-text">ITR-1 to 7 Form Filing</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mbile">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Other Services:</h5>
                    <p class="card-text">Digital Signature Certificate (DSC)</p>
                    <p class="card-text">Udyam (MSME) Registration</p>
                    <p class="card-text">Import Export Code (IEC) </p>
                    <p class="card-text">Registration</p>
                    <p class="card-text">FSSAI Registration</p>
                    <p class="card-text">ESI Registration</p>
                    <p class="card-text">Trade Licence Registration</p>
                    <p class="card-text">Professional Tax (PT) Registration</p>
                    <p class="card-text">PF Registration & Return Filing</p>
                    <p class="card-text">Section 12A & 80G Registration</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mbile">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Annual Compliances For:</h5>
                    <p class="card-text">Proprietorship Entity</p>
                    <p class="card-text">Partnership Firm</p>
                    <p class="card-text">Limited Liability Partnership (LLP)</p>
                    <p class="card-text">Private Limited Company</p>
                    <p class="card-text">Foreign Subsidiary</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mbile">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Intellectual Property Rights (IPR):</h5>
                    <p class="card-text">Trademark Registration</p>
                    <p class="card-text">Copyright Registration</p>
                    <p class="card-text">Patent Registration</p>
                    <p class="card-text">Design Registration</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mbile">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Corporate Requirements:</h5>
                    <p class="card-text">Change of Registered Office</p>
                    <p class="card-text">Adding of Directors or Promoters</p>
                    <p class="card-text">Removal of Directors or Promoters</p>
                    <p class="card-text">Increasing Authorized Capital</p>
                    <p class="card-text">Share Transfers</p>
                    <p class="card-text">MoA & AoA Amendments</p>
                    <p class="card-text">Winding Up of a Company or an LLP</p>
                </div>
            </div>
        </div>

    </div>

    <h4>• Banking Services:</h4>


    <div class="card mbile" >
        <div class="row mcard">
            <div class="card-body" style="padding: 5%">
                <p class="card-text">HOME LOAN</p>
                <p class="card-text">Plot Purchase</p>
                <p class="card-text">Loan Against Property </p>
                <p class="card-text">Personal Loan </p>
                <p class="card-text">Digital Loan</p>
                <p class="card-text">Mudra Loan</p>
                <p class="card-text">Educational Loan</p>
                <p class="card-text">Auto Loan</p>
            </div>
            <div class="card-body" style="padding: 5%">
                <p class="card-text">Construction Loan</p>
                <p class="card-text">Plot Purchase+ Construction Loan</p>
                <p class="card-text">Business Loan</p>
                <p class="card-text">Instant Digital Loan</p>
                <p class="card-text">Project Loan</p>
                <p class="card-text">CC Limit/ ODD Limit</p>
                <p class="card-text">Commercial Loan</p>
                <p class="card-text">Credit Card</p>
            </div>
        </div>
    </div>

    <h4>• Investment Services:</h4>

    <div class="card mbile">
        <div class="row">
            <div class="card-body" style="padding: 5%">
                <p class="card-text">Mutual Funds</p>
                <p class="card-text">Insurance</p>
                <p class="card-text">SIP</p>
            </div>
            <div class="card-body" style="padding: 5%">
                <p class="card-text">Fixed Deposit</p>
                <p class="card-text">Investment services</p>
                <p class="card-text">Motor & Car Insurance</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4><u>Our Tie Ups:</u></h4>
            <p>We are channel partner for leading finance companies such as RU Loans, Deals of Loan, Red Mill Mall,
                Finance Bazar as a DSA agent and working with other Government Banks & NBFC Banks. </p>

            <h4><u>Our Strength:</u></h4>
            <p>The only vision of FINTAX BAZAR is to provide the loan to every customer approaching it, either through
                our lending or from other financial institutions where ever he is eligible. To make this possible we are
                utilizing technology which is providing simple and great experience to our customers. Our Team along
                with 5 years’ experience is my positive strength. Our team member are well educated and experience
                holder. </p>
            <h4><u>Our Policy:</u></h4>
            <p><strong>• Why ABR FINTAX Solutions Private Limited?</strong></p>
            <p>Services at Fintaxbazar.com are provided by the firm ABR FinTax Solutions Private Limited. Here we
                respect your privacy. Our Privacy Policy gives you all kind of details about our data collection methods
                and its usage. You are advised to please read the Privacy Policy carefully. By accessing the services
                provided by ABR FinTax Solutions Private limited, you agree to the collection and use of your data by
                ABR FinTax Solutions Private limited in the manner provided in this Privacy Policy.</p>
            <p>By registering yourself at www.fintaxbazar.com you are authorizing us & our associate partners to give
                you a call and offer their services for the product you have opted for, imparting product knowledge,
                offering promotional offers running on website & offers by the associated third parties. Also,
                irrespective of your DND or DNC registration service, you authorize us to give you a call from the
                fintaxbazar.com & associate partners for the above-mentioned purposes till 50 days of your registration
                with us. Also based on your active opt-in you are open to receive promotional offers from
                advertiser/partnering website hence there is no DNC check required there forth.</p>
            <p>This Privacy Policy covers fintaxbazar.com treatment of personally identifiable information that
                fintaxbazar.com collects when you are on the fintaxbazar.com site, and when you use fintaxbazar.com
                services. This policy also covers fintaxbazar.com treatment of any personally identifiable information
                that fintaxbazar.com business partners share with fintaxbazar.com. This policy does not apply to the
                practices of companies that fintaxbazar.com does not own or control or to people that fintaxbazar.com
                does not employ or manage.</p>
            <p>fintaxbazar.com collects personally identifiable information when you register for an fintaxbazar.com
                account, use certain fintaxbazar.com products or services, visits fintaxbazar.com pages and enter
                promotions or sweepstakes. fintaxbazar.com may also receive personally identifiable information from our
                business partners.</p>
            <p>When you register with fintaxbazar.com, we ask for your first name, last name, time zone, zip/postal
                code, country, state, city, email, birth date, and gender. Once you register with fintaxbazar.com and
                sign in to our services, you are not anonymous to us.</p>
            <p>Also, during registration, you will be requested to register your mobile phone and email id, pager, or
                other device to receive text messages, notifications, and other services to your wireless device. By
                registration, you authorize us to send SMS/email alerts to you for your login details and alerts on
                bidder’s requests or some advertising messages/emails from us.</p>
            <p>If at any time you wish to stop these SMS/email alerts all you must do is write an email to us
                mishraconsultant88@gmail.com with your mobile number and your mobile number will be deleted from the
                alerts list.</p>
            <p><b>• Information Sharing and Disclosure</b></p>
            <p>Fintaxbazar.com will not sell or rent your personally identifiable information to anyone other than as
                specifically noted herein. Notwithstanding the foregoing, fintaxbazar.com may sell and/or transfer your
                personally identifiable information to an affiliate and to any successor-in-interest as a result of a
                sale of any part of fintaxbazar.com business or upon the merger, reorganization, or consolidation of
                fintaxbazar.com with another entity on a basis that fintaxbazar.com is not the surviving entity. For the
                purposes of this paragraph, “affiliate” means any person directly, or indirectly through one or more
                intermediaries, that controls, is controlled by or is under common control with fintaxbazar.com. The
                term “control,” as used in the immediately preceding sentence, shall mean with respect to any person,
                the possession, directly or indirectly, of the power, through the exercise of voting rights, contractual
                rights or otherwise, to direct or cause the direction of the management or policies of the controlled
                person. As used in this Privacy Policy, the term “person” includes any natural person, corporation,
                partnership, limited liability Company, trust, unincorporated association, or any other entity.</p>
            <p><b>• Third Party Advertising</b></p>
            <p>We may use third-party advertising companies and/or ad agencies to serve ads when you visit our Web site.
                These companies may use information (not including your name, address, email address or telephone
                number) about your visits to this and other Web sites in order to provide advertisements on this site
                and other sites about goods and services that may be of interest to you.</p>
            <p><b>• Privacy Policy Changes</b></p>
            <p>Fintaxbazar.com may amend this policy from time to time, at our discretion. If we make any substantial
                changes in the way we use your personal information we will notify you by posting the changes here on
                these Privacy Policy pages.</p>
            <p><b>• Security</b></p>
            <p>Your account information is password-protected for your privacy and security</p>
            <p><b>• Why we collect the information?</b></p>
            <p>- To get in touch with you when necessary <br>
                - To provide the services requested by you <br>
                - To preserve social history as governed by existing law or policy <br>
                - We use contact information internally to: <br>
                - Direct our efforts for product improvement <br>
                - Contact you as a survey respondent <br>
                - Send you promotional materials from our contest sponsors or advertisers</p>
            <p><b>• The Site contains links to other Web sites. We are not responsible for the privacy practices of such
                    Web sites which we do not own, manage or control.</b></p>
            <h4><u>Our Term of services:</u></h4>
            <p>By visiting or registering on this website you are agreeing to the following terms and conditions. We may
                alter or change these terms and conditions at any time. Your continued use of fintaxbazar.com network
                sites mean you accept any new or modified terms and conditions that we come up with. Please re-visit the
                `Terms of Use’ link at our site from time to time to stay abreast of any changes that we may introduce.
            </p>
        </div>
    </div>

    <h4>We are Organized to work with following banks:</h4>

    <div class="card mbile">
        <div class="row">
            <div class="card-body" style="padding: 4%">
                <p class="card-text">• HDFC BANK Ltd</p>
                <p class="card-text">• ICICI BANK Ltd.</p>
                <p class="card-text">• YES BANK</p>
                <p class="card-text">• KOTAK MAHIDRA</p>
                <p class="card-text">• INDUSLND BANK</p>
                <p class="card-text">• TATA CAPITAL</p>
                <p class="card-text">• PNB HOUSING BANK</p>
                <p class="card-text">• BAJAJ FINSERV </p>
                <p class="card-text">• ADHAR HOUSING</p>
                <p class="card-text">• DEUTSCHE BANK</p>
                <p class="card-text">• PROGRESSIVE URBAN & CO-OPRATIVE BANK LTD.</p>
            </div>
            <div class="card-body" style="padding: 4%">
                <p class="card-text">• HDFC HOUSING LTD.</p>
                <p class="card-text">• ICICI HOUSING LTD.</p>
                <p class="card-text">• BANK OF BARODA</p>
                <p class="card-text">• IDFC BANK LTD</p>
                <p class="card-text">• FULLERTON INDIA</p>
                <p class="card-text">• STANDARED CHARTED BANK</p>
                <p class="card-text">• ADITYA BIRLA BANK</p>
                <p class="card-text">• RBL BANK</p>
                <p class="card-text">• HSBC BANK</p>
                <p class="card-text">• FEDERAL BANK</p>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>By signing in or using fintaxbazar.com you agree to,</h4>
            <p>• Obey the law. <br>
                • Obey any codes of conduct or other notices we provide. <br>
                • Keep your service account password secret. <br>
                • Notify us if you learn of a security breach related to the service.
            </p>
            <h4>What you cannot do on fintaxbazar.com</h4>
            <p>While using the services, you may not: engage in, facilitate or further unlawful conduct use the service
                in a way that harms us or our advertisers, affiliates, resellers, distributors and/or vendors, or any
                customer of ours or our advertisers, affiliates, resellers, distributors and/or vendors,
                Use any portion of the service as a destination linked from any unsolicited bulk messages or unsolicited
                commercial messages (spam)
                Use any automated process or service to access and/or use the service (such as a BOT, a spider or
                meta-searching)
                Use any unauthorized means to modify or reroute, or attempt to modify or reroute, the service,
                Damage, disable, overburden, or impair the service (or the network(s) connected to the service) or
                interfere with anyone’s use and enjoyment of the service, or
                Resell or redistribute the service, or any part of the service.
            </p>
            <h4>Collection and usage of user data</h4>
            <p>
                While using our website and services, you have to provide personal information such as name, address,
                phone, mobile, and e-mail. We may combine this information with other information we collect from your
                activity on our Web site or from other companies. This information may be shown or shared to other users
                by you or us.
                Cookies and Web beacons. Cookies are bits of electronic information that can be transferred to a
                computer to uniquely identify that computer’s browser.
                When you visit fintaxbazar.com network sites, and use our services, we may place one or more cookies on
                your computer. The use of cookies helps us improve the quality of our services to you, by identifying
                information which is most interesting to you, tracking trends, or storing information you may want to
                retrieve on a regular basis. At any time, you may adjust settings on your browser to refuse cookies.
                However, if you choose to disable cookies, some features services on fintaxbazar.com network sites, will
                not operate properly. Also, the pages of our service may include Web beacons, which are electronic files
                to count users who have visited that page or to identify certain cookies on the computer accessing that
                page.
                Usage logs. When you use fintaxbazar.com network sites, your computer communicates a variety of
                information including the existence of cookies, your Internet Protocol address, and information about
                your browser program. We also create a record of what information you are requesting, such as the page
                or subject areas you’re visiting including IPs and other identifiers in the network for our business
                intelligence products as well as for legal tracking on demand.
            </p>
            <h4>Prices and Price Increases</h4>
            <p>
                The price for the service excludes all taxes and phone charges, unless stated otherwise. You are
                responsible for any taxes that you are obligated to pay or that we may collect from you. You are
                responsible for all other charges (for example, phone charges). Currency exchange settlements are based
                on your agreement with your payment method provider. We may change the price of the service from time to
                time, and we will keep you informed about the same by physical or electronic communications or on our
                online portal.
                If there is a specific time length and price for your service offer, then that price will remain in
                force for that time. After the offer period ends, your use of the service will be charged at the new
                price.
                If your service is on a period basis (for example, monthly), with no specific time length, the next
                billing will happen with the new prices.
                There is no charge or billing for filling up the contact us form on any page.
                Forms of this nature includes form filled on the context of contacting us for buying leads pack or
                submitting a request for more information.
            </p>
            <h4>Cancelling the Service</h4>
            <p>You may cancel the service any time, with or without cause by contacting us directly.</p>
            <h4>Your liability</h4>
            <p>You agree to use the site solely at your own risk. The contents on the site may have inaccuracies which
                may be corrected time to time.</p>
            <h4>No Warranty</h4>
            <p>We provide the service as-is with all faults and as available. We do not guarantee the accuracy or
                timeliness of information available from the service.</p>
            <h4>Termination</h4>
            <p>All accounts opened with fintaxbazar.com network sites can be terminated by fintaxbazar.com with or
                without cause. FinTax bazar network sites will not have any legal liability for retaining or revoking
                these accounts for the users.</p>
            <h4>Jurisdiction</h4>
            <p>The terms of this agreement are exclusively based on and subject to Indian law. You hereby consent to the
                exclusive jurisdiction and venue of courts in Lucknow-Uttar Pradesh, India in all disputes arising out
                of or relating to the use of this website.</p>
            <h4>Emails, SMS or any other form of communication</h4>
            <p>While you are registered on fintaxbazar.com network sites you may receive communication from us in any
                form like email, sms or other mailing or communication models. Some of these may have been opted by you
                and some may be part of our feature processed to keep you informed. You may not be able to unsubscribe
                from all of these. <br> Control over the content, service, registrations, accounts, user database,
                expansion, sharing etc. fintaxbazar.com network sites with the affiliates and associated sites, hold the
                complete control on the following items, <br>1. Content – We hold the complete right to hide, delete or
                show any content time to time <br>2. Service – This service is available online and mostly but not
                always free. fintaxbazar.com network sites hold the entire right to continue, discontinue the service or
                even offer to specific group of users alone. <br>3. Registration and user accounts <br>4. User database
                <br> 5. Feature and product expansions <br>6. Data Sharing</p>
            <h4>Published content</h4>
            <p>Publishers are responsible solely for all the content on the site. No user will have right unless given
                in written consent by fintaxbazar.com network to do so to republish the content in any other medium for
                personal or commercial use.</p>
            <h4>Copyrights</h4>
            <p>It is illegal to make copies, republish or store any content from fintaxbazar.com network site and will
                be liable to be punished legally. The content on the site may have copyrights by the creator or owner,
                reuse of the content needs the desired rights of usage.</p>
            <h4>Support and help</h4>
            <p>Support for services of fintaxbazar.com network sites may not be always assured. fintaxbazar.com network
                sites can pull off the support at any time. Similarly, there is no assurance of availability of help or
                any related documentation for usage all the time. You can contact us on fintaxbazar.com</p>

        </div>
    </div>
</div>


@endsection
