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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- plugins -->

    <!-- <link rel="stylesheet" href="css/plugins/owl.theme.default.min.css"> -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet">
    <!-- main Styles -->
    <link rel="stylesheet" href="/assets/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/resturant-regestration.css">
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> | REGISTER RESTAURANT | </title>
</head>
<body>

<section class="signUp-page-banner">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 col-sm-12 text-center welcomeTexte mb-2">
                <h1 class="text-light">Make An Account to USE  WAGABAT </h1>
                <span class="signup-header-span "> <a class="text-light" href="{{route('web.home')}}"> <i class=" fas fa-home mr-2"></i> BACK TO HOME</a></span>
            </div>
            <div class=" signup-buttons  col-lg-7 col-md-10 col-sm-12 text-center">
                <div class="container">
                    <div  class="row ">
                                                                                                                                                                                                                                    
                        <div class=" signup-form col-lg-12 text-white text-center mt-3">
                            <div>
                                <img src="/assets/photos/imgs/takeaway-catering-logo-large.png" width="100" height="100" alt="">
                            </div>

                            <form class="form-signup" action="{{route('web.resturantSignUpReq')}}" method="POST" >
                                @csrf
                                @method("POST")
                                <div style="    text-transform: none!important;" class=" text-center ">
                                    <div class=" form-row mt-3 ">
                                        <!-- ////////////////////////// -->
                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="Restaurant name * " name="name">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <!-- ////////////////////////// -->
                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="Restaurant phone *" name="phone">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <!-- ////////////////////////// -->
                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="email" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="Restaurant Email * " name="email">
                                        </div>
                                        <!-- ////////////////////////// -->


                                        <!-- ////////////////////////// -->
                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="Manager Name *"  name="m_name">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="Manager Contact phone *" name="m_phone">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4">
                                            <input type="email" class="col-lg-12 p-2 " id="validationCustom" value="" required placeholder="Contact Email *" name="contact_email">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="password" class="col-lg-12 p-2  " id="validationCustom" value="" required placeholder="password *" name="password">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="password" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="retype password  *" name="password_confirmation">
                                        </div>
                                        <!-- ////////////////////////// -->

                                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                                            <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="kitchen  *" name="">
                                        </div>

                                    </div>
                                    <!-- ////////////////////////////////////////// -->

                                   
                                    <div class=" text-left col-lg-12 col-md-12 col-sm-12 p-2  ">
                                        <input type="checkbox" class=""  value="" required >
                                        <span>By Registering You Confirm That You Accept The Terms & Conditions And Privacy Policy</span>
                                    </div>

                                </div>

                                <button class="btn btn-danger signup-btun  p-1 col-lg-2 col-md-2 col-sm-2 mb-3" type="submit">Submit</button>

                            </form>

                            <span class="mt-3" >Back to <a style="color: #eb102d;" href="{{route('web.login')}}">log in</a></span>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>


</section>










<!-- bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<script src="../js/plugins/magicscroll.js"></script> -->

<!-- main Styles -->
<script src="/assets/js/custom.js"></script>


<script>

    /* 1. Preloder */
    $(window).on('load', function () {
        $('#preloader-active').delay(1050).fadeOut('slow');
        $('body').delay(850).css({
            'overflow': 'visible'
        });
    });</script>
</body>
</html>
