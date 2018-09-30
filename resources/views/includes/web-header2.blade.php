<header class="header header2">
    <div class="hdr-wrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('images/logo-faraj.png') }}" width="" height="" alt="" title="" class="img-fluid"/>
                        </a>
                    </div>
                </div><!-- logo -->

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="top1">
                                <ul>
                                    <li> <a href="{{ route('careers') }}"> Career </a> </li>
                                    <li> <a href="{{ route('privacy-policy') }}"> Privacy Policy </a> </li>
                                    @guest
                                    <li> <a href="{{ route('login') }}"> Log in</a> </li>
                                    <li> <a href="{{ route('register') }}"> Sign up</a> </li>
                                    @else
                                    <li> <a href="{{ route('home') }}"> Dashboard</a> </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div><!-- topbar  -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <menu class="main-manu">
                                <ul>
                                    <li><a href="{{ route('index') }}" class="active">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Our Services</a></li>
                                    <li><a href="{{ route('holding-companies') }}">Holding Companies</a></li>
                                    <li><a href="{{ route('multimedia') }}">Multimedia</a></li>
                                    <li><a href="{{ route('clients') }}">Clients</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </menu>
                        </div>
                    </div><!-- main navbar -->

                    <div id="nav-icon2">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div><!-- hamburger icon -->

                </div><!-- topbar + navigtion bar -->

            </div>
        </div>
    </div>    
</header>