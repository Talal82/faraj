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
                                    <li> <a href="{{ route('careers') }}" class="{{ Request::route()->getName() == 'careers' ? 'active': '' }}"> Career </a> </li>
                                    <li> <a href="{{ route('privacy-policy') }}"class="{{ Request::route()->getName() == 'privacy-policy' ? 'active': '' }}"> Privacy Policy </a> </li>
                                    @guest
                                    <li> <a href="{{ route('login') }}"class="{{ Request::route()->getName() == 'login' ? 'active': '' }}"> Log in</a> </li>
                                    <li> <a href="{{ route('register') }}"class="{{ Request::route()->getName() == 'register' ? 'active': '' }}"> Sign up</a> </li>
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
                                    <li><a href="{{ route('index') }}" class="{{ Request::route()->getName() == 'index' ? 'active': '' }}">Home</a></li>
                                    <li><a href="{{ route('about') }}" class="{{ Request::route()->getName() == 'about' ? 'active': '' }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}" class="{{ Request::route()->getName() == 'services' ? 'active': '' }}">Our Services</a></li>
                                    <li><a href="{{ route('holding-companies') }}"  class="{{ Request::route()->getName() == 'holding-companies' ? 'active': '' }}">Holding Companies</a></li>
                                    <li><a href="{{ route('multimedia') }}" class="{{ Request::route()->getName() == 'multimedia' ? 'active': '' }}">Multimedia</a></li>
                                    <li><a href="{{ route('clients') }}"  class="{{ Request::route()->getName() == 'clients' ? 'active': '' }}">Clients</a></li>
                                    <li><a href="{{ route('contact') }}" class="{{ Request::route()->getName() == 'contact' ? 'active': '' }}">Contact Us</a></li>
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