<nav class=" col-lg-12 navbar navbar-expand-lg navbar-dark ftco_navbar p-2  position-fixed ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('web.home')}}"><img src="/assets/photos/imgs/takeaway-catering-logo-large.png" alt="logo" width="70px" height="70px" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> <i class="fa fa-bars"></i> </span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('web.home')}}" class="nav-link activelink">Home</a></li>
                <li class="nav-item"><a href="{{route('web.about')}}" class="nav-link ">about us</a></li>
                <li class="nav-item hover-this"><a href="{{route('web.howItWork')}}" class="nav-link">How It Works</a></li>
                <li class="nav-item hover-this"><a href="{{route('web.faqs')}}" class="nav-link">FAQS</a></li>
                <li class="nav-item hover-this"><a href="{{route('web.contact')}}" class="nav-link">Contact</a></li>

                @if(auth()->guard('web')->user()))
                <li class="nav-item hover-this"><a href="{{route('web.logout')}}" class="nav-link "> logout </a></li>
                <li class="nav-item hover-this"><a href="{{route('web.userProfile')}}" class="nav-link "> Profile </a></li>
                @elseif(auth()->guard('restaurant')->user())
                    <li class="nav-item hover-this"><a href="{{route('web.logoutr')}}" class="nav-link "> logout </a></li>
                    <li class="nav-item hover-this"><a href="{{route('web.restaurantProfile')}}" class="nav-link "> Profile </a></li>
                @else
                    <li class="nav-item hover-this"><a href="{{route('web.login')}}" class="nav-link  "> logIn/signUp </a></li>
                @endif




            </ul>
        </div>
    </div>
</nav>
