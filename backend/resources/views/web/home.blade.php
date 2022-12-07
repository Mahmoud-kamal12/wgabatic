<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="photos/favicon-32x32.png">
    <!-- <link rel="icon" type="image/png" sizes="36x36" href="/images/favicon.png"> -->
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <!-- fontawsome -->
    <link rel="stylesheet" href="/assets/css/fontawsome/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/fontawsome/solid.min.css">
    <link rel="stylesheet" href="/assets/css/fontawsome/brands.min.css">
    <!-- plugins -->
    <link rel="stylesheet" href="/assets/css/plugins/vegas.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <!-- <link rel="stylesheet" href="/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery.timepicker.css">
    <link rel="stylesheet" href="/assets/css/plugins/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/plugins/owl.theme.default.min.css"> -->
    <!-- google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet"> -->
    <!-- main Styles -->
    <link rel="stylesheet" href="/assets/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> TAKE AWAY  </title>

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
<!-- Preloader end -->

<!--//////////////////////Home Section/////////////////////////// */
/* //////////////////////Home Section/////////////////////////// */ -->
<section class="header-banner " id="header">
    <div class="overlay">
        @include('web.nav')
        <!-- END nav -->
        <div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-sm-12 text-center welcomeText">
                        <h1>WELCOME TO TAKE AWAY</h1>
                        <h2>We aim to make a meal <span>easier,</span> <br><span>faster</span>and more <span>comfortable</span> </h2>

                        <div class="cursor"></div>
                        <div class="cursor2"></div>


                        <!-- <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, expedita.</p> -->
                        <!-- <a class="btn btn-success pl-3 pr-3 mr-3 rounded shadow" href=""> LOG IN </a>
                        <a class="btn btn-success pl-3 pr-3  rounded shadow" href="">  BOOK A DOCTOR</a> -->
                        <form class="text-center">
                            <!-- ////////////////////////// -->
                            <div class="form-row justify-content-center align-items-center">
                                <div class="col-md-3 col-sm-5 col-xs-5 mb-3">
                                    <select>
                                        <option data-display="Select resturant">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <!-- //////////////////////////////////// -->
                                <div class="col-md-3 col-sm-5 col-xs-5 mb-3">
                                    <select>
                                        <option data-display="Select location">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <!-- //////////////////////////////// -->
                                <div class="col-md-2 col-sm-2 col-xs-2 mb-3">
                                    <input class="btn text-light submitBtn p-2 col-md-12" type="submit" value="search">
                                    <!-- <button class="btn  submitBtn p-2 col-md-12" type="submit">search</button> -->
                                </div>
                            </div>
                            <!-- ////////////////////////// -->
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>






</section>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->

<section class="quickly-services " id="quickly-services">
    <div class="container  ">
        <div class="row text-center justify-content-center align-items-center  service-carry rounded ">
            <!-- /////////////////////////////////////////// -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 quick_service">
                <a href="#!">
                    <i class="flaticon-take-away-1"></i>
                    <h5>TAKE AWAY</h5>
                </a>
            </div>
            <!-- /////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////// -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 quick_service ">
                <a href="#!">
                    <i class="flaticon-dinner-table"></i>
                    <h5>feasts</h5>
                </a>
            </div>
            <!-- /////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////// -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 quick_service">
                <a href="#!">
                    <i class="flaticon-breakfast"></i>
                    <h5>BREAKFAST</h5>
                </a>
            </div>
            <!-- /////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////// -->
            <div class="col-lg-2 col-md-6 col-sm-6  quick_service">
                <a href="#!">
                    <i class="flaticon-food"></i>
                    <h5>LUNCH</h5>
                </a>
            </div>
            <!-- /////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////// -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 quick_service">
                <a href="#!">
                    <i class="flaticon-dinner"></i>
                    <h5>DINNER</h5>
                </a>
            </div>
            <!-- /////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////// -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 quick_service">
                <a href="#!">
                    <i class="flaticon-pizza-slice"></i>
                    <h5>NIGHTLIFE</h5>
                </a>
            </div>
            <!-- /////////////////////////////////////////// -->
        </div>
    </div>



</section>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="About" id="About">
    <br><br><br><br>
    <div class="container">
        <div class="text-center">
            <img  src="/assets/photos/divider.png" alt="">
            <h1 class="text-center  text-title">ABOUT US </h1>
        </div>
        <br>
        <div class="row">
            <!-- //////////////// -->
            <div class="col-lg-6 p-2 about-img ">

            </div>
            <!-- //////////////// -->
            <!-- //////////////// -->
            <div class="col-lg-6 pl-5  about-text">
                <br><br>
                <h2>About take away </h2>
                <h4>our mission :</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis sapiente natus autem cupiditate aut repudiandae dolor quia laboriosam, quisquam inventore ipsa ratione, ullam odio consectetur blanditiis officia deserunt, in at!</p>
                <button class=" about-btun ">  ABOUT TAKE AWAY  </button>
                <br><br><br>
                <a class="about-link" href="{{route('web.home')}}"> <h3 style="font-family: 'La Belle Aurore', cursive!important;"> TAKE_AWAY.COM </h3> </a>
            </div>
            <!-- //////////////// -->
        </div>
    </div>

    <div class="element">

        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </div>

</section>
<br><br>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="how" id="how">
    <br><br>
    <div class="container">
        <div class="text-center">
            <img  src="/assets/photos/divider.png" alt="">
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


    <div class="element">

        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </div>

</section>

<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->



<!-- blog -->
<!-- blog -->
<!-- blog -->
<!-- blog -->
<!-- blog -->




<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->

<section class="restos" id="restos">
    <br><br>
    <div class="container">
        <div class="text-center">
            <img  src="/assets/photos/divider.png" alt="">
            <h1 class="text-center  text-title">  TOP RESTAURANT </h1>
            <p>All the top restaurant </p>
        </div>

        <div class="row">
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5 blog-card">
                <div style="background-image: url({{$mahmoud}});" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                        <div class="">
                            <i style="position: absolute; top: 180px; right: 100px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 80px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 60px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 40px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 20px; " class="fa fa-star icon-restu2"></i>
                        </div>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-danger" src="/assets/photos/imgs/listing-logo18.png" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white  ">
                        <br><br>
                        <h5 class="font-weight-bolder">Italian Pizza House</h5>
                        <p style="font-size: 15px;">Drum Stick, Pizza, Potato Fries</p>
                        <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">15.00 $</span>
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="/assets/photos/imgs/listing-logo18.png  " width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" >United Kingdom, London</span>
                        </div>
                        <div class="float-right ml-3">
                            <a href="../views/Ordering.html">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5 blog-card">
                <div style="background-image: url(/assets/photos/imgs/mac.jpg);" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                        <div class="">
                            <i style="position: absolute; top: 180px; right: 100px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 80px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 60px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 40px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 20px; " class="fa fa-star icon-restu2"></i>
                        </div>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-warning" src="/assets/photos/imgs/mcdonals-1-1.png" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white  ">
                        <br><br>
                        <h5 class="font-weight-bolder">McDonalds</h5>
                        <p style="font-size: 15px;">Chines Soup, Cold Coffee, Drum Stick, Ice Cream</p>
                        <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">10.00 $</span>
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="/assets/photos/imgs/mcdonals-1-1.png" width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" >Italy, Legnano</span>
                        </div>
                        <div class="float-right ml-3">
                            <a href="../views/Ordering.html">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5 blog-card">
                <div style="background-image: url(/assets/photos/imgs/kfc-fried.jpg);" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                        <div class="">
                            <i style="position: absolute; top: 180px; right: 100px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 80px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 60px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 40px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 20px; " class="fa fa-star icon-restu2"></i>
                        </div>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-danger" src="/assets/photos/imgs/kfc-1-1.png" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white  ">
                        <br><br>
                        <h5 class="font-weight-bolder">Kentucky</h5>
                        <p style="font-size: 15px;">Magi, Noodles, Potato Fries, Prawns</p>
                        <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">15.00 $</span>
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="/assets/photos/imgs/kfc-1-1.png" width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" >France, Dieppe</span>
                        </div>
                        <div class="float-right ml-3">
                            <a href="../views/Ordering.html">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->

            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->

            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5 blog-card">
                <div style="background-image: url(/assets/photos/imgs/dominos.jpg);" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                        <div class="">
                            <i style="position: absolute; top: 180px; right: 100px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 80px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 60px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 40px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 20px; " class="fa fa-star icon-restu2"></i>
                        </div>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-primary" src="/assets/photos/imgs/domino-1-1.png" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white  ">
                        <br><br>
                        <h5 class="font-weight-bolder">dominos Pizza </h5>
                        <p style="font-size: 15px;">Pizza, Potato </p>
                        <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">15.00 $</span>
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="/assets/photos/imgs/domino-1-1.png  " width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" >Spain, Madrid</span>
                        </div>
                        <div class="float-right ml-3">
                            <a href="../views/Ordering.html">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5 blog-card">
                <div style="background-image: url(/assets/photos/imgs/hardes.png);" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                        <div class="">
                            <i style="position: absolute; top: 180px; right: 100px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 80px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 60px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 40px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 20px; " class="fa fa-star icon-restu2"></i>
                        </div>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-warning" src="/assets/photos/imgs/hardees-1-1.png" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white  ">
                        <br><br>

                        <h5 class="font-weight-bolder">Hardees</h5>
                        <p style="font-size: 15px;">Apple Juice, BB.Q, Carrot Juice, Chicken Roast</p>
                        <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">10.00 $</span>
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="/assets/photos/imgs/hardees-1-1.png" width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" >United States, Miami</span>
                        </div>
                        <div class="float-right ml-3">
                            <a href="../views/Ordering.html">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5 blog-card">
                <div style="background-image: url(/assets/photos/imgs/dragon.jpg);" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                        <div class="">
                            <i style="position: absolute; top: 180px; right: 100px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 80px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 60px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 40px; " class="fa fa-star icon-restu2"></i>
                            <i style="position: absolute; top: 180px; right: 20px; " class="fa fa-star icon-restu2"></i>
                        </div>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-danger" src="/assets/photos/imgs/dragon-1-1.png" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white  ">
                        <br><br>
                        <h5 class="font-weight-bolder">Dragon Express</h5>
                        <p style="font-size: 15px;">Magi, Noodles, Potato Fries, Prawns</p>
                        <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">15.00 $</span>
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="/assets/photos/imgs/dragon-1-1.png" width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" >India, Lucknow</span>
                        </div>
                        <div class=""> </div>
                        <div class="  ">
                            <a href="../views/Ordering.html">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
        </div>
    </div>


    <div class="element">

        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </div>

</section>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="top-restos" id="top-restos">
    <br><br>
    <div class="container">
        <div class="text-center">
            <img  src="/assets/photos/divider.png" alt="">
            <h1 class="text-center  text-title">  OUR BEST RESTAURANTS </h1>
            <p>choose from most popular</p>
        </div>

        <div class="row">
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center res-rating">
                <img src="/assets/photos/imgs/kfc-1-1.png" alt="">
                <p class="mt-3 h5">Kfc – Kentucky</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->

            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center  res-rating ">
                <img src="/assets/photos/imgs/mcdonals-1-1.png" alt="">
                <p class="mt-3 h5">McDonalds</p>
                <div class=" rating McDonalds-rating">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center res-rating">
                <img src="/assets/photos/imgs/domino-1-1.png" alt="">
                <p class="mt-3 h5">Domino’s Pizza</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center  res-rating">
                <img src="/assets/photos/imgs/noodle-1-1.png" alt="">
                <p class="mt-3 h5">Noodle House</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center res-rating">
                <img src="/assets/photos/imgs/menu-1-1-1.png" alt="">
                <p class="mt-3 h5">Fruit And Drinks</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center res-rating">
                <img src="/assets/photos/imgs/healthy-1-1.png" alt="">
                <p class="mt-3 h5">Natural Food</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center mt-3 res-rating ">
                <img src="/assets/photos/imgs/hardees-1-1.png" alt="">
                <p class="mt-3 h5">Hardees</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center mt-3 res-rating">
                <img src="/assets/photos/imgs/subway-1-1.png" alt="">
                <p class="mt-3 h5">Subway</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center mt-3 res-rating">
                <img src="/assets/photos/imgs/nando-1-1.png" alt="">
                <p class="mt-3 h5">Nandos</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center mt-3 res-rating">
                <img src="/assets/photos/imgs/misumiu-1-1.png" alt="">
                <p class="mt-3 h5">Misimisu Chineese</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center mt-3 res-rating">
                <img src="/assets/photos/imgs/dragon-1-1.png" alt="">
                <p class="mt-3 h5">Dragon Express</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-2 p-2 text-center mt-3 res-rating">
                <img src="/assets/photos/imgs/coffee-1-1.png" alt="">
                <p class="mt-3 h5">Premium Coffee</p>
                <div class=" rating ">
                    <i style=" right: 100px;" class="fa fa-star rating-icon "></i>
                    <i style=" right: 80px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 60px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 40px; " class="fa fa-star rating-icon "></i>
                    <i style=" right: 20px; " class="fa fa-star rating-icon "></i>
                    <p class="d-inline ml-2">(2)</p>
                    <span class="d-inline "> <i class="d-inline fa fa-heart-broken text-danger"></i> </span>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
        </div>
    </div>

    <div class="element">

        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </div>

</section>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="our-services mt-5">
    <div class="container">

        <div class="gay-text-title text-center  mb-3">
            <img  src="/assets/photos/31609-ffffff.svg" alt="">
            <h1 class="text-center  text-title ">  OUR SERVICES </h1>
            <p>we give you a fantastic services</p>
        </div>
        <h1 class="text-white text-center mt-3">  our currently services </h1>


        <div class="row text-center services  ">

            <div data-bg="/assets/photos/menu/New/9.jpg" class=" col-lg-3 col-md-6 col-sm-12 p-2 services-inner">

                <div class="d-flex services-box">

                    <div class="d-flex align-items-start flex-column p-1 text-center" >
                        <h3 class="mb-auto "> pick up your meals </h3>
                        <div class=" text-center"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quam. </p> </div>
                    </div>

                </div>

            </div>


            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->

            <div data-bg="/assets/photos/menu/New/4.jpg" class=" col-lg-3 col-md-6 col-sm-12 p-2 services-inner">
                <div class="d-flex services-box">

                    <div class="d-flex align-items-start flex-column p-1 text-center" >
                        <h3 class="mb-auto "> easy ordering </h3>
                        <div class=" text-center"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quam. </p> </div>
                    </div>

                </div>
            </div>

            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->

            <div data-bg="/assets/photos/menu/New/10.jpg" class=" col-lg-3 col-md-6 col-sm-12 p-2 services-inner">
                <div class="d-flex services-box">

                    <div class="d-flex align-items-start flex-column p-1 text-center" >
                        <h3 class="mb-auto "> through driving </h3>
                        <div class=" text-center"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quam. </p> </div>
                    </div>

                </div>
            </div>

            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->



        </div>

        <div class="row text-center services  ">

            <div data-bg="/assets/photos/menu/New/11.jpg" class=" col-lg-3 col-md-6 col-sm-12 p-2 services-inner">

                <div class="d-flex services-box">

                    <div class="d-flex align-items-start flex-column p-1 text-center" >
                        <h3 class="mb-auto "> booking a table </h3>
                        <div class=" text-center"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quam. </p> </div>
                    </div>

                </div>

            </div>


            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->

            <div data-bg="/assets/photos/menu/New/12.jpg" class=" col-lg-3 col-md-6 col-sm-12 p-2 services-inner">
                <div class="d-flex services-box">

                    <div class="d-flex align-items-start flex-column p-1 text-center" >
                        <h3 class="mb-auto "> getting fantastic offers</h3>
                        <div class=" text-center"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quam. </p> </div>
                    </div>

                </div>
            </div>

            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->



        </div>


    </div>





</section>






<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section class="doc-photo ">
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

                <div class="pr-xl-4"><a class="footer-brand" href="{{route('web.home')}}"><h1 style="color: #ffffff;">TAKE AWAY</h1></a>
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
                    <h3 class="text-light mt-2" style="font-family: 'La Belle Aurore', cursive!important;"> TAKE AWAY </h3>
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
                    <dd><a href="mailto:#">TAKE_AWAY@gmail.com</a></dd>
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
            <h6 class="mt-3 ml-3 ">Copyright ©2020 All rights reserved | This template is  made  by <a href="https://www.facebook.com/mostafa.emadgomaa">HTI STUDENT </a>  </h6>
            <span class="ml-auto mr-3" class="socials">
          <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-twitter"></i></a>
          <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-facebook"></i></a>
          <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-google-plus"></i></a>
          <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-pinterest"></i></a>
          <a target="_blank" href="#"><i class=" footerSocialIcon mt-3 m-1 fab fa-dribbble"></i></a>

        </span>
        </div>


        <div class="element">

            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>

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
<script src="/assets/js/plugins/vegas.js"></script>
<script src="/assets/js/plugins/jquery.nice-select.js"></script>
<!-- <script src="/assets/js/plugins/bootstrap-datepicker.js"></script>
<script src="/assets/js/plugins/jquery.timepicker.min.js"></script>
<script src="/assets/js/plugins/owl.carousel.min.js"></script>
<script src="/assets/js/scrollax.min.js"></script>
<script src="/assets/js/plugins/slick.min.js"></script> -->

<!-- main Styles -->
<script>

    $(window).on('load', function () {
        $('#preloader-active').delay(1050).fadeOut('slow');
        $('body').delay(850).css({
            'overflow': 'visible'
        });
    });



    // //////////////////////////////////
    $('#header').vegas({
        overlay: true,
        transition: 'fade',
        transitionDuration: 4000,
        delay: 3000,
        cover:true,
        color: '#000',
        animation: 'random',
        animationDuration: 5000,
        slides: [
            // { src: 'photos/24044795.jpg'},
            // { src: 'photos/banner (1).jpg'},
            // { src: 'photos/banner (2).jpg'},
            // { src: 'photos/banner (3).jpg'},
            { src: '/assets/photos/imgs/bg_img2.jpg'}

        ]
    });
    // ////////////////////////////////////////////////////

    var theMaxHeight = 0;
    $('.same-height .card-body').each(function () {

        if ($(this).height() > theMaxHeight) {
            theMaxHeight = $(this).height();
        }

    });
    $('.same-height  .card-body').height(theMaxHeight);

    // //////////////////////////////////////////
    const Ourservices = document.querySelector(".our-services");
    const servicesBox = document.querySelectorAll(".services-inner");
    const serviceText = document.querySelectorAll(".serviceText");


    servicesBox.forEach(el => {
        el.addEventListener("mouseover" , () => {
            let bg = el.getAttribute("data-bg");
            Ourservices.style.background = `url(${bg}) no-repeat center / cover`;
        });
    });


    // var cursor = document.getElementById('cursor');
    //             document.addEventListener('mousemove' , function (e) {
    //                 var x = e.clientX;
    //                 var y = e.clientY;
    //                 cursor.style.left = x + 'px';
    //                 cursor.style.top  = y + 'px';
    //             });





</script>


<script src="/assets/js/custom.js"></script>

</body>
</html>
