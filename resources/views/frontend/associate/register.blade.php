@extends('layout.frontend.app')
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <div>
            <div class="row">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form class="form-example" action="{{route('associatedPost')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center">Associate Registration</h3>
                        <!-- Input fields -->
                        <p>Already have an account? <a href="{{route('associateLogin')}}">Log in instead!</a></p>

                        <div class="form-group">
                            <label for="name" style="color:black;">NAME:<span class="asterisk">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}" />
                            <div class="text-danger">
                                @error('name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" style="color:black;">MOBILE:<span class="asterisk">*</span></label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no." value="{{old('mobile')}}"/>
                            <div class="text-danger">
                                @error('mobile')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" style="color:black;">EMAIL:<span class="asterisk">*</span></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{old('email')}}"/>
                            <div class="text-danger">
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pan" style="color:black;">Pan Card:<span class="asterisk">*</span></label>
                            <input type="file" class="form-control" name="pan_card" value="{{old('pan_card')}}"/>
                            <div class="text-danger">
                                @error('pan_card')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aadhar" style="color:black;">Aadhar Card:<span class="asterisk">*</span></label>
                            <input type="file" class="form-control" name="aadhar_card" value="{{old('aadhar_card')}}"/>
                            <div class="text-danger">
                                @error('aadhar_card')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo" style="color:black;">Photo:<span class="asterisk">*</span></label>
                            <input type="file" class="form-control" name="photo" value="{{old('photo')}}"/>
                            <div class="text-danger">
                                @error('photo')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="gst" style="color:black;">User id:<span
                                    class="asterisk">*</span></label>
                            <input type="text" class="form-control" name="userid" value="{{old('userid')}}">
                            <div class="text-danger">
                                @error('userid')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="gst" style="color:black;">Password:<span
                                        class="asterisk">*</span></label>
                            <input type="text" class="form-control" name="password">
                            <div class="text-danger">
                                @error('password')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gst" style="color:black;">Confirm Password:<span class="asterisk">*</span></label>
                            <input type="password" class="form-control" name="cpass">
                            <div class="text-danger">
                                @error('cpass')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" style="color:black;">Address<span
                                                class="asterisk">*</span></label>
                            <textarea class="form-control" name="address" rows="7" placeholder="Enter your address" value="{{old('address')}}" style="resize:none"></textarea>
                            <!-- <input type="text" class="form-control" name="address"> -->
                            <div class="text-danger">
                                @error('address')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="method" style="color:black;">
                                Payment(RS 149):<span class="asterisk">*</span></label><br>
                            <div class="row">
                                <!-- <div class="col-12">
                                    <input type="radio" name="payment_type" value="Payment" checked>
                                    <label style="font-size: 15px"> Payment (RS 149)</label>
                                </div> -->
                                <!-- <div class="col-6"></div> -->

                                <img src="{{asset('public/assets/images/payment/rs-149.jpg')}}" style="height: 350px">
                                <img src="{{asset('public/assets/images/payment/accountDetails.jpg')}}"
                                    style="height: 350px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo" style="color:black;">Payment Screenshot:<span
                                    class="asterisk">*</span></label>
                            <input type="file" class="form-control" name="pay_screenshot" />
                            <div class="text-danger">
                                @error('pay_screenshot')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
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
