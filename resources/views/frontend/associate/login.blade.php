@extends('layout.frontend.app')
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <div>
            <div class="row">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form class="form-example" action="{{route('associateSubmit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center">Associate Login</h3>
                        <!-- Input fields -->

                        <div class="form-group">
                            <label for="email" style="color:black;">EMAIL:</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email or mobile number"/>
                            <div class="text-danger">
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gst" style="color:black;">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            <div class="text-danger">
                                @error('password')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
            
                        <button type="submit" class="btn btn-danger btn-customized mt-2 mb-2">  
                            Login
                        </button>
                    </form>
                    <p class="text-center"><a href="{{route('associateRegister')}}">No account? Create one here</a></p>
                    <!-- Form end -->
                </div>
            </div>
        </div>
    </div>
@endsection
