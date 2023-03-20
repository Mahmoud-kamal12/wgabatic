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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- plugins -->
    <link rel="stylesheet" href="/assets/css/plugins/select2.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet">
    <!-- main Styles -->
    <link rel="stylesheet" href="/assets/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/resturantProfile.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <title> | Resturant profile | </title>

</head>
<body style="background-color: #EBEDF3!important;">

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


<section class="resturant-banner">
    @include('web.nav')

        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="/assets/photos/imgs/takeaway-catering-logo-large.png" alt="logo" width="70px" height="70px" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> <i class="fa fa-bars"></i> </span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link ">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link ">about us</a></li>
                    <li class="nav-item"><a href="how it work.html" class="nav-link  ">How It Works</a></li>
                    <li class="nav-item"><a href="faqs.html" class="nav-link ">FAQS</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link  ">Contact us</a></li>
                    <li class="nav-item"><a href="new login.html" class="nav-link  "> logIn/signUp </a></li>

                    <li class="nav-item ml-5 ">
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div>
        <!-- <img style="width: 100%; height: 450px; background: no-repeat center center fixed ; background-size: contain; overflow: hidden;" src="/assets/photos/kfc-meal.png" alt=""> -->
        <div class="container">

            <div  class="row justify-content-center align-items-center ">
                <div class="col-md-12 col-sm-12 text-center welcomeTexte">
                    <div class=" d-flex resturant-logo">
                        <div class=" p-3 ">
                            <img class="" src="{{asset(auth()->guard('restaurant')->user()->logo)}}" width="80" height="80"  alt="">
                        </div>
                        <div class=" p-3 text-light mt-4">
                            <h4 class="text-left">{{auth()->guard('restaurant')->user()->name}}</h4>
                            <p>  <i class="fas fa-pizza-slice"></i> Hot Dogs, Pizza & Stakes </p>
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

<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<section  class="department" id="department">
    <div class="container">
        <div  class="row">
            <div  class=" col-lg-3 col-md-4 mt-5 Tabs-nav">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="  nav-link py-2 p-2   active" id="v-pills-home-tab" data-toggle="pill" href="#dashbord" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-cog mr-3 "></i>  DASHBOARD</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-profile-tab" data-toggle="pill" href="#MY_RESTAURANT" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class=" fas fa-utensils mr-3  "></i>  MY RESTAURANT</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#MENU_BUILDER" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class=" fab fa-elementor mr-3 "></i>  MENU BUILDER</span></a>
                    <hr class="p-0 m-0">
                     <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#Reviews" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fas fa-comment-dots mr-3 "></i>  the given Reviews</span></a>
                    <hr class="p-0 m-0">
                    @if(auth()->guard('restaurant')->user()->table_status)
                    <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#Tables" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class=" fab fa-table mr-3 "></i>  Tables</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#BOOKING" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-list mr-3  "></i>  Table  BOOKING</span></a>
                    <hr class="p-0 m-0">
                    @endif
                    <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#ORDERS" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="  fa fa-shopping-cart mr-3  "></i>  ORDERS</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-settings-tab" data-toggle="pill" href="#WITHDRAWALS" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa far fa-frown mr-3 "></i>  WITHDRAWALS</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-settings-tab" data-toggle="pill" href="#EARNINGS" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class=" fas fa-file-invoice-dollar mr-3 "></i>  EARNINGS</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-settings-tab" data-toggle="pill" href="#CHANGE_PASSWORD" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-user-cog mr-3 "></i>  CHANGE PASSWORD</span></a>
                    <hr class="p-0 m-0">

                </div>
            </div>
            <!-- ////////////////////////////////////// -->
            <div  class="col-lg-9 col-md-8 mt-5">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <!--///////////////////////////////////////////////////////////////  -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="dashbord" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row tab-text">
                            <div  class="col-lg-10 ml-auto m-auto dashbord-bac text-white ">
                                <div class="welcomed-text p-2">
                                    <h3 class="mt-3">Welcome To Your Restaurant.</h3>
                                    <p  class="mt-4">
                                        Restaurant Dashboard gives you quick access
                                        to settings and tools for managing your Account like [Change address] and [Change password] .
                                        You can [manage Restaurant] Build Menu , Manage Orders, Bookings, Reviews, Memberships,
                                        Withdrawals, Earnings, Statements, Change Password, Location and if you are you
                                        Restaurant Owner can also [Manage Team].</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- //////////////////////////////////////////////////// -->
                        <!-- //////////////////////////////////////////////////// -->
                        <!-- //////////////////////////////////////////////////// -->

                        <div class="">
                            <table class="table scroll-x-table text-center">

                                <tbody>


                            </div>
                </tbody>
                </table>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="MY_RESTAURANT" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h5 class="modal-title text-uppercase">Restaurant Settings</h5>
            <form class="form mt-5 resto-seeting-form "  action="{{route('web.restaurantProfile.update')}}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class=" form-row mt-5 ">
                    <!-- ////////////////////////// -->
                    <div class=" col-lg-12 col-md-12 col-sm-12 p-1 mt-2  ">
                        <img class="img-fluid" src="{{(asset(auth()->guard('restaurant')->user()->logo))}}" id="defultImg" alt="" width="180" height="180" >
                        <p>choose logo photo</p>
                        <input style="width: 100%;" name="logo" class="up-file" type="file"  id="inpUpload">
                    </div>
                    <!-- ////////////////////////// -->

                    <!-- ////////////////////////// -->
                    <div class=" col-lg-12 col-md-12 col-sm-12 p-1 mt-2  ">
                        <img class="img-fluid" src="{{(asset(auth()->guard('restaurant')->user()->cover))}}" id="defultImg2" alt="" width="180" height="180" >
                        <p>choose cover photo</p>
                        <input style="width: 100%;" class="up-file" type="file" name="cover"  id="inpUpload2">
                    </div>
                    <!-- ////////////////////////// -->

                    <!-- ////////////////////////// -->
                    <div class=" col-lg-6 col-md-12 col-sm-12 p-1 mt-2  ">
                        <input type="text" class="col-lg-12 p-2" name="name" id="validationCustom" value="{{(auth()->guard('restaurant')->user()->name)}}"  placeholder="Restaurant name *">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                        <input type="text" class="col-lg-12 p-2" id="validationCustom" name="phone" value="{{(auth()->guard('restaurant')->user()->phone)}}"  placeholder="Restaurant phone">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                        <input type="text" class="col-lg-12 p-2" id="validationCustom" name="m_name" value="{{(auth()->guard('restaurant')->user()->m_name)}}"  placeholder="Manager Name">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="m_phone" value="{{(auth()->guard('restaurant')->user()->m_phone)}}"  placeholder="Manager Contact phone">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="email" class="col-lg-12 p-2 mb-3" id="validationCustom" name="contact_email" value="{{(auth()->guard('restaurant')->user()->contact_email)}}"  placeholder="Contact Email">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <select class="col-lg-12 p-2 mb-3" name="table_status" id="">
                            <option  value="">booking table *</option>
                            <option value="1" @if(auth()->guard('restaurant')->user()->table_status == 1) selected @endif >yes</option>
                            <option value="0" @if(auth()->guard('restaurant')->user()->table_status == 0) selected @endif>no</option>
                        </select>
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="pickup_fee" value="{{(auth()->guard('restaurant')->user()->pickup_fee)}}"  placeholder="pickup fee">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="pickup_time" value="{{(auth()->guard('restaurant')->user()->pickup_time)}}"  placeholder="pickup time">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="country" value="{{(auth()->guard('restaurant')->user()->country)}}"  placeholder="contry">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="city" value="{{(auth()->guard('restaurant')->user()->city)}}"  placeholder="state city">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="Latitude" value="{{(auth()->guard('restaurant')->user()->Latitude)}}"  placeholder="Latitude ">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" name="Latitude" value="{{(auth()->guard('restaurant')->user()->Latitude)}}"  placeholder="Longitude">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <h6 class="p-2"> if you need to find the addres of your resturant with Longitude and   Latitude click here <a class="text-danger" target="_blank" href="https://www.latlong.net/convert-address-to-lat-long.html"> LatLong.net  </a> </h6>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                        <label for="">Specials</label>
                        <br>
                        <select id="select-cat" style="width: 80%!important;color: #9097a1;" class="mul-select p-3 mt-1 mb-3" multiple="true">
                            <option value="0" selected="selected " > Specials deals</option>
                            <option value="1">A meal on you and a meal on us</option>
                            <option value="2">free pickup</option>
                            <option value="3">first order is free</option>
                            <option value="4">order 3 to get 1 free</option>
                            <option value="5">half price </option>
                        </select>
                    </div> -->

                    <!-- ////////////////////////////////////////// -->

                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                        <label for="">Categories * </label>
                        <br>
                        <select id="select-cat" style="width: 80%!important;color: #9097a1;" class="mul-select p-3 mt-1 mb-3" multiple="true">
                            <option value="0" selected="selected" > food</option>
                            <option value="1" > pizza</option>
                            <option value="2" > Pasta</option>
                            <option value="3" > stakes</option>
                            <option value="4">burgger</option>
                            <option value="5" > Beef Roast</option>
                            <option value="6" >Cheese Burger</option>
                            <option value="7">Chicken </option>
                            <option value="8">Chicken Roast</option>
                            <option value="9">Chines Soup</option>
                            <option value="10">apple pie  </option>
                            <option value="11" > apple juice</option>
                            <option value="12">Carrot Juice</option>
                            <option value="13">coffee</option>

                        </select>
                    </div> -->

                    <!-- ////////////////////////////////////////// -->

                    <div class=" col-lg-12 col-md-12 col-sm-12 p-1 mt-2  ">
                        <textarea class="col-lg-12 p-2"  id="" cols="30" rows="10" name="description">{{(auth()->guard('restaurant')->user()->description)}}</textarea>
                    </div>
                    <!-- ////////////////////////// -->
                </div>
                <button class="btn btn-danger signup-btun  mt-2 p-1 col-lg-2 col-md-2 col-sm-2 mb-3" type="submit">Submit</button>

            </form>

        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->

        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="MENU_BUILDER" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <div class=" col-lg-12 p-0 m-0">

                <div class="tab-pane p-3 active" id="menu_category" role="tabpanel">
                    <div class="d-flex">
                        <div class="font-weight-bolder Extra-category-name"><span>MENU BUILDER  </span> </div>
                        <button type="button" class="ml-auto btn btn-success p-1 rounded menu_category_btn Required-text"
                                data-toggle="modal" data-target="#menu_category_modal"> Add meals </button>
                        <!-- Modal -->
                        <div class="modal fade" id="menu_category_modal" tabindex="-1" role="dialog" aria-labelledby="menu_category_modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add meals</h5>
                                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('web.restaurantProfile.menuadd')}}" method="post">
                                            @method('POST')
                                            @csrf

                                            <div class="form-row">

                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value="" name="name"  placeholder="meal name">

                                                </div>
                                                <!-- ////////////////////////// -->
                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="meal price" name="price">
                                                </div>
                                                <!-- ////////////////////////// -->
                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="meal description" name="description">
                                                </div>
                                                <!-- ////////////////////////// -->
                                            </div>
                                            <button class="btn btn-success rounded menu_category_btn ml-auto mt-2 p-1  mb-3" type="submit"> Add meal </button>


                                            <hr>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /////////////////////////// -->
                    <!-- /////////////////////////// -->
                    <ul class="category-crud mt-5">

                    @foreach(auth()->guard('restaurant')->user()->meals as $meal)

                            <li class="category-row">

                                <div class="d-flex">
                                    <div class="font-weight-bolder Extra-category-name">{{$meal->name}}</div>

                                    <div class="ml-auto  Required-text">

                                        <i type="button" class="text-primary fas fa-edit " data-toggle="modal" data-target="#menu_category_Edit{{$meal->id}}"></i>
                                        <!-- /////////////////////////////////////// -->
                                        <div class="modal fade" id="menu_category_Edit{{$meal->id}}" tabindex="-1" role="dialog" aria-labelledby="menu_category_Edit_Label" aria-hidden="true">

                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">update Meal</h5>
                                                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('web.restaurantProfile.menuupdate' , $meal->id)}}" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="form-row">

                                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value="{{$meal->name}}" name="name" placeholder="update meal name">

                                                                </div>
                                                                <!-- ////////////////////////// -->
                                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value="{{$meal->price}}"  placeholder="update meal price" name="price">
                                                                </div>
                                                                <!-- ////////////////////////// -->
                                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value="{{$meal->description}}"  placeholder="update meal description" name="description">
                                                                </div>
                                                                <!-- ////////////////////////// -->
                                                            </div>
                                                            <button class="btn btn-success rounded menu_category_btn ml-auto mt-2 p-1  mb-3" type="submit"> Add meal </button>

                                                            <hr>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                        <a href="{{route('web.restaurantProfile.menudelete' , $meal->id)}}"><i class=" ml-3 text-danger  fas fa-trash"></i></a>

                                    </div>

                                </div>
                                <hr>
                            </li>

                        @endforeach

                    </ul>
                </div>


            </div>
        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->

        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="Reviews" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h5 class="">REVIEW GIVEN <span style="font-size: 10px;" class=" text-danger"> number of Reviews </span></h5>
            <div class="d-flex">
                <!-- if no reviews display this  -->
                <!-- <div class="mt-3"><h6> ther is no reviews yet </h6></div> -->
            </div>
            <br>
            <div class="">
                <p class="p-in-review"> person that make review</p>
                <h5 class="h5-in-review">review display here </h5>
            </div>
        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="Tables" role="tabpanel" aria-labelledby="v-pills-home-tab">


            <div class=" col-lg-12 p-0 m-0">

                <div class="tab-pane p-3 active" id="menu_category" role="tabpanel">
                    <div class="d-flex">
                        <div class="font-weight-bolder Extra-category-name"><span> table reservation </span> </div>
                        <button type="button" class="ml-auto btn btn-success p-1 rounded menu_category_btn Required-text"
                                data-toggle="modal" data-target="#table_modal"> Add table </button>
                        <!-- Modal -->
                        <div class="modal fade" id="table_modal" tabindex="-1" role="dialog" aria-labelledby="menu_category_modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add meals</h5>
                                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                     <form  class="resto-seeting-form " action="{{route('web.restaurantProfile.tableadd')}}" method="post">
                                            @method('POST')
                                            @csrf
                                            <h5 class=" text-capitalize mt-3"> table reservations </h5>
                                            <div class="row">

                                                    <div class="form-group col-lg-6">
                                                        <input type="number" class="form-control col-lg-12" id="" name="number" placeholder="Table Numbers" required>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="number" class="form-control col-lg-12" id="" name="cap" placeholder=" Table Capacity " required>
                                                    </div>
                                                     <div class="form-group col-lg-6">
                                                        <input type="number" class="form-control col-lg-12" id="" name="price" placeholder=" Table price " required>
                                                    </div>
                                                    <div class="form-group col-lg-6">



                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-danger ml-3 col-lg-3">save</button>
                                                    </div>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /////////////////////////// -->
                    <!-- /////////////////////////// -->


            <table class="table table-striped mt-5 text-center">
                    <thead>
                    <tr>
                        <th scope="col">table Number</th>
                        <th scope="col">table capacity</th>
                        <th scope="col">table  PRICE</th>
                        <th scope="col">  Edit</th>
                        <th scope="col">  Delete</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach(auth()->guard('restaurant')->user()->tables as $meal)
                    <tr>
                        <td>{{$meal->number}}</td>
                        <td>{{$meal->cap}}</td>
                        <td>{{$meal->price}}</td>
                        <td> <i type="button" class="text-primary fas fa-edit " data-toggle="modal" data-target="#menu_category_Edit{{$meal->id}}"></i></td>
                        <td> <a href="{{route('web.restaurantProfile.tabledelete' , $meal->id)}}"><i class=" ml-3 text-danger  fas fa-trash"></i></a> </td>


                    </tr>

                     <!-- /////////////////////////////////////// -->
                                        <div class="modal fade" id="menu_category_Edit{{$meal->id}}" tabindex="-1" role="dialog" aria-labelledby="menu_category_Edit_Label" aria-hidden="true">

                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">update Meal</h5>
                                                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('web.restaurantProfile.tableupdate' , $meal->id)}}" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="row">

                                                                    <div class="form-group col-lg-6">
                                                                        <input type="number" class="form-control col-lg-12" id="" value="{{$meal->number}}"  name="number" placeholder="Table Numbers" required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <input type="number" class="form-control col-lg-12" id="" value="{{$meal->cap}}"  name="cap" placeholder=" Table Capacity " required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">
                                                                        <input type="number" class="form-control col-lg-12" id="" value="{{$meal->price}}"  name="price" placeholder=" Table price " required>
                                                                    </div>
                                                                    <div class="form-group col-lg-6">


                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <button type="submit" class="btn btn-danger ml-3 col-lg-3">save</button>
                                                                    </div>

                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                        @endforeach




                    </tbody>
                </table>


                </div>


            </div>
        </div>



        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="ORDERS" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h3> ORDERS </h3>

            <div class="row tab-text  cart-list">

                <table class="table table-striped  text-center">
                    <thead>
                    <tr>
                        <th scope="col">ORDER ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TOTAL PRICE</th>
                        <th scope="col">DETAIL</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach(auth()->guard('restaurant')->user()->orders()->whereNull("status")->Where("status",1)->get() as $order)
                        <tr>
                            <td>Order-{{$order->id}}</td>
                            <td>{{$order->user->first_name . " " . $order->user->last_name}}</td>
                            <td>{{\Carbon\Carbon::parse($order->Created_at)->format("M d Y")}}</td>
                            <td>{{$order->total}}</td>
                            <td><button  type="button" data-toggle="modal" data-target="#all_ORDERS{{$order->id}}"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                            <!-- Modal -->
                            <div class="modal fade" id="all_ORDERS{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                        <div class="modal-body">
                                            <form class="col-lg-12" action="{{route("web.updateOrder" , $order->id)}}">
                                                <div class="d-flex">
                                                    <ul class="Extra-category-name">
                                                        <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                        <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  {{$order->id}}  </span></li>
                                                        <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> <input type="text" placeholder="Enter PICK UP TIME " > 20 min </span></li>
                                                    </ul>
                                                    <ul class="ml-auto mr-150">
                                                        <h5 class="font-weight-bold">Customer Detail</h5>
                                                        <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  {{$order->user->first_name . " " . $order->user->last_name}} </span>  </li>
                                                        <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> {{$order->user->phone}}</span>  </li>
                                                        <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">{{$order->user->email}}</span> </li>
                                                        <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">{{$order->address}}</span> </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <!-- //////////////////////////////////////////////////////////// -->
                                                <div class="d-flex order-state">
                                                    <div class="col-lg-3">
                                                        <h5 class="font-weight-bold">Order Status
                                                        </h5>
                                                    </div>
                                                    <!-- ////////////////////////////// -->
                                                    <div class="col-lg-9 ">
                                                        <select class="col-lg-9" name="status" id="status">
                                                            <option value="0" @if($order->status == 0) selected @endif> Cancelled </option>
                                                            <option value="1" @if($order->status == 1) selected @endif> Completed </option>
                                                        </select>
                                                        <input class="col-lg-2" type="submit" value="submit" >

                                                    </div>
                                                </div>
                                                <!-- //////////////////////////////////////////////////// -->
                                                <hr>
                                                <div class="mt-4 font-weight-bolder">
                                                    <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                                    <ul>
                                                       
                                                        <li><span> TOTAL: </span>   <span class=" price-span ">{{$order->total}}</span></li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </tr>
                    @endforeach






                    </tbody>
                </table>

            </div>
        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->

        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="BOOKING" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h3> booking </h3>

            <div class="row tab-text  cart-list">

                <table class="table table-striped  text-center">
                    <thead>
                    <tr>
                        <th scope="col">Name </th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone </th>
                        <th scope="col">DETAIL</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Order-25567</td>
                        <td>	March 27, 2021</td>
                        <td>75.71</td>
                        <td>7.57</td>
                        <td><button  type="button" data-toggle="modal" data-target="#all_tables"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                        <!-- Modal -->
                        <div class="modal fade mt-5" id="all_tables" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-style">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>


                                    <div class="modal-body">
                                        <form class="col-lg-12" action="" method="">
                                            <div class="d-flex">
                                                <ul class="Extra-category-name">
                                                    <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                    <li class="mt-2"><span class="restu-detals-span1" >table number:</span><span class="restu-detals-span2">  25504  </span></li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >day:</span><span class="restu-detals-span2">    </span></li>
                                                    <li class="mt-2"><span class="restu-detals-span1" > TIME:</span> <span > from  :   </span> <span>  to :  </span> </li>
                                                </ul>
                                                <ul class="ml-auto mr-150">
                                                    <h5 class="font-weight-bold">Customer Detail</h5>
                                                    <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                </ul>
                                            </div>
                                            <hr>
                                        <!-- //////////////////////////////////////////////////////////// -->
                                            <div class="d-flex order-state">
                                                <div class="col-lg-3">
                                                    <h5 class="font-weight-bold">Order Status
                                                    </h5>
                                                </div>
                                            <!-- ////////////////////////////// -->
                                                <div class="col-lg-9 ">
                                                        <select class="col-lg-9" name="" id="">
                                                            <option > Cancelled </option>
                                                            <option > Completed </option>

                                                        </select>
                                                        <input class="col-lg-2" type="submit" value="submit" >

                                                </div>
                                            </div>
                                        <!-- //////////////////////////////////////////////////// -->

                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </tr>





                    </tbody>
                </table>

            </div>
        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="WITHDRAWALS" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h3> WITHDRAWALS </h3>

            <div class="row tab-text  cart-list">

                <table class="table table-striped  text-center">
                    <thead>
                    <tr>
                        <th scope="col">ORDER ID</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TOTAL PRICE</th>
                        <th scope="col">state</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->guard('restaurant')->user()->orders()->whereNotNull('status')->where("status",0) as $order)
                        <tr>
                            <td>Order-{{$order->id}}</td>
                            <td>{{\Carbon\Carbon::parse($order->Created_at)->format("M d Y")}}</td>
                            <td>{{$order->total}}</td>
                            <td class="cancelled"><span > canceled </span></td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
                        <div class="">
                            <h4> Totl Lose : <span> {{auth()->guard('restaurant')->user()->orders->whereNotNull('status')->where('status' , 0)->sum("total")}}	 </span> </h4>
                        </div>
            </div>

        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="EARNINGS" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <main class=" Earnings-div ">

                <div class="bg-light p-3 earn-price">

                        <!-- <form class="resto-seeting-form" action="">
                    
                                <div class="form-row p-3">
                                    <div class="form-group col-lg-5 ">
                                        <label> From </label>
                                        <input type="date" class="col-lg-12 p-2 mb-3" id="validationCustom" value="" required placeholder=" from  ">
                                    </div>

                                    <div class="form-group col-lg-5 ">
                                        <label> To </label>
                                        <input type="date" class="col-lg-12 p-2 mb-3" id="validationCustom" value="" required placeholder=" from  ">
                                    </div>

                                    <div class="form-group col-lg-2  ">
                                        <label for=""></label>
                                        <button type="submit" class="btn btn-danger col-lg-12  mt-2 ">get </button>
                                    </div>
                                    
                                </div>
                        

                         </form> -->


                    <!-- <form class="resto-seeting-form ">

                        <h5 class=" text-capitalize mt-3"> my money </h5>
                        <div class="row">

                                <div class="form-group col-lg-6 ">
                                    <input type="text" class="form-control col-lg-12 wages " id="" placeholder="Workers' wages" >
                                </div>
                                <div class="form-group col-lg-6 ">
                                    <input type="text" class="form-control col-lg-12 withdrawls " id="" placeholder="Money for the canceled meal" >
                                </div>
                                <div class="form-group col-lg-6 ">
                                    <input type="text" class="form-control col-lg-12 taxes " id="" placeholder=" government taxes " >
                                </div>
                                <br><br>
                                
                        
                                <div class="form-group col-lg-12 ">
                                    <button type="submit" class="btn btn-danger col-lg-3 deduct ">deduct</button>
                                </div>
                        </div>
                    </form> -->



                     


                </div>


                <h3>EARNINGS</h3>


                <table class="table text-center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">DATE</th>
                        <th scope="col">TOTAL SALES</th>
                        <th scope="col">TOTAL EARNINGS</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>March 3, 2021</td>
                        <td>{{auth()->guard('restaurant')->user()->orders->sum("total")}} </td>
                        <td>{{auth()->guard('restaurant')->user()->orders->sum("total") - auth()->guard('restaurant')->user()->orders->where('status' , 0)->sum("total") }}</td>
                    </tr>


                    </tbody>
                </table>





            </main>
        </div>
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="CHANGE_PASSWORD" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <form class="resto-seeting-form ">

                <h5 class=" text-capitalize mt-3"> CHANGE PASSWORD </h5>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" class="form-control col-lg-12" id="exampleInputPassword1" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control col-lg-12" id="exampleInputPassword2" placeholder="new password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control col-lg-12" id="exampleInputPassword3" placeholder="confirm password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger ml-3 ">save</button>

                </div>
            </form>
        </div>
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->









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

                <div class="pr-xl-4"><a class="footer-brand" href="index.html"><h1 style="color: #ffffff;">WAGABAT</h1></a>
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
                <a class="about-link " href="index.html">
                    <h3 class="text-light mt-2" style="font-family: 'La Belle Aurore', cursive!important;"> WAGABAT </h3>
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
                <a class="about-link " href="index.html">
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
                    <dd><a href="mailto:#">WAGABAT@gmail.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>phones:</dt>
                    <dd><a href="tel:1064697587">01064697587</a> <br> <span>or</span> <br> <a href="tel:1143067577">01143067577</a>
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
<script src="/assets/js/plugins/select2.min.js"></script>
<!-- main Styles -->
<script src="/assets/js/custom.js"></script>
<script>

    $(function() {
        $('.dropdown-menu li a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 49
            }, 1000);
            event.preventDefault();
        });
    });

    // //////////////////////////////////////////////////////

    const input=document.querySelector('#inpUpload');
    const img=document.querySelector('#defultImg');
    // ///////////////
    input.addEventListener('change' , function () {
        const uploadFile = input.files[0];
        if (uploadFile) {
            const reader = new FileReader();
            reader.addEventListener('load' , function () {
                img.setAttribute('src' , reader.result);
            });
            reader.readAsDataURL(uploadFile);
        } else{
            img.setAttribute('src' , '');

        }

    });




            window.onpageshow = function() {
                $('#select-cat').select2({
                    allowClear: true,
                    placeholder: 'Select a month'
                });
            };

</script>



</body>
</html>
