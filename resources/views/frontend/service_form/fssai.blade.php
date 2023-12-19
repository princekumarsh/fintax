@extends('layout.frontend.app')
@section('content')

<!-- Main content Start -->
<div class="main-content">
    <div>
        <div class="row">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <!-- Form -->
                <form class="form-example" action="{{route('service.fssaiPost')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3>FOOD LICENSE REGISTRATION OTHER/GENERAL (PRICE-RS 999)</h3>
                    <!-- Input fields -->
                    <h3 class="text-danger">&#129155 Details for Others (As per case)</h3>

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
                                        <label id="fulls">Full Payment (RS 999)</label><br>
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
                    <h3 class="text-danger">&#129155 Documents for General Food License</h3>

                    <div class="form-group">
                        <label for="pan" style="color:black;">Pan Card:</label>
                        <input type="file" class="form-control" placeholder="PAN OF PROPRIETOR" name="pan_card" />
                    </div>
                    <div class="form-group">
                        <label for="aadhar" style="color:black;">Aadhar Card:</label>
                        <input type="file" class="form-control" placeholder="ADHAR CARD OF PROPRIETOR" name="aadhar_card" />
                    </div>
                    <div class="form-group">
                        <label for="photo" style="color:black;">
                            Photo:</label>
                        <input type="file" class="form-control" placeholder="Photo" name="photo" />
                    </div>
                    <div class="form-group">
                        <label for="baf" style="color:black;">Business Address Proff (ELECTRICITY BILL, RENT AGREEMENT
                            IF RENTED, NOC PAPER IF SHARED & ANOTHER LEGAL OWNERSHIP PROOF):</label>

                        <input type="file" class="form-control" name="baf" />
                    </div>
                    <div class="form-group">
                        <label for="photo" style="color:black;">
                            Bank Details ( CANCELLED CHEQUE/ BANK PASSBOOK FRONT PAGE):</label>
                        <input type="file" class="form-control" placeholder="Photo" name="bank_details" />
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
