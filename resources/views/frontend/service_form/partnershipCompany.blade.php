@extends('layout.frontend.app')
@section('content')

<!-- Main content Start -->
        <div class="main-content">	
        	<div>
      			<div class="row">
        			<div class="mx-auto col-10 col-md-8 col-lg-6">
                    	<!-- Form -->
                    	<form class="form-example" action="{{route('service.partnershipCompanyPost')}}" method="post" enctype="multipart/form-data">
                                @csrf
            				<h3>PARTNERSHIP COMPANY (Rate RS 1499/-)</h3>
            				<!-- Input fields -->
                                        <!-- <div class="form-group">
                                                <label for="name" style="color:black;">Choose your Company:<span class="asterisk">*</span></label>
                                                <select name="cars" class="form-control">
                                                  <option value="partnership company">Partnership Company</option>
                                                  <option value="saab">Private limited</option>
                                                  <option value="mercedes">Private</option>
                                                  <option value="audi">Nidhi Company</option>
                                                </select>
                                        </div> -->
                                        <input type="hidden" name="partnership_com" value="partnership_com">

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
                                                 
                                                 <img src="{{asset('public/assets/images/payment/rs-1499.jpg')}}" style="height: 350px" id="img-1">
                                                       
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
              					<label for="cpc" style="color:black;">FIRM/COMPANY PAN CARD:</label>
              					<input type="file" class="form-control" name="com_pan_card"/>
            				</div>
            				<div class="form-group">
              					<label for="cic" style="color:black;">PARTNERSHIP DEED/COMPANY INCORPORATION CERTIFICATE:</label>
              					<input type="file" class="form-control" name="com_incorCompany"/>
            				</div>
            				<div class="form-group">
              					<label for="moa" style="color:black;">
              					COMPANY MOA/AOA:</label>
              					<input type="file" class="form-control" name="company_moa"/>
            				</div><hr/>
            				<div class="form-group">
              					<label for="kyc" style="color:black;">DIRECTOR'S KYC PAPER'S( PAN CARD, ADHAR CARD, PHOTO):</label>
            				</div>
                                        <div class="form-group">
                                                <label for="dpan" style="color:black;">Pan Card:</label>
                                                <input type="file" class="form-control" name="director_pan_card"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="daadhar" style="color:black;">Aadhar Card:</label>
                                                <input type="file" class="form-control" name="director_aadhar_card"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="dphoto" style="color:black;">
                                                Photo:</label>
                                                <input type="file" class="form-control" name="director_photo"/>
                                        </div><hr/>

                                        <div class="form-group">
                                                <label for="kyc" style="color:black;">AUTHORIZED SIGNATORY KYC PAPER'S( PAN CARD, ADHAR CARD, PHOTO):</label>
                                        </div>
                                        <div class="form-group">
                                                <label for="dpan" style="color:black;">Pan Card:</label>
                                                <input type="file" class="form-control" name="autho_pan_card"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="daadhar" style="color:black;">Aadhar Card:</label>
                                                <input type="file" class="form-control" name="autho_aadhar_card"/>
                                        </div>
                                        <div class="form-group">
                                                <label for="dphoto" style="color:black;">
                                                Photo:</label>
                                                <input type="file" class="form-control" name="autho_photo"/>
                                        </div><hr/>

                                        <div class="form-group">
                                                <label for="authorization" style="color:black;">AUTHORIZATION LETTER FOR AUTHORIZED SIGNATORY:</label>
                                                <input type="file" class="form-control" name="auto_letter"/>
                                        </div>

                                        <div class="form-group">
                                                <label for="bap" style="color:black;">BUSINESS ADDRESS PROFF( ELECTRICITY BILL, RENT AGREEMENT IF RENTED, NOC PAPER IF SHARED & ANOTHER LEGAL OWNERSHIP PROOF):</label>
                                                <input type="file" class="form-control" name="auto_bap"/>
                                        </div>
            				
        
            				<button type="submit" class="btn btn-danger btn-customized mt-2 mb-2">
              				Submit
            				</button>
          				</form>
          				<!-- Form end -->
        			</div>
      			</div>
    		</div>
        </div>

@endsection