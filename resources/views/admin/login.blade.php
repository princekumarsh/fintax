


<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Fintax Bazar</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{url('public/assets/images/logo/fintaxlogo.jpg')}}" />

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{url('public/backend/assets/css/core/libs.min.css')}}" />


      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{url('public/backend/assets/css/hope-ui.min.css?v=1.2.0')}}" />

      <!-- Custom Css -->
      <link rel="stylesheet" href="{{url('public/backend/assets/css/custom.min.css?v=1.2.0')}}" />

      <!-- Dark Css -->
      <link rel="stylesheet" href="{{url('public/backend/assets/css/dark.min.css')}}"/>

      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{url('public/backend/assets/css/customizer.min.css')}}" />

      <!-- RTL Css -->
      <link rel="stylesheet" href="{{url('public/backend/assets/css/rtl.min.css')}}"/>

  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->

      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6">

                @if(Session::has('flash_message'))
              <div class="alert {{ Session::get('alert-class', 'alert-danger') }}"> {{ Session::get('flash_message') }} <i class='las la-close'></i>
                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
              </div>
            @endif

               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <img src="{{asset('public/assets/images/logo/fintaxlogo.jpg')}}" style="width:50px;height: 60px">
                              <!--logo End-->
                           </a>
                           <h2 class="mb-2 text-center">Sign In</h2>
                           <p class="text-center">Login to stay connected.</p>
                           <form action="{{route('admin.createlogin')}}" method="post">
                            @csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <a href="#">Forgot Password?</a>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                              {{-- <p class="text-center my-3">or sign in with other accounts?</p> --}}
                              {{-- <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/fb.svg" alt="fb"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/gm.svg" alt="gm"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/im.svg" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/li.svg" alt="li"></a>
                                    </li>
                                 </ul>
                              </div> --}}
                              {{-- <p class="mt-3 text-center">
                                 Don’t have an account? <a href="#" class="text-underline">Click here to sign up.</a>
                              </p> --}}
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- <div class="sign-bg">
                  <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                     <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"/>
                     <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"/>
                     <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"/>
                     <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"/>
                     </g>
                  </svg>
               </div> --}}
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{asset('public/backend/assets/images/auth/01.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>

    <!-- Library Bundle Script -->
    <script src="{{url('public/backend/assets/js/core/libs.min.js')}}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{url('public/backend/assets/js/core/external.min.js')}}"></script>

    <!-- Widgetchart Script -->
    <script src="{{url('public/backend/assets/js/charts/widgetcharts.js')}}"></script>

    <!-- mapchart Script -->
    <script src="{{url('public/backend/assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{url('public/backend/assets/js/charts/dashboard.js')}}" ></script>

    <!-- fslightbox Script -->
    <script src="{{url('public/backend/assets/js/plugins/fslightbox.js')}}"></script>

    <!-- Settings Script -->
    <script src="{{url('public/backend/assets/js/plugins/setting.js')}}"></script>

    <!-- Slider-tab Script -->
    <script src="{{url('public/backend/assets/js/plugins/slider-tabs.js')}}"></script>

    <!-- Form Wizard Script -->
    <script src="{{url('public/backend/assets/js/plugins/form-wizard.js')}}"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="{{url('public/backend/assets/js/hope-ui.js')}}" defer></script>
  </body>
</html>