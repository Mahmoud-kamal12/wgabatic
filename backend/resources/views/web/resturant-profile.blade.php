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
                            <img class="" src="/assets/photos/imgs/kfc.jpg" width="80" height="80"  alt="">
                        </div>
                        <div class=" p-3 text-light mt-4">
                            <h4 class="text-left">Kfc – Kentucky</h4>
                            <p>  <i class="fas fa-pizza-slice"></i> Hot Dogs, Pizza & Stakes</p>
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
                    <a class="  nav-link py-2 p-2  " data-toggle="modal" data-target="#DELETE-profile" id="v-pills-settings-tab"href="#delete_profile" role="tab">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-trash-alt mr-3"></i>  DELETE PROFILE</span></a>
                    <!-- ///////////////////////////////////////////////// -->
                    <!-- Modal -->
                    <div class="modal fade" id="DELETE-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog pop-up-body " role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <i class="fas fa-frown-open"></i>
                                    <h4 class="delete-message mt-3">You Want To Delete?!!</h4>
                                    <div class="row justify-content-center align-items-center">
                                        <button class="yes-del btn p-1 pl-3 pr-3 mr-2" > Yes, delete </button>
                                        <button class=" cancle-del btn p-1 pl-3 pr-3 ml-2" data-dismiss="modal"> no, cancle </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ////////////////////////////////////////////////// -->
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " href="#!"  id="v-pills-settings-tab"  aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark  font-weight-bold small text-uppercase"><i class=" fas fa-sign-out-alt mr-3 "></i>  SIGN OUT</span></a>

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

                        <h4>RECENT ORDERS</h4>
                        <div class="row tab-text  cart-list">
                            <table class="table scroll-x-table text-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col"> ORDER ID</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">TOTAL PRICE</th>
                                    <th scope="col">CHARGES	</th>
                                    <th scope="col">RECEIVED</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">DETAIL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-3-2020</td>
                                    <td>£77.97</td>
                                    <td>£7.80	</td>
                                    <td>£70.17</td>
                                    <td class="processing"> <span>processing</span> </td>
                                    <td><button  type="button" data-toggle="modal" data-target="#RECENT_ORDERS"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="RECENT_ORDERS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content modal-style">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="d-flex">
                                                        <ul class="Extra-category-name">
                                                            <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                            <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  25504  </span></li>
                                                            <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> 40 Minutes</span></li>
                                                            <li class="mt-2"> <span class="restu-detals-span1" >TYPE:</span><span class="restu-detals-span2">order</span>  </li>
                                                            <li class="mt-2"><span class="restu-detals-span1" >PAYMENT STATUS:</span><span class="restu-detals-span2">Pending</span>  </li>
                                                        </ul>
                                                        <ul class="ml-auto mr-150">
                                                            <h5 class="font-weight-bold">Customer Detail</h5>
                                                            <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                            <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                            <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                            <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">benha - egypt</span> </li>
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
                                                            <form class="col-lg-12" action="" method="">
                                                                <select class="col-lg-12" name="" id="">
                                                                    <option > Processing </option>
                                                                    <option > Cancelled </option>
                                                                    <option > Completed </option>
                                                                    <option > Awaiting Payment </option>
                                                                    <option > Payment Received </option>
                                                                    <option > Expired </option>
                                                                    <option > Awaiting Pickup </option>
                                                                    <option > Dispatched </option>
                                                                    <option > Shipped </option>
                                                                </select>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- //////////////////////////////////////////////////// -->
                                                    <hr>
                                                    <div class="mt-4 font-weight-bolder">
                                                        <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                                        <ul>
                                                            <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                            <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                            <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                            <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        </tr>
                        <!-- /////////////////////////////////////////////////////////////////////// -->
                        <!-- /////////////////////////////////////////////////////////////////////// -->
                        <!-- /////////////////////////////////////////////////////////////////////// -->
                        <!-- /////////////////////////////////////////////////////////////////////// -->
                        <!-- /////////////////////////////////////////////////////////////////////// -->
                        <!-- /////////////////////////////////////////////////////////////////////// -->
                        <tr>
                            <td>2</td>
                            <td>12-3-2020</td>
                            <td>£77.97</td>
                            <td>£7.80	</td>
                            <td>£70.17</td>
                            <td class="processing"> <span>Awaiting Payment</span> </td>
                            <td><button  type="button" data-toggle="modal" data-target="#RECENT_ORDERS2"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                            <!-- Modal -->
                            <div class="modal fade" id="RECENT_ORDERS2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content modal-style">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-flex">
                                                <ul class="Extra-category-name">
                                                    <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                    <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  25504  </span></li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> 40 Minutes</span></li>
                                                    <li class="mt-2"> <span class="restu-detals-span1" >TYPE:</span><span class="restu-detals-span2">order</span>  </li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >PAYMENT STATUS:</span><span class="restu-detals-span2">Pending</span>  </li>
                                                </ul>
                                                <ul class="ml-auto mr-150">
                                                    <h5 class="font-weight-bold">Customer Detail</h5>
                                                    <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                    <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">benha - egypt</span> </li>
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
                                                    <form class="col-lg-12" action="" method="">
                                                        <select class="col-lg-12" name="" id="">
                                                            <option > Processing </option>
                                                            <option > Cancelled </option>
                                                            <option > Completed </option>
                                                            <option > Awaiting Payment </option>
                                                            <option > Payment Received </option>
                                                            <option > Expired </option>
                                                            <option > Awaiting Pickup </option>
                                                            <option > Dispatched </option>
                                                            <option > Shipped </option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- //////////////////////////////////////////////////// -->
                                            <hr>
                                            <div class="mt-4 font-weight-bolder">
                                                <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                                <ul>
                                                    <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                    <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                    <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                    <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </tr>

                    <!-- /////////////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////////////// -->
                    <tr>
                        <td>3</td>
                        <td>12-3-2020</td>
                        <td>£77.97</td>
                        <td>£7.80	</td>
                        <td>£70.17</td>
                        <td class="processing"> <span>Cancelled</span> </td>
                        <td><button  type="button" data-toggle="modal" data-target="#RECENT_ORDERS3"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                        <!-- Modal -->
                        <div class="modal fade" id="RECENT_ORDERS3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-style">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex">
                                            <ul class="Extra-category-name">
                                                <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  25504  </span></li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> 40 Minutes</span></li>
                                                <li class="mt-2"> <span class="restu-detals-span1" >TYPE:</span><span class="restu-detals-span2">order</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PAYMENT STATUS:</span><span class="restu-detals-span2">Pending</span>  </li>
                                            </ul>
                                            <ul class="ml-auto mr-150">
                                                <h5 class="font-weight-bold">Customer Detail</h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">benha - egypt</span> </li>
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
                                                <form class="col-lg-12" action="" method="">
                                                    <select class="col-lg-12" name="" id="">
                                                        <option > Processing </option>
                                                        <option > Cancelled </option>
                                                        <option > Completed </option>
                                                        <option > Awaiting Payment </option>
                                                        <option > Payment Received </option>
                                                        <option > Expired </option>
                                                        <option > Awaiting Pickup </option>
                                                        <option > Dispatched </option>
                                                        <option > Shipped </option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="mt-4 font-weight-bolder">
                                            <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                            <ul>
                                                <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                            </ul>
                                        </div>

                                    </div>
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
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="MY_RESTAURANT" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h5 class="modal-title text-uppercase">Restaurant Settings</h5>
            <form class="form mt-5 resto-seeting-form " >
                <div class=" form-row mt-5 ">
                    <!-- ////////////////////////// -->
                    <div class=" col-lg-12 col-md-12 col-sm-12 p-1 mt-2  ">
                        <img class="img-fluid" src="/assets/photos/imgs/kfc-1-1.png" id="defultImg" alt="" width="180" height="180" >
                        <p>choose logo photo</p>
                        <input style="width: 100%;" class="   up-file" type="file"  id="inpUpload">
                    </div>
                    <!-- ////////////////////////// -->

                    <!-- ////////////////////////// -->
                    <div class=" col-lg-12 col-md-12 col-sm-12 p-1 mt-2  ">
                        <img class="img-fluid" src="/assets/photos/kfc-meal.png" id="defultImg2" alt="" width="180" height="180" >
                        <p>choose cover photo</p>
                        <input style="width: 100%;" class="    up-file" type="file"  id="inpUpload2">
                    </div>
                    <!-- ////////////////////////// -->

                    <!-- ////////////////////////// -->
                    <div class=" col-lg-6 col-md-12 col-sm-12 p-1 mt-2  ">
                        <input type="email" class="col-lg-12 p-2" id="validationCustom" value=""  placeholder="Restaurant name *">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                        <input type="text" class="col-lg-12 p-2" id="validationCustom" value=""  placeholder="Restaurant phone">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                        <input type="text" class="col-lg-12 p-2" id="validationCustom" value=""  placeholder="Manager Name">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="Manager Contact phone">
                    </div>
                    <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="email" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="Contact Email">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <select class="col-lg-12 p-2 mb-3" name="" id="">
                            <option  value="">booking table *</option>
                            <option value="">yes</option>
                            <option value="">no</option>
                        </select>
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="pickup fee">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="pickup time">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="contry">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="state city">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="Latitude ">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                        <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="Longitude">
                    </div>

                    <!-- ////////////////////////////////////////// -->
                    <h6 class="p-2"> if you need to find the addres of your resturant with Longitude and   Latitude click here <a class="text-danger" href="https://www.latlong.net/convert-address-to-lat-long.html"> LatLong.net  </a> </h6>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
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
                    </div>

                    <!-- ////////////////////////////////////////// -->

                    <div class="col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
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
                    </div>

                    <!-- ////////////////////////////////////////// -->

                    <div class=" col-lg-12 col-md-12 col-sm-12 p-1 mt-2  ">
                        <textarea class="col-lg-12 p-2" name="" id="" cols="30" rows="10"></textarea>
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
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
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
                                        <form action="">
                                            <div class="form-row">
                                                <!-- ////////////////////////////////////////// -->
                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                                                    <select id="select-cat"  class=" col-lg-12 p-2 mb-3" >
                                                        <option value="0" selected="selected" > select meal category</option>
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
                                                </div>
                                                <!-- ////////////////////////// -->
                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="meal name">

                                                </div>
                                                <!-- ////////////////////////// -->
                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="meal price">
                                                </div>
                                                <!-- ////////////////////////// -->
                                                <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                    <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="meal description">
                                                </div>
                                                <!-- ////////////////////////// -->
                                            </div>
                                            <button class="btn btn-success rounded menu_category_btn ml-auto mt-2 p-1  mb-3" type="submit"> Add meal </button>
                                            <button class="btn btn-success rounded menu_category_btn ml-auto mt-2 p-1  mb-3" type="submit"> Add all </button>

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

                        <li class="category-row">

                            <div class="d-flex">
                                <div class="font-weight-bolder Extra-category-name">the meal Name </div>
                                <div class="ml-auto  Required-text">

                                    <i type="button" class="text-primary fas fa-edit " data-toggle="modal" data-target="#menu_category_Edit" ></i>



                                    <!-- Modal -->
                                    <div class="modal fade" id="menu_category_Edit" tabindex="-1" role="dialog" aria-labelledby="menu_category_Edit_Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">update category</h5>
                                                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-row">
                                                            <!-- ////////////////////////////////////////// -->
                                                            <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                                                                <select id="select-cat"  class=" col-lg-12 p-2 mb-3" >
                                                                    <option value="0" selected="selected" > update meal category</option>
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
                                                            </div>
                                                            <!-- ////////////////////////// -->
                                                            <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                                <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="update meal name">

                                                            </div>
                                                            <!-- ////////////////////////// -->
                                                            <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2">
                                                                <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="update meal price">
                                                            </div>
                                                            <!-- ////////////////////////// -->
                                                            <div class=" col-lg-6 col-md-6 col-sm-12 p-1 mt-2  ">
                                                                <input type="text" class="col-lg-12 p-2 mb-3" id="validationCustom" value=""  placeholder="update meal description">
                                                            </div>
                                                            <!-- ////////////////////////// -->
                                                        </div>
                                                        <button class="btn btn-success rounded menu_category_btn ml-auto mt-2 p-1  mb-3" type="submit"> Add meal </button>
                                                        <button class="btn btn-success rounded menu_category_btn ml-auto mt-2 p-1  mb-3" type="submit"> Add all </button>

                                                        <hr>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /////////////////////////////////////// -->

                                    <i class=" ml-3 text-danger  fas fa-trash"></i>

                                </div>

                            </div>
                            <hr>
                        </li>



                    </ul>
                </div>


            </div>
        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// --><!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="ORDERS" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h3> ORDERS </h3>

            <div class="row tab-text  cart-list">

                <table class="table table-striped  text-center">
                    <thead>
                    <tr>
                        <th scope="col">ORDER ID</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TOTAL PRICE</th>
                        <th scope="col">CHARGES</th>
                        <th scope="col">RECEIVED</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">DETAIL</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Order-25567</td>
                        <td>	March 27, 2021</td>
                        <td>£75.71</td>
                        <td>£7.57</td>
                        <td>£68.14</td>
                        <td class="processing" ><span>Processing</span></td>
                        <td><button  type="button" data-toggle="modal" data-target="#all_ORDERS1"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                        <!-- Modal -->
                        <div class="modal fade" id="all_ORDERS1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-style">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex">
                                            <ul class="Extra-category-name">
                                                <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  25504  </span></li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> 40 Minutes</span></li>
                                                <li class="mt-2"> <span class="restu-detals-span1" >TYPE:</span><span class="restu-detals-span2">order</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PAYMENT STATUS:</span><span class="restu-detals-span2">Pending</span>  </li>
                                            </ul>
                                            <ul class="ml-auto mr-150">
                                                <h5 class="font-weight-bold">Customer Detail</h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">benha - egypt</span> </li>
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
                                                <form class="col-lg-12" action="" method="">
                                                    <select class="col-lg-12" name="" id="">
                                                        <option > Processing </option>
                                                        <option > Cancelled </option>
                                                        <option > Completed </option>
                                                        <option > Awaiting Payment </option>
                                                        <option > Payment Received </option>
                                                        <option > Expired </option>
                                                        <option > Awaiting Pickup </option>
                                                        <option > Dispatched </option>
                                                        <option > Shipped </option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="mt-4 font-weight-bolder">
                                            <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                            <ul>
                                                <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </tr>
                    <!-- ///////////////////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////////////////// -->

                    <tr>
                        <td>Order-25567</td>
                        <td>	March 27, 2021</td>
                        <td>£75.71</td>
                        <td>£7.57</td>
                        <td>£68.14</td>
                        <td class="processing" ><span>Processing</span></td>
                        <td><button  type="button" data-toggle="modal" data-target="#all_ORDERS2"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                        <!-- Modal -->
                        <div class="modal fade" id="all_ORDERS2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-style">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex">
                                            <ul class="Extra-category-name">
                                                <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  25504  </span></li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> 40 Minutes</span></li>
                                                <li class="mt-2"> <span class="restu-detals-span1" >TYPE:</span><span class="restu-detals-span2">order</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PAYMENT STATUS:</span><span class="restu-detals-span2">Pending</span>  </li>
                                            </ul>
                                            <ul class="ml-auto mr-150">
                                                <h5 class="font-weight-bold">Customer Detail</h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">benha - egypt</span> </li>
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
                                                <form class="col-lg-12" action="" method="">
                                                    <select class="col-lg-12" name="" id="">
                                                        <option > Processing </option>
                                                        <option > Cancelled </option>
                                                        <option > Completed </option>
                                                        <option > Awaiting Payment </option>
                                                        <option > Payment Received </option>
                                                        <option > Expired </option>
                                                        <option > Awaiting Pickup </option>
                                                        <option > Dispatched </option>
                                                        <option > Shipped </option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="mt-4 font-weight-bolder">
                                            <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                            <ul>
                                                <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>                     </tr>
                    <tr>
                        <td>Order-25567</td>
                        <td>	March 27, 2021</td>
                        <td>£75.71</td>
                        <td>£7.57</td>
                        <td>£68.14</td>
                        <td class="processing" ><span>Processing</span></td>
                        <td><button  type="button" data-toggle="modal" data-target="#all_ORDERS3"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                        <!-- Modal -->
                        <div class="modal fade" id="all_ORDERS3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-style">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-uppercase " id="exampleModalLabel">Order Detail</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex">
                                            <ul class="Extra-category-name">
                                                <h5 class="font-weight-bold">Kfc – Kentucky </h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >ORDER ID:</span><span class="restu-detals-span2">  25504  </span></li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PICK UP TIME:</span> <span class="restu-detals-span2"> 40 Minutes</span></li>
                                                <li class="mt-2"> <span class="restu-detals-span1" >TYPE:</span><span class="restu-detals-span2">order</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PAYMENT STATUS:</span><span class="restu-detals-span2">Pending</span>  </li>
                                            </ul>
                                            <ul class="ml-auto mr-150">
                                                <h5 class="font-weight-bold">Customer Detail</h5>
                                                <li class="mt-2"><span class="restu-detals-span1" >NAME :</span><span class="restu-detals-span2">  mostafa emad  </span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >PHONE NUMBER :</span><span class="restu-detals-span2"> 01064691587</span>  </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >EMAIL:</span> <span class="restu-detals-span2">mostafa.emad@gmail.com</span> </li>
                                                <li class="mt-2"><span class="restu-detals-span1" >ADDRESS:</span><span class="restu-detals-span2">benha - egypt</span> </li>
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
                                                <form class="col-lg-12" action="" method="">
                                                    <select class="col-lg-12" name="" id="">
                                                        <option > Processing </option>
                                                        <option > Cancelled </option>
                                                        <option > Completed </option>
                                                        <option > Awaiting Payment </option>
                                                        <option > Payment Received </option>
                                                        <option > Expired </option>
                                                        <option > Awaiting Pickup </option>
                                                        <option > Dispatched </option>
                                                        <option > Shipped </option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //////////////////////////////////////////////////// -->
                                        <hr>
                                        <div class="mt-4 font-weight-bolder">
                                            <h5 class="text-uppercase font-weight-bolder">Order Total</h5>
                                            <ul>
                                                <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                            </ul>
                                        </div>

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
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="WITHDRAWALS" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h1>Pending</h1>

        </div>

        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="EARNINGS" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <main class=" Earnings-div ">

                <div class="bg-light p-3 earn-price">

                    <div class="d-flex mt-3">
                        <div class="">Earnings of this month is: </div>
                        <div class="ml-auto font-weight-bolder "> £0.00 </div>
                    </div>
                    <!-- /////////////// -->
                    <div class="d-flex mt-3">
                        <div class="">Total Withdrawal of current month: </div>
                        <div class="ml-auto font-weight-bolder "> £0.00 </div>
                    </div>
                    <!-- /////////////// -->
                    <div class="d-flex mt-3">
                        <div class=""> Remaining balance (After withdrawal of current month): </div>
                        <div class="ml-auto font-weight-bolder "> £0.00 </div>
                    </div>
                    <!-- /////////////// -->
                    <div class="d-flex mt-3">
                        <div class="">Total sale price of this Month:</div>
                        <div class="ml-auto font-weight-bolder "> £0 </div>
                    </div>
                    <!-- /////////////// -->


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
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 4, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 5, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 6, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 7, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 8, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 9, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 10, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 11, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 12, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 13, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 14, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>
                    <tr>
                        <td>March 15, 2021</td>
                        <td>£0.00</td>
                        <td>£0.00</td>
                    </tr>

                    </tbody>
                </table>





            </main>
        </div>
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <!-- /////////////////////////////////////////////////////////////// -->
        <div class="tab-pane fade shadow rounded bg-white show  p-5" id="CHANGE_PASSWORD" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <form>

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

                <div class="pr-xl-4"><a class="footer-brand" href="index.html"><h1 style="color: #ffffff;">TAKE AWAY</h1></a>
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
                    <dd><a href="mailto:#">TAKE_AWAY@gmail.com</a></dd>
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
            <h6 class="mt-3 ml-3 ">Copyright ©2020 All rights reserved | This template is  made  by <a href="https://www.facebook.com/mostafa.emadgomaa">HTI STUDENT </a>  </h6>
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
<script src="/assets/js/multi select.js"></script>
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



    x

</script>



</body>
</html>
