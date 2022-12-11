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
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/userProfile.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> | user profile | </title>

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


<section class="profile-banner">

    @include('web.nav')

    <div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-sm-12 text-center welcomeTexte">
                    <div class=" text-white text-center mt-5 ">
                        <h2 class="display-3"> Welcome Mostafa  </h2>
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
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-cog mr-3 "></i>  dashbord</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-profile-tab" data-toggle="pill" href="#Mybooking" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-list mr-3  "></i>  Mybooking</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#Reviews" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fas fa-comment-dots mr-3 "></i>  my Reviews</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-messages-tab" data-toggle="pill" href="#My_orderd" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="  fa fa-shopping-cart mr-3  "></i>  My orderd</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-settings-tab" data-toggle="pill" href="#Statementas" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-list-alt mr-3 "></i>  Statementas</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " id="v-pills-settings-tab" data-toggle="pill" href="#Account_Setting" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-user-cog mr-3 "></i>  Account Setting</span></a>
                    <hr class="p-0 m-0">
                     <a class="  nav-link py-2 p-2  " id="v-pills-settings-tab" data-toggle="pill" href="#change_password" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class=" text-dark font-weight-bold small text-uppercase" id="click_password" ><i class="fa fa-user-cog mr-3 "></i>  change password</span></a>
                    <hr class="p-0 m-0">
                    <a class="  nav-link py-2 p-2  " data-toggle="modal" data-target="#exampleModal"  id="v-pills-settings-tab"href="#delete_profile" role="tab">
                        <span class=" text-dark font-weight-bold small text-uppercase"><i class="fa fa-trash-alt mr-3"></i>  delete profile</span></a>
                    <!-- ///////////////////////////////////////////////// -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <span class=" text-dark  font-weight-bold small text-uppercase"><i class=" fas fa-sign-out-alt mr-3 "></i>  Sign-out</span></a>

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
                            <div  class="col-lg-10 ml-auto m-auto dashbord-bac  text-white ">
                                <div class="welcomed-text p-2">
                                    <h3 class="mt-3">welcome to your account</h3>
                                    <p  class="mt-4">my account gives you a quick access to settings and tools for mangining your account like
                                        [changing address] and [changing password] . you can manage orderds booking and statement and may more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <div class="tab-pane fade shadow rounded bg-white show  p-5" id="Mybooking" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <h4>MY BOOKINGS</h4>
                        <div class="row tab-text  cart-list">
                            <table class="table">
                                <thead class="thead-dark">
                                
                                    <th scope="col">#</th>
                                    <th scope="col">Resturant name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">status</th>
                                    <th scope="col">details</th>
                               
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MCDONALDS</td>
                                    <td>january 5,2021</td>
                                    <td class="processing"> <span>processing</span> </td>
                                    <td><button  type="button" data-toggle="modal" data-target="#exampleModal-order-1"  class="order-btn border border-dark"> <i class="fa fa-plus text-dark mt-1"></i> </button></td>
                                </tr>   
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-order-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-uppercase " id="exampleModalLabel">Booking Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <h4 class="  model-name text-uppercase mt-2" >RESTURANT NAME</h4>
                                                    <ul class="ml-2">
                                                        <li class=" mt-2 modal-order-data">
                                                            <span class="first-span">Booking id :</span>
                                                            <span class="ml-1 second-span">((the meal id))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">Booking date :</span>
                                                            <span class="ml-1 second-span">((date and time))</span>
                                                        </li >
                                                    </ul>


                                                    <hr>
                                                    <h4 class=" model-name text-uppercase mt-2" >Customer Deatil</h4>
                                                    <ul class="ml-2">
                                                        <li class=" mt-2 modal-order-data">
                                                            <span class="first-span">FIRST NAME:</span>
                                                            <span class="ml-1 second-span">((the first person name))</span>
                                                        </li >
                                                        <li class=" mt-2 modal-order-data">
                                                            <span class="first-span">LAST NAME:</span>
                                                            <span class="ml-1 second-span">((the last name))</span>
                                                        </li >
                                                        <li class=" mt-2 modal-order-data">
                                                            <span class="first-span"> EMAIL:</span>
                                                            <span class="ml-1 second-span">((the Email EX :cashitebay@gmail.com ))</span>
                                                        </li >
                                                    </ul>

                                                    <div class="text-center mt-5 ">
                                                        <button class=" btn btn-primary p-2 "> Your booking is Processing </button>
                                                    </div>


                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                            </div>
                                        </div>
                                    </div>
                       
  
                                </tbody>
                            </table>



                        </div>
                    </div>

     
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <div class="tab-pane fade shadow rounded bg-white show  p-5" id="Reviews" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h5 class="">REVIEW GIVEN <span style="font-size: 10px;" class=" text-danger"> number of Reviews </span></h5>
                        <div class="d-flex">
                            <div class="mt-3"><h6>post dose not exist . </h6></div>
                            <div class="mt-3">
                                <i style=" right:100px; color: rgb(221, 252, 47);  " class="fa fa-star"></i>
                                <i style=" right: 80px; color: rgb(221, 252, 47);  " class="fa fa-star "></i>
                                <i style=" right: 60px; color: rgb(221, 252, 47);  " class="fa fa-star "></i>
                                <i style=" right: 40px; color: rgb(221, 252, 47);  " class="fa fa-star "></i>
                                <i style=" right: 20px; color: rgb(221, 252, 47);  " class="fa fa-star "></i>
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <p class="p-in-review">2 monthes ago</p>
                            <h5 class="h5-in-review"> awesome delicious foody experience!  </h5>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <div class="tab-pane fade shadow rounded bg-white show  p-5" id="My_orderd" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h5 class="">MY ORDERS</h5>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 p-3">
                                <div class=" p-3 order-border">
                                    <div class="d-flex">
                                        <div class=""><img class=" " src="/assets/photos/imgs/mcdonals-1-1.png" width="50px" height="50px" alt=""></div>
                                        <div class="ml-3 mt-1"><strong> mcdonalds </strong>  <br> <p class="p-in-order"> breakfast-takeaway </p></div>
                                        <div class=" text-danger"><p class="ml-5"> $80.66 </p></div>
                                    </div>

                                    <hr>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, repudiandae.</p>
                                        <p class="p-in-review">Feb 10,2021 11:46 AM</p>
                                    </div>
                                    <button  type="button" data-toggle="modal" data-target="#staticBackdrop" class=" order_Details_btn  bg-danger rounded-pill text-white"> ORDER DETAILS  </button>
                                    <!-- Button trigger modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content orderD-modal-content ">
                                                <div class="modal-header">
                                                    <h2 class="modal-title text-uppercase" id="staticBackdropLabel">Order Detail</h2>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <hr>
                                                <!-- /////////////////////////////////////////////////////// -->
                                                <div class="modal-body">
                                                    <h4 class="  model-name text-uppercase mt-2" >RESTURANT NAME</h4>
                                                    <ul class="ml-2">
                                                        <li class=" mt-2 modal-order-data">
                                                            <span class="first-span">Booking id :</span>
                                                            <span class="ml-1 second-span">((the meal id EX 25543))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">PICK UP TIME :</span>
                                                            <span class="ml-1 second-span">((time of preparing order Ex :40 Minutes   ))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">DELIVERY DATE :</span>
                                                            <span class="ml-1 second-span">((date and time EX Mar 19, 2021 04:15 PM ))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">PAYMENT STATUS :</span>
                                                            <span class="ml-1 second-span">((state of order price Ex Pending ))</span>
                                                        </li >
                                                    </ul>

                                                    <div class="text-left mt-5 w-100">
                                                        <button class=" btn btn-primary p-2 "> Your booking is Processing </button>
                                                    </div>

                                                    <hr>

                                                    <h4 class="  model-name text-uppercase mt-2" >Food Menu</h4>
                                                    <table class="table ">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">PRODUCTS</th>
                                                            <th scope="col">PRICE PER</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-bolder">Pizza</span>
                                                                <ul>
                                                                    <li>Foodbakery Special Pizza</li>
                                                                    <li> Sausages - Spicy Mayonnaise : <span class="extra_order_Price"> £1.00 </span> </li>
                                                                    <li>Sausages - Tequila Lime Sauce : <span class="extra_order_Price"> £0.00 </span> </li>
                                                                    <li>Extra Topping - Pepperoni : <span class="extra_order_Price"> £0.00 </span> </li>
                                                                    <li>Extra Topping - Tuna : <span class="extra_order_Price"> £3.00 </span> </li>
                                                                    <li>Extra Topping - Sweet Corn : <span class="extra_order_Price"> £1.00 </span> </li>
                                                                    <li> Cold Drink - Cocktail : <span class="extra_order_Price"> £2.00 </span> </li>
                                                                </ul>
                                                            </td>
                                                            <td class="font-weight-bolder">50$</td>

                                                        </tr>


                                                        </tbody>
                                                    </table>

                                                    <hr>
                                                    <div class="mt-4">
                                                        <h5 class="text-uppercase">Order Total</h5>
                                                        <ul>
                                                            <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                            <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                            <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                            <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /////////////////////////////////////////////////////// -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //////////////////////////////////////////// -->
                            <!-- //////////////////////////////////////////// -->
                            <!-- //////////////////////////////////////////// -->
                            <!-- //////////////////////////////////////////// -->
                            <div class="col-lg-6 p-3">
                                <div class=" p-3 order-border">
                                    <div class="d-flex">
                                        <div class=""><img class=" " src="/assets/photos/imgs/kfc-1-1.png" width="50px" height="50px" alt=""></div>
                                        <div class="ml-3 mt-1"><strong> kentucky </strong>  <br> <p class="p-in-order"> dinner-takeaway </p></div>
                                        <div class=" text-danger"><p class="ml-5"> $20.89 </p></div>
                                    </div>

                                    <hr>
                                    <div class="">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, repudiandae.</p>
                                        <p class="p-in-review">Feb 28,2021 1:55 AM</p>
                                    </div>
                                    <button  type="button" data-toggle="modal" data-target="#staticBackdrop2" class=" order_Details_btn  bg-danger rounded-pill text-white"> ORDER DETAILS  </button>
                                    <!-- Button trigger modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content orderD-modal-content ">
                                                <div class="modal-header">
                                                    <h2 class="modal-title text-uppercase" id="staticBackdropLabel">Order Detail</h2>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <hr>
                                                <!-- /////////////////////////////////////////////////////// -->
                                                <div class="modal-body">
                                                    <h4 class="  model-name text-uppercase mt-2" >RESTURANT NAME</h4>
                                                    <ul class="ml-2">
                                                        <li class=" mt-2 modal-order-data">
                                                            <span class="first-span">Booking id :</span>
                                                            <span class="ml-1 second-span">((the meal id EX 25543))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">PICK UP TIME :</span>
                                                            <span class="ml-1 second-span">((time of preparing order Ex :40 Minutes   ))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">DELIVERY DATE :</span>
                                                            <span class="ml-1 second-span">((date and time EX Mar 19, 2021 04:15 PM ))</span>
                                                        </li >
                                                        <li class=" mt-2  modal-order-data">
                                                            <span class="first-span">PAYMENT STATUS :</span>
                                                            <span class="ml-1 second-span">((state of order price Ex Pending ))</span>
                                                        </li >
                                                    </ul>

                                                    <div class="text-left mt-5 w-100">
                                                        <button class=" btn btn-primary p-2 "> Your booking is Processing </button>
                                                    </div>

                                                    <hr>

                                                    <h4 class="  model-name text-uppercase mt-2" >Food Menu</h4>
                                                    <table class="table ">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">PRODUCTS</th>
                                                            <th scope="col">PRICE PER</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="font-weight-bolder">Pizza</span>
                                                                <ul>
                                                                    <li>Foodbakery Special Pizza</li>
                                                                    <li> Sausages - Spicy Mayonnaise : <span class="extra_order_Price"> £1.00 </span> </li>
                                                                    <li>Sausages - Tequila Lime Sauce : <span class="extra_order_Price"> £0.00 </span> </li>
                                                                    <li>Extra Topping - Pepperoni : <span class="extra_order_Price"> £0.00 </span> </li>
                                                                    <li>Extra Topping - Tuna : <span class="extra_order_Price"> £3.00 </span> </li>
                                                                    <li>Extra Topping - Sweet Corn : <span class="extra_order_Price"> £1.00 </span> </li>
                                                                    <li> Cold Drink - Cocktail : <span class="extra_order_Price"> £2.00 </span> </li>
                                                                </ul>
                                                            </td>
                                                            <td class="font-weight-bolder">50$</td>

                                                        </tr>


                                                        </tbody>
                                                    </table>

                                                    <hr>
                                                    <div class="mt-4">
                                                        <h5 class="text-uppercase">Order Total</h5>
                                                        <ul>
                                                            <li><span> SUBTOTAL: </span>   <span class=" price-span ">£57.00</span></li>
                                                            <li><span>PICK UP FEE: </span>   <span class=" price-span ">£10.00</span></li>
                                                            <li><span> VAT (13%): </span>   <span class=" price-span ">£8.71</span></li>
                                                            <li><span> TOTAL: </span>   <span class=" price-span ">£75.71</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /////////////////////////////////////////////////////// -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <div class="tab-pane fade shadow rounded bg-white show  p-5" id="Statementas" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <h4 class="text-uppercase">Statementas</h4>
                        <div class="row cart-list">
                            <table class="table text-center">
                                <thead class="thead-light">

                                    <th scope="col">TRANSACTION ID</th>
                                    <th scope="col">ORDER ID</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">DETAIL</th>
                                    <th scope="col">AMOUNT</th>

                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"> #1234   <!-- رقم المعامله -->  </th>
                                    <td> 2233   <!-- رقم الطلب --></td>
                                    <td>january 5,2021 <!-- التاريخ --> </td>
                                    <td> <span> order - mcdonalds   <!-- اسم المطعم و الطلب -->  </span> </td>
                                    <td><span> $54.16 </span></td>
                                </tr>
                               
                                </tbody>
                            </table>



                        </div>
                    </div>

                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <div class="tab-pane fade shadow rounded bg-white show  p-5" id="Account_Setting" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h5>ACCOUNT SETTING</h5>
                        <form class="User-Seting-Form">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <input value="{{$user->first_name}}"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone" required>
                                    </div>


                                </div>
                                <div class="col-lg-6">
                                    <div class="p-3 row justify-content-center align-items-center">
                                        <img class="img-fluid " src="/assets/photos/avatar-icon-images-4.jpg" id="defultImg" alt="" width="180" height="180" >
                                        <input class="mt-3 ml-5  up-file" type="file"  id="inpUpload">
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
                    <!-- /////////////////////////////////////////////////////////////// -->
           <!-- ///// ////////////////////////////////////////////////////////// -->
           <!-- /////////////////////////////////////////////////////////////// -->
           <!-- /////////////////////////////////////////////////////////////// -->
         
           <div class="tab-pane fade shadow rounded bg-white show  p-5" id="change_password" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h5>CHANGE PASSWORD</h5>
         
            <div id="myF" class="row">
              <form class="User-Seting-Form"   id="myForm2" action=" " method="POST">
            <div class="col-lg-12">

              <div class="form-group">
                <input type="password" class="form-control col-lg-12" name="password" id="exampleInputPassword1" placeholder="Old Password" >
                <h4 class="mt-3" id="server_err_password" style="text-align: center;">  </h4>
              </div>

              <div class="form-group">  
                <input type="password" class="form-control col-lg-12" name="newPassword" id="exampleInputPassword2" placeholder="New Password">
              </div>

              <div class="form-group">
                <input type="password" class="form-control col-lg-12" name="confirmNewPassword" id="exampleInputPassword3" placeholder="Confirm Password" >
              </div>
           
            </div>
            
              <button type="submit" class="btn btn-danger ml-3">Submit</button>

            </div>
          </form>
          </form>
          </div>
          <!-- /////////////////////////////////////////////////////////////// -->
          <!-- /////////////////////////////////////////////////////////////// -->
          <!-- /////////////////////////////////////////////////////////////// -->










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

                <div class="pr-xl-4"><a class="footer-brand" href="index.html"><h1 style="color: #ffffff;">Wagabat</h1></a>
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
            img.setAttribute('src' , 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ficon-library.com%2Ficon%2Favatar-icon-images-4.html&psig=AOvVaw1C0lmG1D6JHoKmq9jAuxMd&ust=1614599422091000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCxvdzBjO8CFQAAAAAdAAAAABAD');

        }

    });













</script>
</body>
</html>
