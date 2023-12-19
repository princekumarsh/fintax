@extends('layout.frontend.app')
@section('content')

<!-- Main content Start -->
        <div class="main-content">
        	<div>
      			<div class="row">
        			<div class="mx-auto col-10 col-md-8 col-lg-6">
                    	<!-- Form -->
                    	<form class="form-example" action="{{route('service.lapBusinessPost')}}" method="post" enctype="multipart/form-data">
                            @csrf
            				<h3>LOAN AGAINST PROPERTY(LAP)
                                FOR BUSINESS MAN</h3>
            				<!-- Input fields -->
                            <div class="form-group">
                                <label for="name" style="color:black;">NAME:<span class="asterisk">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" />
                                <div class="text-danger">
                                    @error('name')
                                    <span >{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile" style="color:black;">MOBILE:<span class="asterisk">*</span></label>
                                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no."/>
                                <div class="text-danger">
                                     @error('mobile')
                                     <span >{{$message}}</span>
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" style="color:black;">EMAIL:<span class="asterisk">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"/>
                                <div class="text-danger">
                                 @error('email')
                                 <span >{{$message}}</span>
                                 @enderror
                                </div>
                            </div>
                        <div class="form-group">
                          <label for="method" style="color:black;">
                                 Payment Method:<span class="asterisk">*</span></label><br>
                          <div class="row">
                                 <div class="col-lg-4 col-md-4 col-12">
                                        <input type="radio" name="payment_type" value="Full Payment" id="radio1" checked>
                                        <label id="fulls">Full Payment (RS 1499)</label><br>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-12">
                                        <input type="radio" id="radio2"  name="payment_type" value="Partial Payment">
                                        <label id="partial">Partial Payment (RS 499)</label><br>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-12">
                                        <input type="radio" id="radio3" name="payment_type" value="Minimum Payment">
                                        <label style="font-size: 15px" id="minimum">Minimum Payment (RS 49)</label>
                                 </div>
                                 
                                 <img src="{{asset('public/assets/images/payment/rs-999.jpg')}}" style="height: 350px" id="img-1">
                                       
                                 <img src="{{asset('public/assets/images/payment/rs-499.jpg')}}" style="height: 350px" id="img-2">
                                       
                                 <img src="{{asset('public/assets/images/payment/rs-49.jpg')}}" style="height: 350px" id="img-3">
                                 <img src="{{asset('public/assets/images/payment/accountDetails.jpg')}}" style="height: 350px">
                                        
                          </div>
                          
                   </div>
                   <div class="form-group">
                          <label for="photo" style="color:black;">Payment Screenshot:<span class="asterisk">*</span></label>
                          <input type="file" class="form-control" name="pay_screenshot"/>
                          <div class="text-danger">
                                 @error('pay_screenshot')
                                 <span >{{$message}}</span>
                                 @enderror
                          </div>
                   </div>
                            <hr>
                        <h3 class="text-danger">&#129155 Optional Documents</h3>

                            <div class="form-group">
                                <label for="pan" style="color:black;">APPLICANT KYC PAPER - Pan Card:</label>
                                <input type="file" class="form-control" name="kyc_pan_card" />
                            </div>
                            <div class="form-group">
                                <label for="aadhar" style="color:black;">APPLICANT KYC PAPER - Aadhar Card:</label>
                                <input type="file" class="form-control" name="kyc_aadhar_card" />
                            </div>
                            <div class="form-group">
                                <label for="photo" style="color:black;">APPLICANT KYC PAPER - Photo:</label>
                                <input type="file" class="form-control" name="kyc_photo" />
                            </div>
                            <div class="form-group">
                                <label for="brp" style="color:black;">BUSINESS REGISTRATION PROOF:</label>
                                <input type="file" class="form-control" name="brp">
                            </div>
                            <div class="form-group">
                                <label for="bank_statement" style="color:black;">1 YEAR BANK STATEMENT UPDATED.:</label>
                                <input type="file" class="form-control" name="bank_statement">
                            </div>
                            <div class="form-group">
                                <label for="itr" style="color:black;">3 YEAR ITR WITH BALANCE SHEET, PROFIT LOSS & COMPUTATION SHEET:</label>
                                <input type="file" class="form-control" name="itr">
                            </div>
                            <div class="form-group">
                                <label for="rad" style="color:black;">GST REGISTRATION( IF GSTIN PERSON):</label>
                                <input type="file" class="form-control" name="gst_reg">
                            </div>
                            <div class="form-group">
                                <label for="sal_proof" style="color:black;">RESIDENCIAL ADDRESS PROOF:</label>
                                <input type="file" class="form-control" name="rap">
                            </div>
                            <div class="form-group">
                                <label for="ca_pan" style="color:black;">CO-APPLICANT KYC PAPER - PAN CARD:</label>
                                <input type="file" class="form-control" name="ca_pan_card">
                            </div>
                            <div class="form-group">
                                <label for="aadhar" style="color:black;">CO-APPLICANT KYC PAPER - AADHAR CARD:</label>
                                <input type="file" class="form-control" name="ca_aadhar_card">
                            </div>
                            <div class="form-group">
                                <label for="photo" style="color:black;">CO-APPLICANT KYC PAPER - PHOTO:</label>
                                <input type="file" class="form-control" name="ca_photo">
                            </div>
                            <div class="form-group">
                                <label for="property_paper" style="color:black;">PROPERTY PAPER WITH ALL CHAIN DEED:</label>
                                <input type="file" class="form-control" name="property_paper">
                            </div>
                            <div class="form-group">
                                <label for="ats" style="color:black;">AGREEMENT TO SALE(ATS):</label>
                                <input type="file" class="form-control" name="ats">
                            </div>

            				<button type="submit" class="btn btn-danger btn-customized mt-2 mb-2">
              				Upload
            				</button>
          				</form>
          				<!-- Form end -->
        			</div>
      			</div>
    		</div>
        </div>

@endsection
