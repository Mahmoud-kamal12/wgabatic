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
    <!-- <link rel="stylesheet" href="public/css/plugins/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/css/plugins/jquery.timepicker.css">
    <link rel="stylesheet" href="public/css/plugins/nice-select.css"> -->

    <!-- <link rel="stylesheet" href="css/plugins/owl.theme.default.min.css"> -->
    <!-- google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Chango&family=Griffy&display=swap" rel="stylesheet"> -->
    <!-- main Styles -->
    <link rel="stylesheet" href="/assets/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/colors/color.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/feature.css">
    <link rel="stylesheet" href="/assets/css/new-preloader.css">
    <title> | order | </title>

</head>
<body>

<!-- ? Preloader Start -->
<!-- <div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text ">
              <img src="../public/photos/new/preloader.gif" alt="loader">
          </div>
      </div>
  </div>
</div> -->


<section class="ordaring-page-header">

    @include('web.nav')

      <div>
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-sm-12 row  welcomeTexte">
                    <div class="  col-lg-12 col-md-12 col-sm-12 ">
                      <div class=" d-flex resturant-logo">
                        <div class=" p-3 ">
                            <img class="" src="{{asset($restaurant->logo)}}" width="80" height="80"  alt="">
                        </div>
                         <div class=" p-3 text-light">
                            <h4 class="text-left">{{$restaurant->name}}</h4>
                          <p>  <i class="fas fa-pizza-slice"></i> Hot Dogs, Pizza & Stakes</p>
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
<section class="order mt-5">
  <div class="container ">
    <div class="row">
      <div class="col-lg-8 menu-inner">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item ">
            <a class="nav-link tab-a active" data-toggle="tab" href="#menu" role="tab"> <i class="fa fa-hamburger"></i> Menu</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link tab-a" data-toggle="tab" href="#Reviews" role="tab"> <i class=" fas fa-comment-dots "></i> Reviews</a>


          </li>
            @if($restaurant->table_status)
                  <li class="nav-item ">
                    <a class="nav-link tab-a" data-toggle="tab" href="#Booking" role="tab">  <i class="fa fas fa-table"></i> Book a Table</a>
                  </li>
            @endif
          <li class="nav-item ">
            <a class="nav-link tab-a" data-toggle="tab" href="#Info" role="tab">  <i class="fas fa-info-circle "></i> Restaurant Info</a>
          </li>
        </ul>
        <!-- Tab panes -->


        <div class="tab-content col-lg-12 p-0 m-0">
          <div class="tab-pane p-3 active" id="menu" role="tabpanel">

            <!-- <ul class="  text-center row" id="to-top">
              <li class=" pl-4"> <a class="text-danger" href="#pizza">pizza</a> </li>
              <li class=" pl-4"> <a class="text-danger" href="#meat">meat</a> </li>
              <li class=" pl-4"> <a class="text-danger" href="#kabab">kabab</a> </li>
              <li class=" pl-4"> <a class="text-danger" href="#fish">fish</a> </li>
              <li class=" pl-4"> <a class="text-danger" href="#chicken">chicken</a> </li>
            </ul> -->
           <hr>
           <article style="box-sizing: border-box;" class="p-1">
            <!-- <div class="menu-title" id="pizza">
              <h4 id="pizza"> Pizza  <span> <a class="arrow-top-link" href="#to-top">   </a> </span>  </h4>
              <span style="font-size: 14px; color: #a9a9a9;">Cheese, tomatoes, mushrooms, garlic, mussels, cockles, olives</span>
            </div> -->
            <ul>
              <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
              <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
                @foreach($restaurant->meals as $meal)
                    <li class="mt-4  menu ">
                      <div class="single-menu d-flex">
                          <!-- <img src="/assets/photos/order_img.png"  alt=""> -->
                          <div class="menu-content ml-3  ">
                              <h4 class="meal_name">{{$meal->name}}  </h4> 
                              <span >{{$meal->description}}</span>
                          </div>
                          <div  class="pl-3 ml-auto">
                              <span class="meal_price">{{$meal->price}} .LE</span> <br>
                              <button data-mealid="{{$meal->id}}" id="" type="button" class="order-btn Add_meal"> <i class="fa fa-plus text-danger"></i> </button>
                          </div>
                      </div>
                  </li>
                @endforeach

              <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
              <!-- ////////////////////////////////////////////////////////////////////////////////////// -->


            </ul>
          </article>


          </div>
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->


          <div class="tab-pane p-3" id="Reviews" role="tabpanel">
            <article class="p-3">
              <h5>Customer Reviews For Kfc – Kentucky</h5>
              <div class="d-flex align-items-center justify-content-center mt-5 ">
                <div>
                  <i style="font-size: 50px;" class=" fas fa-comment "></i>
                </div>
                <div class="pl-3">
                  <h6 style="font-size:16px; font-weight: 600;">Write your own reviews</h6>
                  <form action="{{route('web.restaurantProfile.addreview')}}">
                    <input type="text" name="body">
                      <input type="hidden" name="resturant_id" id="resturant_id" value="{{$restaurant->id}}">
                      <input value="submit" type="submit">
                  </form>
                  <p style="font-size:14px; color: #f30928;">Only customers can write reviews</p>
                </div>
              </div>

            </article>
          </div>

          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->

          <div class="tab-pane p-3" id="Booking" role="tabpanel">
            <article class="p-3">
              <h5 style="font-weight: 600;">Book This Restaurant</h5>
              <p style="color: #515151;">All kinds of dining experiences are waiting to be discovered.
                Check out the best restaurants and Book Using following Form.</p>


                <form class="form mt-5" id="bookingform">
                  <div class=" form-row mt-5 ">
                       <!-- ////////////////////////// -->
                       <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                          <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder=" name" name="name">
                        </div>
                  <!-- ////////////////////////// -->


                  <!-- ////////////////////////// -->
                      <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                          <input type="email" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="EMAIL" name="email">
                        </div>
                  <!-- ////////////////////////// -->

                  <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                    <select required style="font-size: 14px;" class="form-select col-lg-12 p-2" aria-label="Default select example" name="table_id">
                      <option selected> avilable tables </option>
                        @foreach($restaurant->tables as $meal)
                            <option value="{{$meal->id}}"> table {{$meal->number}} capacity {{$meal->cap}} price {{$meal->price}} </option>
                        @endforeach

                    </select>                    </div>
                <!-- ////////////////////////// -->

                        <div class=" col-lg-6 col-md-6 col-sm-12 p-4  ">
                          <input type="text" class="col-lg-12 p-2" id="validationCustom" value="" required placeholder="phone" name="phone">
                        </div>
                  <!-- ////////////////////////// -->

                    <div class=" col-lg-6 col-md-6 col-sm-12 p-4">
                        <label> reservation   day  </label>
                        <input type="date" class="col-lg-12 p-2 mb-3" id="validationCustom" value="" required placeholder="retype " name="day">
                    </div>


                  <!-- ////////////////////////// -->
                      <div class=" col-lg-6 col-md-6 col-sm-12 p-4">
                          <label> from </label>
                          <input type="time" class="col-lg-12 p-2 mb-3" id="validationCustom" value="" required placeholder=" from " name="from">
                      </div>


                      <!-- ////////////////////////// -->
                      <div class=" col-lg-6 col-md-6 col-sm-12 p-4">
                          <label> to </label>
                          <input type="time" class="col-lg-12 p-2 mb-3" id="validationCustom" value="" required placeholder=" to " name="to">
                      </div>


                      <!-- ////////////////////////// -->


                    <div class=" col-lg-12 col-md-12 col-sm-12 p-4">
                      <textarea name="extra" id="" class="col-lg-12 p-2 mb-3" cols="20" rows="5" required placeholder="your instructions" ></textarea>
                      <!-- <input type="datetime-local"  id="validationCustom" value="" required placeholder="retype password"> -->
                    </div>

                  </div>
                  <!-- ////////////////////////////////////////// -->

                  <button class="btn btn-danger signup-btun  p-1 ml-3 col-lg-2 col-md-2 col-sm-2 mb-3 " id="bookingbtn" type="submit">Submit</button>

                </form>





            </article>
          </div>
          <!-- ////////////////////////////////////////// -->
          <!-- ////////////////////////////////////////// -->

          <div class="tab-pane p-3" id="Info" role="tabpanel">
            <article class="p-3">
              <h5 style="font-weight: 600;" >Overview Kfc – Kentucky</h5>
              <p style="color: #515151;" class="mt-4">{{$restaurant->description}}</p>

              <!-- <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d440907.121796829!2d31.1893790616218!3d30.30582012946876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457fc022cc67e9f%3A0x37cd2c63453c420c!2sKFC!5e0!3m2!1sen!2seg!4v1611834877746!5m2!1sen!2seg"
                 width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div> -->

              <div class="row mt-5" >
                <div class="col-lg-6">
                  <h5 class="mb-3" style="font-weight: 600;" >{{$restaurant->name}}</h5>
                  <p style="color: #515151;" >{{$restaurant->description}}</p>
                  <p style="color: #515151;" > <i class="fa fa-phone-volume"></i>  {{$restaurant->phone}}</p>
                  <p style="color: #515151;" > <i  class="fa fa-envelope"></i> <a style="color: #f30928;" href="#">{{$restaurant->email}}</a></p>
                </div>



                 <!-- ////////////////////////////////// -->
            <div class="col-lg-6">
              <!-- <h5 style="font-weight: 600;">OPEN HOURS</h5> -->
              <!-- <ul class="open-hours mt-1">
                  <li class="d-flex"><span class="days" >Monday</span><span class="time">09:00 am - 09:30 pm</span></li>
                  <li class="d-flex"><span class="days" >Tuesday</span><span class="time">09:00 am - 09:45 pm</span></li>
                  <li class="d-flex"><span class="days" >Wednesday</span><span class="time">09:00 am - 04:15 pm</span></li>
                  <li class="d-flex"><span class="days" >Thursday</span><span class="time">09:00 am - 07:45 pm</span></li>
                  <li class="d-flex"><span class="days" >Friday</span><span class="time">06:00 am - 11:00 pm</span></li>
                  <li class="d-flex"><span class="days" >Saturday</span><span class="time">9:00am - 02:00pm</span></li>
                  <li class="d-flex"><span class="days" >Sunday</span><span class="time"> 11:00 am - 5:00 pm</span></li>
              </ul> -->





          </div>
      <!-- ////////////////////////////////// -->
              </div>
            </article>
          </div>
        </div>
      </div>
      <!-- //////////////////////////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////// -->


    <div class="col-lg-4 p-4">
      <article class="bg-white col-lg-10 p-3 reset">
        <div class="reset-body">
          <h5 class="reset-title"> <i class="fa fa-shopping-basket"></i>  Your Order </h5>
          <hr>

          <div style="font-size: 13px; color: #999BA3;" class="p-3 bg-light mb-4">
            <p class="text-danger"> we wish tou a happy meal </p>
          </div>
          <hr>
          <!-- ///////////////////////////////////////////// -->
          <!-- ///////////////////////////////////////////// -->
      <form action="">

          <div class="meal-info  p-1 ">

            <ul class="item-list"></ul>
            <div class="total-price"></div>
               




            <p class="mt-5">type you extra here</p>
            <input style="font-size: 12px; padding: 7px; width: 100%;" type="text"  name="extra" id="extra" >

          </div>
          <hr>
          <!-- ///////////////////////////////////////////// -->
          <!-- ///////////////////////////////////////////// -->
          <div class="mt-2">
              <div class="form-row">

                <!-- //////////////////// -->
                <div class="col-lg-12 row p-3 text-center">

                      <p class="">add your address</p>
                      <input style="font-size: 12px; padding: 7px; width: 100%;" type="text"  name="address" id="address" >
                </div>
                <!-- //////////////////// -->
              </div>

              <div class="text-center mt-3">
                <button class="btn btn-danger signup-btun  p-1  col-lg-12 col-md-12 col-sm-12 " type="submit" id="confirmbtn">confirm order</button>
              </div>

            </div>
          </div>

        </article>
      </div>

    </form>


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
        <img class=" doctors-img-pre  ml-auto img-fluid img-responsive" src="../public/photos/imgs/takeaway-catering-logo-large.png" width="100px" height="100px" alt="doctors">
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
            <img class="img-fluid img-responsive" src="../public/photos/footer-img-300x134.png" alt="">
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

  <!-- main Styles -->
<script src="/assets/js/custom.js"></script>
    <script>






var meals = [];

$(document).on("click" , "#confirmbtn",function (e) {
    e.preventDefault()

    $.ajax({
        type: "get",
        url: "{{route("web.addOrder")}}",
        data: {
            restaurant_id: document.getElementById("resturant_id").value,
            meals: meals,
            address: document.getElementById("address").value,
            extra: document.getElementById("extra").value
        },
        beforeSend:function(){
          $('#confirmbtn').text('')
          $('#confirmbtn').prop('disabled', true);
          $('#confirmbtn').append(`
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          `)
        },
        success: function (response) {
            alert("success")
            $("#address").val("");
            $("#extra").val("");
        },
        error: function(data){
          console.error(JSON.parse(data));
        },
        complete:function(){
       

          $('#confirmbtn').text('')
          $('#confirmbtn').prop('disabled', false);
          $('#confirmbtn').text('confirm order')

          
        },
    });
})


document.getElementById('bookingform').addEventListener('submit', (e) => {
    e.preventDefault()
    var data = $('#bookingform').serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});
    data['restaurant_id'] = document.getElementById("resturant_id").value
    data = Object.assign({}, data);
    console.log(data)
    $.ajax({
        type: "get",
        url: "{{route("web.addBooking")}}",
        data: data,
        beforeSend:function(){
            // $('#confirmbtn').text('')
            // $('#confirmbtn').prop('disabled', true);
            // $('#confirmbtn').append(`
            // <div class="spinner-border" role="status">
            //   <span class="sr-only">Loading...</span>
            // </div>
            // `)
        },
        success: function (response) {
            alert("success")
            $("input[name='name']").val("");
            $("input[name='email']").val("");
            $("input[name='phone']").val("");
            $("input[name='day']").val("");
            $("input[name='from']").val("");
            $("input[name='to']").val("");
            $("input[name='extra']").val("");



        },
        error: function(data){
            console.error(JSON.parse(data));
        },
        complete:function(){
            // $('#confirmbtn').text('')
            // $('#confirmbtn').prop('disabled', false);
            // $('#confirmbtn').text('confirm order')
        },
    });
});








const plusButtons = document.querySelectorAll('.Add_meal');
  const itemList = document.querySelector('.item-list');
  const totalPrice = document.querySelector('.total-price');

  let total = 0;

  plusButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const mealName = button.parentElement.parentElement.querySelector('.meal_name').textContent;
      const mealPrice = parseFloat(button.parentElement.querySelector('.meal_price').textContent);

      const meal_id = button.dataset.mealid;

      if(meals.indexOf(meal_id) === -1) {
        meals.push(meal_id);
        const newItemHTML = `
          <li id="limealid${meal_id}" style="list-style:none">
            <div class="d-flex">
              <span class="name">${mealName} <span id="countid${meal_id}" data-count="1"> (1) </span> </span>
              <span class="price ml-auto">$${mealPrice.toFixed(2)} <i data-mealid="${meal_id}" data-mealpriceid=${mealPrice} class="ml-3 fa fa-times-circle delete-meal"></i></span>
            </div>
          </li>
        `;

        itemList.insertAdjacentHTML('beforeend', newItemHTML);

      }else{
        let span = $(`#countid${meal_id}`);
        let count = parseInt(span.data("count")) + 1 ;
        span.data("count",count)
        span.text(`(${count})`) 
      }

      total += mealPrice;
      totalPrice.textContent = `Total Price: $${total.toFixed(2)}`;

      
     
    });
  });


  
$(document).on("click",".delete-meal",function(){
      const meal_id = $(this).data("mealid");
      const mealpriceid = $(this).data("mealpriceid");

        let span = $(`#countid${meal_id}`);
        let count = parseInt(span.data("count")) ;


      document.getElementById(`limealid${meal_id}`).remove();
      const index = meals.indexOf(meal_id);
      meals.splice(index, 1);
      console.log(count);
      total -= (mealpriceid * count)
     
      totalPrice.textContent = `Total Price: $${total}`;


})


</script>








