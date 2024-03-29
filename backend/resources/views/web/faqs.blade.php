
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="css/plugins/owl.theme.default.min.css"> -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet">
    <!-- main Styles -->
    <link rel="stylesheet" href="/assets/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/how-t.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> | FAQ`S| </title>
    <style>
        body {background-color: #EEE!important;}
    </style>
</head>
<body >

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


<section class="faqs-home-slider">
    @include('web.nav')
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <div style="background-image: url(/assets/photos/new/home-slide-2-1902x738.jpg);" class="swiper-slide faqs-background ">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12 col-sm-12 text-center welcomeTexte">
                            <h1 class="text-light">FREQUENTLY ASKED QUESTION’S</h1>
                            <!-- <h5>ABOUT US <i class="fa fab-arrow-right"></i> </h5> -->
                            <span class="pages-header-span"> <a class="text-light" href="{{route('web.home')}}"> <i class=" fas fa-home mr-2"></i> / HOME <i class=" mt-2  ml-3 fa fa-arrow-alt-circle-right"></i> </a>
                                </span> <span class=" text-danger ml-3">  FAQS </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /////////////////////////////////////////////////////////////// -->
            <div style="background-image: url(/assets/photos/new/home-slide-3-1920x800.jpg);" class="swiper-slide faqs-background ">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12 col-sm-12 text-center welcomeTexte">
                            <h1 class="text-light"> FREQUENTLY ASKED QUESTION’S </h1>
                            <!-- <h5>ABOUT US <i class="fa fab-arrow-right"></i> </h5> -->
                            <span class="pages-header-span"> <a class="text-light" href="{{route('web.home')}}"> <i class=" fas fa-home mr-2"></i> / HOME <i class=" mt-2  ml-3 fa fa-arrow-alt-circle-right"></i> </a>
                    </span> <span class=" text-danger ml-3 text-uppercase">  FAQS </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>


</section>
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->

<section class="faqs-container ">
    <div class=" text-center">

        <!--Accordion wrapper-->
        <div class=" col-lg-10 m-auto accordion md-accordion accordion-blocks" id="accordionEx78" role="tablist" aria-multiselectable="true">

            <!-- Accordion card -->
            <div class="card">
                <br>
                <br>
                <h1 class="text-left faqs-heading">ABOUT</h1>

                <!-- Card header -->
                <div  class="card-header " role="tab" id="headingUnfiled">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapseUnfiled" aria-expanded="true"
                       aria-controls="collapseUnfiled">
                        <h5 class="mt-1 mb-0 text-left">
                            <span class="text-danger ">What Is Wagabat?</span>
                            <i class=" text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>

                </div>

                <!-- Card body  show -->
                <div id="collapseUnfiled" class="collapse " role="tabpanel" aria-labelledby="headingUnfiled"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p class="text-left">'Content here, content here', making it look like readable English.
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                    and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                            </div>
                            <!--Grid row-->

                        </div>

                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->


            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading79">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse79" aria-expanded="true"
                       aria-controls="collapse79">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger " >How it works?</span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>

                </div>

                <!-- Card body -->
                <div id="collapse79" class="collapse " role="tabpanel" aria-labelledby="heading79"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->


            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse80" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">How can my restaurants get benefits from TakeAway?</span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse80" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->


            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse90" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">What are the benefits of using this theme?</span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse90" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->



            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse100" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  How can I get commissions on the sales of Food-bakery?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse100" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->

            <br>
            <br>
            <h1  class="faqs-heading text-left">TAKING ORDERS</h1>




            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse101" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  How do I accept a new order?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse101" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->




            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse102" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  When do I serve the food?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse102" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->




            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse103" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  Can managers accept orders simultaneously?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse103" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->





            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse104" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  What do I do if the guest is late?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse104" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->





            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse105" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  What happens when guests don’t show up?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse105" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->





            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse106" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  Can managers accept orders simultaneously?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse106" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <br>
            <br>
            <h1  class="text-left faqs-heading">PAYMENT</h1>


            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse107" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  How do guests pay for the order?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse107" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->


            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->





            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse108" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  When is payment transferred to my bank account?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse108" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->



            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->





            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="heading80">
                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse109" aria-expanded="true"
                       aria-controls="collapse80">
                        <h5 class="mt-1 mb-0">
                            <span class="text-danger ">  Still need help?  </span>
                            <i class="text-danger fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapse109" class="collapse" role="tabpanel" aria-labelledby="heading80"
                     data-parent="#accordionEx78">
                    <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui p-2  mx-3 ">

                            <!--Grid row-->
                            <div class="row">

                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Consequuntur velit minus impedit modi cum culpa sint vero unde,
                                    nesciunt corporis ipsa accusamus odio voluptatum delectus tempore
                                    quia nam? Impedit, iusto!</p>

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
        </div>
        <!--/.Accordion wrapper-->

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
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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




    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
        },
        effect: 'fade',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        parallax: true,
        speed: 1000,
        autoplayDisableOnInteraction: false

    });

</script>
</body>
</html>

