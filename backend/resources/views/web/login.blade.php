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

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet">
    <!-- main Styles -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> | Log In | </title>

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


<section  class="login-page-banner">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 col-sm-12 text-center welcomeTexte mb-2">
                <h1 class="text-light">Log in To WAGABAT</h1>
                <span class="login-header-span "> <a class="text-light" href="{{route('web.home')}}"> <i class=" fas fa-home mr-2"></i> BACK TO HOME</a></span>
            </div>
            <div class=" login-buttons  col-lg-5 col-md-8 col-sm-12 text-center">
                <div class="container">
                    <div  class="row ">

                        <!-- Nav tabs -->
                        <div class="col-lg-12 m-auto loginTap ">
                            <ul class="nav nav-tabs text-center mt-3 col-lg-12 ">

                                <li class="nav-item col-lg-6 col-md-6 col-sm-6 ">
                                    <a  class="nav-link  mb-1 mt-3" data-toggle="tab" href="#userLogin"> 
                                        <!-- <img class="tab-image" style="color: white;" width="60px" height="60px"  src="2257bac0e14094f.jpg" alt="">  -->
                                         <h4> User Login </h4>
                                    </a>
                                </li>
                                <!-- ////////// -->
                                <li class="nav-item col-lg-6 col-md-6 col-sm-6 " style="border-left:2px solid white">
                                    <a class="nav-link text-center mb-3 " data-toggle="tab" href="#restaurantLogin"> 
                                        <!-- <img class="tab-image" width="60px" height="60px" src="./restu.svg" alt="">  -->
                                        <h4> Restaurant Login </h4>

                                    </a>
                                </li>
                                <!-- ///////// -->

                            </ul>
                        </div>
                        <br> 
                        <div class="tab-content ">
                            <!-- ///////////////////////////////////////////////////// -->
                            <!-- ///////////////////////////////////////////////////// -->
                            <!-- ///////////////////////////////////////////////////// -->
                            <div id="userLogin" class=" tab-pane active "><br>
                                <div class=" login-form col-lg-12 text-white text-center">
                                    <!-- <h2>user login</h2>                                    -->

                                    <form class="contact-form mt-2" action="{{route('web.userLogin')}}" method="POST">
                                    @csrf
                                    @method("POST")
                                        <!-- ////////////////////////// -->
                                        <div class="  ">
                                            <div class="col-md-12 p-4  ">
                                                <input type="email" name="email" class="col-lg-12 p-2" id="validationCustom" value="admin@gmail.com" required placeholder=" USER EMAIL ">
                                            </div>
                                            <div class="col-md-12 p-4">
                                                <input type="password" name="password" class="col-lg-12 p-2 mb-3" id="validationCustom" value="123456789" required placeholder="USER PASSWORD">
                                                <span class="" > <input type="checkbox"> remember me</span>
                                            </div>

                                        </div>
                                        <!-- ////////////////////////////////////////// -->

                                        <button class="btn btn-danger login-btun  p-1 col-lg-6 col-md-6 col-sm-6 mb-3" type="submit">Submit</button>

                                    </form>
                                    <span class="mt-3" >Don't have an account? <a style="color: #eb102d;" href="{{route('web.user-signup')}}">Signup</a></span>
                                </div>
                            </div>

                            <!-- ///////////////////////////////////////////////////// -->
                            <!-- ///////////////////////////////////////////////////// -->
                            <!-- ///////////////////////////////////////////////////// -->
                            <div id="restaurantLogin" class=" tab-pane  "><br>
                                <div class=" login-form col-lg-12 text-white text-center">
                                    <!-- <h2> restaurant login </h2> -->



                                    <form class="contact-form" action="{{route('web.resturantLogin')}}" method="POST">
                                        @csrf
                                        @method("POST")
                                        <!-- ////////////////////////// -->
                                        <div class=" mt-5 ">
                                            <div class="col-md-12 p-4  ">
                                                <input type="email" class="col-lg-12 p-2" id="validationCustom" value="restaurant@gmail.com" required placeholder=" RESTAURANT EMAIL" name="email">
                                            </div>
                                            <div class="col-md-12 p-4">
                                                <input type="password" class="col-lg-12 p-2 mb-3" id="validationCustom" value="123456789" required placeholder="RESTAURANT PASSWORD" name="password">
                                                <span class="" > <input type="checkbox" name="readMy"> remember me</span>
                                            </div>

                                        </div>
                                        <!-- ////////////////////////////////////////// -->

                                        <button class="btn btn-danger login-btun  p-1 col-lg-6 col-md-6 col-sm-6 mb-3" type="submit" >Submit</button>

                                    </form>
                                    <span class="mt-3" >Don't have an account? ok dont worry <a style="color: #eb102d;" href="{{route('web.resturant-signup')}}">be a partner</a></span>
                                </div>
                            </div>

                        </div>


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


<!-- bootstrap -->
<script src="/assets/js/bootstrap/jquery-3.5.1.js"></script>
<script src="/assets/js/bootstrap/popper.min.js"></script>
<script src="/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- fontawsome -->
<script src="/assets/js/fontawsome/fontawesome.min.js"></script>
<script src="/assets/js/fontawsome/solid.min.js"></script>
<script src="/assets/js/fontawsome/brands.min.js"></script>
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














