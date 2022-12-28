<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- <link rel="icon" type="image/png" sizes="36x36" href="/images/favicon.png"> -->
    <!-- fontawsome -->
    <link rel="stylesheet" href="/assets/css/fontawsome/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/fontawsome/solid.min.css">
    <link rel="stylesheet" href="/assets/css/fontawsome/brands.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- plugins -->

    <!-- <link rel="stylesheet" href="css/plugins/owl.theme.default.min.css"> -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet">
    <!-- main Styles -->
    <link rel="stylesheet" href="/assets/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/how-t.css">
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> | how to | </title>

</head>
<body>

<!-- ? Preloader Start -->
<!-- <div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text ">
              <img src="/assets/photos/new/preloader.gif" alt="loader">
          </div>
      </div>
  </div>
</div> -->


<section class="about-page-howto">
    @include('web.nav')


    <div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-sm-12 text-center welcomeTexte">
                    <h1 class="text-light">HOW IT WORKS</h1>
                    <!-- <h5>ABOUT US <i class="fa fab-arrow-right"></i> </h5> -->
                    <span class="pages-header-span"> <a class="text-light" href="{{route('web.home')}}"> <i class=" fas fa-home mr-2"></i> / HOME <i class=" mt-2  ml-3 fa fa-arrow-alt-circle-right"></i> </a>
                    </span> <span class=" text-danger ml-3">  HOW IT WORKS </span>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="About mt-5" id="About">
    <!-- <br><br><br><br> -->
    <div class="container">
        <div class="text-center">
            <img  src="/assets/photos/divider.png" alt="">
            <!-- <h1 class="text-center  text-title">ABOUT US </h1> -->
        </div>
        <br>
        <div class="row">
            <!-- //////////////// -->
            <div  class="col-lg-5 p-2 howto-about-img ">

            </div>
            <!-- //////////////// -->
            <!-- //////////////// -->
            <div class="col-lg-7 pl-5  about-text">
                <br><br>
                <h2 style="font-size: 25px;">The System Is Set Up To Better Satisfy The Needs Of Waiting Customers And Help
                    Restaurants More Efficiently Manage Wait Lists And Reservations. </h2>
                <!-- <h4>our mission :</h4> -->
                <p class="mt-5" style="font-size: 15px;">Scelerisque vestibulum tristique himenaeos in metus
                    ipsum non nunc at magna turpis ipsum, urna ligula non lectus eu curae per
                    leo duis ultricies scelerisque facilisis diam mattis netus aptent tincidunt
                    ac nam aenean cubilia diam faucibus aliquam, velit tristique. <br><br>
                    mentum commodo magna cubilia nulla lectus tortor phasellus fusce etiam porttitor,
                    cubilia nulla luctus nisl nec condimentum primis, curabitur condimentum sit lobortis posuere.</p>
                <button class=" about-btun rounded-pill ">  read more  </button>
            </div>
            <!-- //////////////// -->
        </div>
    </div>
</section>
<br><br>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->


<section>
    <div class="container">
        <div class="iframe-window">
            <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/TrCoF1LuIB8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
    </div>
</section>



<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="how" id="how">
    <br><br>
    <div class="container">
        <div class="text-center">
            <img  src="../photos/divider.png" alt="">
            <h1 class="text-center  text-title">HOW IT WORKS </h1>
            <p>Easy 3 Step Orders</p>
        </div>
        <br>

        <div class="row p-4 justify-content-center align-items-center">
            <!-- ///////////////////////// -->
            <div class=" col-lg-3 col-md-6 col-sm-8 col-xs-12 rounded shadow p-3 text-center order-step mt-5">
                <i class="flaticon-restaurant"></i>
                <h4>Choose A Restaurant</h4>
                <p>We make it simple to find the food you crave. Enter your address and let us do the rest.</p>
                <hr>
                <span class=" h3 border border-danger  d-inline-block p-1">1</span>
            </div>
            <!-- ///////////////////////// -->
            <div class="col-lg-1">
                <span class="h2 text-center step-arrow">  <i class="fa fa-arrow-right ml-3 " ></i> </span>
            </div>  <!-- ///////////////////////// -->
            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 rounded shadow p-3 text-center order-step mt-5 ">
                <i class="flaticon-choose"></i>
                <h4>Choose A Tasty Dish</h4>
                <p>When you order Eat Street, we'll hook you up with exclusive coupons, specials and rewards.</p>
                <hr>
                <span class=" h3 border border-danger  d-inline-block p-1">2 </span>
            </div>
            <!-- ///////////////////////// -->
            <div class="col-lg-1">
                <span class="h2 text-center step-arrow">  <i class="fa fa-arrow-right ml-3 " ></i> </span>
            </div>
            <!-- ///////////////////////// -->
            <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 rounded shadow p-3 text-center order-step mt-5 ">
                <i class="flaticon-take-away"></i>
                <h4>Pick Up your meal</h4>
                <p>We make food ordering fast, reliable , simple and free - no matter if you order online or cash.</p>
                <hr>
                <span class=" h3 border border-danger  d-inline-block p-1">3</span>
            </div>
            <!-- ///////////////////////// -->

        </div>

    </div>
</section>

<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->

<section class="doc-photo">
    <div class="container">
        <!-- <h1 class="text-center ">mostafa</h1> -->
        <div class="text-center doc-photo-marg">
            <img class=" doctors-img-pre  ml-auto img-fluid img-responsive" src="/assets/photos/imgs/takeaway-catering-logo-large.png" width="100px" height="100px" alt="doctors">
            <p class="p_has_fs">We care about your mental health </p>
        </div>
    </div>
</section>


<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path  fill="#eb102d" fill-opacity="1" d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>
<footer class="pt-4 section footer-classic context-dark bg-image p-5">

    <div class="container">
        <div class="row row-30">
            <div class="col-lg-3 col-md-6 col-sm-12 ">

                <div class="pr-xl-4"><a class="footer-brand" href="{{route('web.home')}}"><h1 style="color: #ffffff;">Wagabat</h1></a>
                    <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                    <img class="img-fluid img-responsive" src="/assets/photos/footer-img-300x134.png" alt="">
                    <div class=" mr-3 social">
                        <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-instagram"></i></a>
                    </div>

                </div>
            </div>
            <!-- /////////////////////////////// -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center footer-marg">
                <h5>POPULAR CITIES</h5>
                <ul class="nav-list ">
                    <li><a href="#">10th of ramadan</a></li>
                    <li><a href="#">Alf maskan</a></li>
                    <li><a href="#">zagazeg</a></li>
                    <li><a href="#">alexandria</a></li>
                    <li><a href="#">the red sea</a></li>
                </ul>
                <a class="about-link " href="{{route('web.home')}}">
                    <h3 class="text-light mt-2" style="font-family: 'La Belle Aurore', cursive!important;"> Wagabat </h3>
                </a>

            </div>
            <!-- //////////////////////////// -->
            <!-- /////////////////////////////// -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center footer-marg">
                <h5>MENU</h5>
                <ul class="nav-list ">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">HOW IT WORKS</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
                <a class="about-link " href="{{route('web.home')}}">
                </a>

            </div>
            <!-- //////////////////////////// -->
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <h5>CONTACTS</h5>
                <dl class="contact-list">
                    <dt>Address:</dt>
                    <dd>798 South Park Avenue, Jaipur, Raj</dd>
                </dl>
                <dl class="contact-list">
                    <dt>email:</dt>
                    <dd><a href="mailto:#">wagabat@gmail.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>phones:</dt>
                    <dd><a href="tel:#">01064697587</a> <br> <span>or</span> <br> <a href="tel:#">01143067577</a>
                    </dd>
                </dl>
            </div>
            <!-- //////////////////////////// -->
        </div>
        <!-- ///////////////////////// -->

        <hr style="background-color: rgb(255, 255, 255);">
        <div class="row p-3">
            <h6 class="mt-3 ml-3 ">Copyright ©2020 All rights reserved | This template is  made  by <a href="!#">TIBA STUDENT </a>  </h6>
            <span class="ml-auto mr-3" class="socials">
            <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-twitter"></i></a>
            <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-facebook"></i></a>
            <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-google-plus"></i></a>
            <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-pinterest"></i></a>
            <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-dribbble"></i></a>

          </span>
        </div>

    </div>
</footer>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- bootstrap -->
<script src="/assets/js/bootstrap/jquery-3.5.1.js"></script>
<script src="/assets/js/bootstrap/popper.min.js"></script>
<script src="/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- fontawsome -->
<script src="/assets/js/fontawsome/fontawesome.min.js"></script>
<script src="/assets/js/fontawsome/solid.min.js"></script>
<script src="/assets/js/fontawsome/brands.min.js"></script>
<!-- plugins -->
<!-- <script src="../js/plugins/vegas.js"></script>
<script src="../js/plugins/bootstrap-datepicker.js"></script>
<script src="../js/plugins/jquery.timepicker.min.js"></script>
<script src="../js/plugins/jquery.nice-select.js"></script>
<script src="../js/plugins/owl.carousel.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="../js/plugins/magicscroll.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

<!-- main Styles -->
<script src="/assets/js/custom.js"></script>
<script>

    /* 1. Preloder */
    // $(window).on('load', function () {
    //     $('#preloader-active').delay(1050).fadeOut('slow');
    //     $('body').delay(850).css({
    //       'overflow': 'visible'
    //     });
    //   });

</script>
</body>
</html>
