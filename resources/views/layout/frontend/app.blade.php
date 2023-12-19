<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Fintax</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset("public/assets/images/logo/fintaxlogo.jpg")}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/bootstrap.min.css")}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/font-awesome.min.css")}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/animate.css")}}">
        <!-- aos css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/aos.css")}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/owl.carousel.css")}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/slick.css")}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/off-canvas.css")}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/fonts/linea-fonts.css")}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/fonts/flaticon.css")}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/magnific-popup.css")}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset("public/assets/css/rsmenu-main.css")}}">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/inc/custom-slider/css/nivo-slider.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/inc/custom-slider/css/preview.css")}}">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="{{asset("public/assets/css/rsmenu-transitions.css")}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/rs-spacing.css")}}">
        <!-- rs animations css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/rs-animations.css")}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/style.css")}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset("public/assets/css/responsive.css")}}">
        <style>
          .scrolling{
              width: 185px;
              height: 400px;
              overflow-x: hidden;
              overflow-y: scroll;
              z-index: 1000 !important;
              position: fixed !important;
          }
          .asterisk{
            color:red;
            font-size: 25px;
          }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
          $( document ).ready(function() {
            $('#fulls').click(function(){ 
              $('#radio1').trigger('click');
            });
            $('#partial').click(function(){ 
              $('#radio2').trigger('click');
            });
            $('#minimum').click(function(){ 
              $('#radio3').trigger('click');
            });
          });

          $(document).ready(function(){
            $("#img-2").hide();
            $("#img-3").hide();
              $("#radio1").click(function(){
                  $("#img-1").show();
                  $("#img-2").hide();
                  $("#img-3").hide();
              });

              $("#radio2").click(function(){
                  $("#img-2").show();
                  $("#img-1").hide();
                  $("#img-3").hide();
              });

              $("#radio3").click(function(){
                  $("#img-3").show();
                  $("#img-1").hide();
                  $("#img-2").hide();
              });

          });
          
          // $(document).ready(function() {
          //   $('input[name="payment"]:radio').click(function(){
          //       if ($('input[name=payment]:checked').val() == "full_payment") {
          //           $("#img-1").attr("src","http://localhost/fintax/la_fintax/public/assets/images/payment.jpg");


          //       } else if ($('input[name=payment]:checked').val() == "partial_payment") {
          //           $("#img-2").attr("src","http://localhost/fintax/la_fintax/public/assets/images/hdfcPayment.jpg");

          //       }else if ($('input[name=payment]:checked').val() == "minimum_payment") {
          //           $("#img-3").attr("src","http://localhost/fintax/la_fintax/public/assets/images/bankDetails.jpg");
          //         }

          //   });
          //   });

        </script>

    </head>
@include('layout.frontend.header')

@yield('content')

@include('layout.frontend.footer')


  <!-- modernizr js -->
        <script src="{{asset("public/assets/js/modernizr-2.8.3.min.js")}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset("public/assets/js/jquery.min.js")}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset("public/assets/js/bootstrap.min.js")}}"></script>
        <!-- Menu js -->
        <script src="{{asset("public/assets/js/rsmenu-main.js")}}"></script>
        <!-- op nav js -->
        <script src="{{asset("public/assets/js/jquery.nav.js")}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset("public/assets/js/owl.carousel.min.js")}}"></script>
        <!-- Slick js -->
        <script src="{{asset("public/assets/js/slick.min.js")}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset("public/assets/js/isotope.pkgd.min.js")}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{asset("public/assets/js/imagesloaded.pkgd.min.js")}}"></script>
        <!-- wow js -->
        <script src="{{asset("public/assets/js/wow.min.js")}}"></script>
        <!-- aos js -->
        <script src="{{asset("public/assets/js/aos.js")}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset("public/assets/js/skill.bars.jquery.js")}}"></script>
        <script src="{{asset("public/assets/js/jquery.counterup.min.js")}}"></script>
         <!-- counter top js -->
        <script src="{{asset("public/assets/js/waypoints.min.js")}}"></script>
        <!-- video js -->
        <script src="{{asset("public/assets/js/jquery.mb.YTPlayer.min.js")}}"></script>
        <!-- magnific popup js -->
        <script src="{{asset("public/assets/js/jquery.magnific-popup.min.js")}}"></script>
        <!-- Nivo slider js -->
        <script src="{{asset("public/assets/inc/custom-slider/js/jquery.nivo.slider.js")}}"></script>
        <!-- plugins js -->
        <script src="{{asset("public/assets/js/plugins.js")}}"></script>
        <!-- parallax-effect js -->
        <script src="{{asset("public/assets/js/parallax-effect.min.js")}}"></script>
        <!-- contact form js -->
        <script src="{{asset("public/assets/js/contact.form.js")}}"></script>
        <!-- ProgressBar Js -->
        <script src="{{asset("public/assets/js/jQuery-plugin-progressbar.js")}}"></script>
        <!-- main js -->
        <script src="{{asset("public/assets/js/main.js")}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </body>
</html>
