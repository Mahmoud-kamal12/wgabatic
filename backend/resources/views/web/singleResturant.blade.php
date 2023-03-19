 <!-- ///////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////// -->
            <div class="col-lg-4 col-md-6 mt-5 mb-5">
                <div style="background-image: url({{(asset($restaurant->cover))}});" class="resto-img rounded-0">
                    <div class=" open-sight ">
                        OPEN
                        <div class="bookmarkRibbon"></div>
                    </div>
                    <!--////  -->
                    <div class="float-left">
                        <i class=" ml-1 fa fa-heart icon-restu1"></i>
                    </div>

                    <div class="  d-inline-block">
                        <img class=" resto-img-circle img-fluid bg-white rounded-circle border border-danger" src="{{(asset($restaurant->logo))}}" width="80px" height="80px" alt="">
                    </div>

                </div>
                <div>
                    <div class="card-body bg-white " >
                        <br><br>
                        <h5 class="font-weight-bolder">{{$restaurant->name}}</h5>
                        <p class="d-block" > Resturant Phone : {{$restaurant->phone}}</p>
                        <p class="d-block" > table reservation : {{$restaurant->table_res}}</p>
                        
                        <!-- <p class="d-inline-block">Min Order</p> <span class="h4 ml-3 font-weight-bolder ">15.00 LE </span> -->
                    </div>
                    <!-- /////////////////// -->
                    <div style="height: 68px;" class="card-body d-block  bg-light p-2  ">
                        <div class=" float-left " >
                            <img src="{{(asset($restaurant->logo))}}" width="50px" height="50px" alt="">
                            <span style="font-size: 12px;" ><span>{{$restaurant->country}}</span> , <span>{{$restaurant->city}}</span></span>
                        </div>
                        <div class="float-right ml-3">
                            <a href="{{route("web.ordering")}}">  <button class="d-inline-block float-right resto-butn  btn text-light rounded-pill" > Order Now </button> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////////////////////// -->
            <!-- ///////////////////////////////////////////////////////////////////////// -->
