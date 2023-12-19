<body class="home-eleven">

    <!-- Preloader area start here -->
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <!--End preloader here -->

    <!--Full width header Start-->
    <div class="full-width-header">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-md-7">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="flaticon-email"></i><a href="mailto:fintaxbazar20@gmail.com">
                                        fintaxbazar20@gmail.com</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:+91 9696047083">
                                        (+91) 9519807777, 9696047083</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="#"><img src="{{asset('public/assets/images/logo/fintaxlogo.jpg')}}" alt="logo"
                                        style="width:100px"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu pl-40 md-pl-0">
                                        <ul class="nav-menu">
                                            <li class="mega-rs current-menu-item"> <a href="{{route('index')}}">Home</a>
                                            </li>
                                            
                                            <li class="menu-item-has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="#">GST & INCOME TAX</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children"><a href="#">GST REGISTERATION</a>
                                                                <ul class="sub-menu">
                                                                    <li >
                                                                            <a href="{{route('service.proprietorship')}}">PROPRIETORSHIP</a>
                                                                    </li>
                                                                    <li><a href="{{route('service.partnershipCompany')}}">PARTNERSHIP
                                                                            COMPANY</a></li>

                                                                    <li><a href="{{route('service.gst_reg_pvtltdCom')}}">PRIVATE LIMITED COMPANY</a></li>
                                                                    <li><a href="{{route('service.gst_reg_limitedCompany')}}">LIMITED
                                                                            COMPANY</a></li>
                                                                    <li><a href="{{route('service.gst_reg_nidhiCompany')}}">NIDHI
                                                                            COMPANY</a></li>
                                                                    <li><a href="{{route('service.gst_reg_ngo')}}">NGO/SOCIETY/TRUST/
                                                                            SECTON 8</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">INCOME TAX RETURN FILING</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.salariedParsons')}}">SALARIED
                                                                            PERSON'S</a></li>
                                                                    <li><a href="{{route('service.selfEmployed')}}">SELF-EMPLOYED
                                                                            PERSON'S</a></li>
                                                                    <li><a
                                                                            href="{{route('service.professionals')}}">PROFESSIONALS</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">BALANCE SHEET</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.3balancesheet')}}">3 BALANCE
                                                                        SHEET & PROJECT REPORT</a></li>
                                                               
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">GST RETURN FILLING PACKAGES</a>
                                                                <ul class="sub-menu scrolling">
                                                                     <li><a href="{{route('service.balancesheet_proprietorship')}}">PROPRIETORSHIP(
                                                                        COMPOSITION)</a></li>
                                                                    <li><a href="{{route('service.gst_proprietorship1')}}">PROPRIETORSHIP(
                                                                        TURN OVER UP TO 1.5 CR)</a></li>
                                                                <li><a href="{{route('service.gst_proprietorship2')}}">PROPRIETORSHIP(
                                                                        TURN OVER 1.5 CR TO 5 CR)</a></li>
                                                                <li><a href="{{route('service.gst_proprietorship3')}}">PROPRIETORSHIP(
                                                                        TURN OVER 5 CR TO ABOVE)</a></li>
                                                                <li><a href="{{route('service.pvtLtdAndOtherCompany1')}}">PVT.
                                                                        LTD. & OTHER COMPANY( UP TO 1.5 CR)</a></li>
                                                                <li><a href="{{route('service.pvtLtdAndOtherCompany2')}}">PVT.
                                                                        LTD. & OTHER COMPANY(ABOVE 1.5 CR)</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">COMPANY REGISTRATION</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children"><a href="#">REGISTRATION</a>
                                                                <ul class="sub-menu scrolling">
                                                                    <li>
                                                                        <a href="{{route('service.ngo')}}">NGO/SOCIETY/TRUST</a>
                                                                        <a href="{{route('service.tradeMarkRegistration')}}">TRADE MARK CERTIFICATION</a>
                                                                        <a href="{{route('service.isoRegistration')}}">ISO CERTIFICATIONS</a>
                                                                        <a href="{{route('service.msmeRegistration')}}">MSME(UDYOG ADHAR)</a>
                                                                        <a href="{{route('service.fssai')}}">FSSAI (FOOD LICENSE)</a>
                                                                        <a href="{{route('service.drugLicense')}}">DRUG LICENSE</a>
                                                                        <a href="{{route('service.ngoDarpan')}}">NGO DARPAN</a>
                                                                        <a href="{{route('service.gemPortal')}}">GEM PORTAL </a>
                                                                        <a href="{{route('service.startUpIndia')}}">START-UP INDIA</a>
                                                                        <a href="{{route('service.epf')}}">EPF </a>
                                                                        <a href="{{route('service.esi')}}">ESI</a>
                                                                        <a href="{{route('service.labourLicense')}}">LABOUR LICENSE</a>
                                                                        <a href="{{route('service.pasaraLicense')}}">PASARA LICENSE</a>
                                                                        <a href="{{route('service.pollutionControl')}}">POLUTION CONTROL LICENSE</a>
                                                                        <a href="{{route('service.importLicense')}}">IMPORT-EXPORT LICENSE</a>
                                                                        <a href="{{route('service.eighty')}}">80G & 12A </a>
                                                                        <a href="{{route('service.frca')}}">FCRA</a>
                                                                        <a href="{{route('service.peso')}}">PESO CERTIFICATE</a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li class="menu-item-has-children"><a href="#">COMPANY REGISTERATION</a>
                                                                <ul class="sub-menu">
                                                                    <li><a
                                                                            href="{{route('service.companyRegisterationPvtLtd')}}">PRIVATE LIMITED COMPANY</a>
                                                                    </li>
                                                                    <li><a href="{{route('service.companyRegisterationNidhi')}}">NIDHI COMPANY
                                                                            </a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">DIGITAL SIGNATURE CERTIFICATE</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.digitalSignClass3')}}">CERTIFICATE CLASS-3</a></li>
                                                                    <li><a href="{{route('service.digitalSignClass3Enc')}}">CLASS-3( SIGNATURE+ ENCRUPTION)</a></li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">FINANCE & LOAN SERVICES</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item-has-children"><a href="#">HOME LOAN</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.homeLoanSalaried')}}">SALARIED PERSON</a></li>
                                                                    <li><a href="{{route('service.homeLoanBusiness')}}">BUSINESS MAN</a></li>
                                                                </ul>

                                                            <li class="menu-item-has-children"><a href="#">BALANCE TRANSFER + HOME LOAN</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.homeLoanBtSalaried')}}">SALARIED PERSON</a></li>
                                                                    <li><a href="{{route('service.homeLoanBtBusiness')}}">BUSINESS MAN</a></li>
                                                                </ul>
                                                            <li class="menu-item-has-children"><a href="#">LOAN AGAINST PROPERTY(LAP)</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.lapSalaried')}}">SALARIED PERSON</a></li>
                                                                    <li><a href="{{route('service.lapBusiness')}}">BUSINESS MAN</a></li>
                                                                </ul>
                                                            <li class="menu-item-has-children"><a href="#">CREDIT CARD</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{route('service.ccSalaried')}}">SALARIED PERSON</a></li>
                                                                    <li><a href="{{route('service.ccBusiness')}}">BUSINESS MAN</a></li>
                                                                </ul>

                                                            <li><a href="{{route('service.personalLoan')}}">PERSONAL LOAN</a>
                                                            <li><a href="{{route('service.businessLoan')}}">BUSINESS LOAN</a>
                                                            <li><a href="{{route('service.startupLoan')}}">STARTUP LOAN</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <!--<li class="menu-item-has-children">-->
                                            <!--    <a href="#">Services</a>-->
                                            <!--    <ul class="sub-menu">-->
                                            <!--        <li class="last-item menu-item-has-children">-->
                                            <!--            <a href="#">GST & INCOME TAX</a>-->
                                            <!--            <ul class="sub-menu">-->
                                            <!--                <li><a href="#">GST REGISTERATION</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li class="menu-item-has-children"><a-->
                                            <!--                                href="{{route('service.proprietorship')}}">PROPRIETORSHIP</a>-->
                                            <!--                        </li>-->
                                            <!--                        <li><a href="{{route('service.partnershipCompany')}}">PARTNERSHIP-->
                                            <!--                                COMPANY</a></li>-->

                                            <!--                        <li><a href="{{route('service.gst_reg_pvtltdCom')}}">PRIVATE LIMITED COMPANY</a></li>-->
                                            <!--                        <li><a href="{{route('service.gst_reg_limitedCompany')}}">LIMITED-->
                                            <!--                                COMPANY</a></li>-->
                                            <!--                        <li><a href="{{route('service.gst_reg_nidhiCompany')}}">NIDHI-->
                                            <!--                                COMPANY</a></li>-->
                                            <!--                        <li><a href="{{route('service.gst_reg_ngo')}}">NGO/SOCIETY/TRUST/-->
                                            <!--                                SECTON 8</a></li>-->
                                            <!--                    </ul>-->
                                            <!--                </li>-->
                                            <!--                <li><a href="#">INCOME TAX RETURN FILING</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.salariedParsons')}}">SALARIED-->
                                            <!--                                PERSON'S</a></li>-->
                                            <!--                        <li><a href="{{route('service.selfEmployed')}}">SELF-EMPLOYED-->
                                            <!--                                PERSON'S</a></li>-->
                                            <!--                        <li><a-->
                                            <!--                                href="{{route('service.professionals')}}">PROFESSIONALS</a>-->
                                            <!--                        </li>-->
                                            <!--                    </ul>-->
                                            <!--                </li>-->
                                            <!--                <li><a href="#">BALANCE SHEET</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.3balancesheet')}}">3 BALANCE-->
                                            <!--                            SHEET & PROJECT REPORT</a></li>-->

                                            <!--                    </ul>-->
                                            <!--                </li>-->
                                            <!--                <li><a href="#">GST RETURN FILLING PACKAGES</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.balancesheet_proprietorship')}}">PROPRIETORSHIP(-->
                                            <!--                            COMPOSITION)</a></li>-->
                                            <!--                        <li><a href="{{route('service.gst_proprietorship1')}}">PROPRIETORSHIP(-->
                                            <!--                            TURN OVER UP TO 1.5 CR)</a></li>-->
                                            <!--                    <li><a href="{{route('service.gst_proprietorship2')}}">PROPRIETORSHIP(-->
                                            <!--                            TURN OVER 1.5 CR TO 5 CR)</a></li>-->
                                            <!--                    <li><a href="{{route('service.gst_proprietorship3')}}">PROPRIETORSHIP(-->
                                            <!--                            TURN OVER 5 CR TO ABOVE)</a></li>-->
                                            <!--                    <li><a href="{{route('service.pvtLtdAndOtherCompany1')}}">PVT.-->
                                            <!--                            LTD. & OTHER COMPANY( UP TO 1.5 CR)</a></li>-->
                                            <!--                    <li><a href="{{route('service.pvtLtdAndOtherCompany2')}}">PVT.-->
                                            <!--                            LTD. & OTHER COMPANY(ABOVE 1.5 CR)</a></li>-->
                                            <!--                    </ul>-->
                                            <!--                </li>-->
                                            <!--            </ul>-->
                                            <!--        </li>-->
                                            <!--        <li class="last-item menu-item-has-children">-->
                                            <!--            <a href="#">COMPANY COMPANY REGISTRATION</a>-->
                                            <!--            <ul class="sub-menu">-->

                                            <!--                <li><a href="#">REGISTRATION</a>-->
                                            <!--                    <ul class="sub-menu scrolling">-->
                                            <!--                        <li class="menu-item-has-children">-->
                                            <!--                            <a href="{{route('service.ngo')}}">NGO/SOCIETY/TRUST</a>-->
                                            <!--                            <a href="{{route('service.tradeMarkRegistration')}}">TRADE MARK CERTIFICATION</a>-->
                                            <!--                            <a href="{{route('service.isoRegistration')}}">ISO CERTIFICATIONS</a>-->
                                            <!--                            <a href="{{route('service.msmeRegistration')}}">MSME(UDYOG ADHAR)</a>-->
                                            <!--                            <a href="{{route('service.fssai')}}">FSSAI (FOOD LICENSE)</a>-->
                                            <!--                            <a href="{{route('service.drugLicense')}}">DRUG LICENSE</a>-->
                                            <!--                            <a href="{{route('service.ngoDarpan')}}">NGO DARPAN</a>-->
                                            <!--                            <a href="{{route('service.gemPortal')}}">GEM PORTAL </a>-->
                                            <!--                            <a href="{{route('service.startUpIndia')}}">START-UP INDIA</a>-->
                                            <!--                            <a href="{{route('service.epf')}}">EPF </a>-->
                                            <!--                            <a href="{{route('service.esi')}}">ESI</a>-->
                                            <!--                            <a href="{{route('service.labourLicense')}}">LABOUR LICENSE</a>-->
                                            <!--                            <a href="{{route('service.pasaraLicense')}}">PASARA LICENSE</a>-->
                                            <!--                            <a href="{{route('service.pollutionControl')}}">POLUTION CONTROL LICENSE</a>-->
                                            <!--                            <a href="{{route('service.importLicense')}}">IMPORT-EXPORT LICENSE</a>-->
                                            <!--                            <a href="{{route('service.eighty')}}">80G & 12A </a>-->
                                            <!--                            <a href="{{route('service.frca')}}">FCRA</a>-->
                                            <!--                            <a href="{{route('service.peso')}}">PESO CERTIFICATE</a>-->
                                            <!--                        </li>-->
                                            <!--                    </ul>-->
                                            <!--                </li>-->

                                            <!--                <li><a href="#">COMPANY REGISTERATION</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li class="menu-item-has-children"><a-->
                                            <!--                                href="{{route('service.companyRegisterationPvtLtd')}}">PRIVATE LIMITED COMPANY</a>-->
                                            <!--                        </li>-->
                                            <!--                        <li><a href="{{route('service.companyRegisterationNidhi')}}">NIDHI COMPANY-->
                                            <!--                                </a></li>-->
                                            <!--                    </ul>-->
                                            <!--                </li>-->
                                            <!--                <li><a href="#">DIGITAL SIGNATURE CERTIFICATE</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li class="menu-item-has-children"><a href="{{route('service.digitalSignClass3')}}">CERTIFICATE CLASS-3</a></li>-->
                                            <!--                        <li><a href="{{route('service.digitalSignClass3Enc')}}">CLASS-3( SIGNATURE+ ENCRUPTION)</a></li>-->
                                            <!--                    </ul>-->
                                            <!--                </li>-->

                                            <!--            </ul>-->
                                            <!--        </li>-->
                                            <!--        <li class="last-item menu-item-has-children">-->
                                            <!--            <a href="#">FINANCE & LOAN SERVICES</a>-->
                                            <!--            <ul class="sub-menu">-->
                                            <!--                <li><a href="#">HOME LOAN</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.homeLoanSalaried')}}">SALARIED PERSON</a></li>-->
                                            <!--                        <li><a href="{{route('service.homeLoanBusiness')}}">BUSINESS MAN</a></li>-->
                                            <!--                    </ul>-->

                                            <!--                <li><a href="#">BALANCE TRANSFER + HOME LOAN</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.homeLoanBtSalaried')}}">SALARIED PERSON</a></li>-->
                                            <!--                        <li><a href="{{route('service.homeLoanBtBusiness')}}">BUSINESS MAN</a></li>-->
                                            <!--                    </ul>-->
                                            <!--                <li><a href="#">LOAN AGAINST PROPERTY(LAP)</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.lapSalaried')}}">SALARIED PERSON</a></li>-->
                                            <!--                        <li><a href="{{route('service.lapBusiness')}}">BUSINESS MAN</a></li>-->
                                            <!--                    </ul>-->
                                            <!--                <li><a href="#">CREDIT CARD</a>-->
                                            <!--                    <ul class="sub-menu">-->
                                            <!--                        <li><a href="{{route('service.ccSalaried')}}">SALARIED PERSON</a></li>-->
                                            <!--                        <li><a href="{{route('service.ccBusiness')}}">BUSINESS MAN</a></li>-->
                                            <!--                    </ul>-->

                                            <!--                <li><a href="{{route('service.personalLoan')}}">PERSONAL LOAN</a>-->
                                            <!--                <li><a href="{{route('service.businessLoan')}}">BUSINESS LOAN</a>-->
                                            <!--                <li><a href="{{route('service.startupLoan')}}">STARTUP LOAN</a>-->
                                            <!--                </li>-->
                                            <!--            </ul>-->
                                            <!--        </li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->

                                            {{-- <li class="menu-item-has-children">
                                                <a href="#">REGISTERATION</a>
                                                <ul class="sub-menu">
                                                    <li class="last-item menu-item-has-children">

                                                                        <a href="#">REGISTERATION 1</a>
                                                                        <a href="#">REGISTERATION 2</a>
                                                                        <a href="#">REGISTERATION 3</a>
                                                                        <a href="#">REGISTERATION 4</a>
                                                                        <a href="#">REGISTERATION 5</a>
                                                                        <a href="#">REGISTERATION 6</a>
                                                                        <a href="#">REGISTERATION 7</a>
                                                                        <a href="#">REGISTERATION 8</a>
                                                                        <a href="#">REGISTERATION 9</a>
                                                    </li></ul>
                                                    <ul class="sub-menu">
                                                    <li class="last-item menu-item-has-children">
                                                                        <a href="#">REGISTERATION 10</a>
                                                                        <a href="#">REGISTERATION 11</a>
                                                                        <a href="#">REGISTERATION 12</a>
                                                                        <a href="#">REGISTERATION 13</a>
                                                                        <a href="#">REGISTERATION 14</a>
                                                                        <a href="#">REGISTERATION 15</a>
                                                                        <a href="#">REGISTERATION 16</a>
                                                                        <a href="#">REGISTERATION 17</a>
                                                                        <a href="#">REGISTERATION 18</a>

                                                    </li>
                                                </ul>
                                            </li> --}}

                                            <li class="">
                                                <a href="{{route('about')}}">About Us</a>
                                            </li>


                                            <li>
                                                <a href="{{route('contact')}}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> <!-- //.main-menu -->
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal"
                                                data-toggle="modal" href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <style>
                                        .dropdown {
                                        position: relative;
                                        display: inline-block;
                                        }

                                        .dropdown-content {
                                        display: none;
                                        position: absolute;
                                        background-color: #f9f9f9;
                                        min-width: 160px;
                                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                        padding: 12px 16px;
                                        margin-top:5px;
                                        z-index: 1;
                                        }

                                        .dropdown:hover .dropdown-content {
                                        display: block;
                                        }
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                                    </style>
                                    <div class="head-btn pl-30 dropdown">
                                        @if (Auth('associated')->user())
                                        <a href="#">{{Auth('associated')->user()->name}}
                                            &#x25BC;</a>
                                        <div class="dropdown-content">
                                            <a href="{{route('associateLogout')}}">Logout</a>
                                        </div>
                                        @else
                                        <a href="{{route('associateLogin')}}">Associate Partner</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please check the form below for errors</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">Close</button>
    </div>
    @endif
