<!--========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('images/'.Auth::user() -> image) }}" alt="user-img" title="{{ Auth::user() -> first_name}} {{Auth::user() -> last_name }}" class="rounded-circle img-thumbnail img-responsive">
                <div class="user-status online"><i class="mdi mdi-adjust"></i></div>
            </div>
            <h5 style="margin-top: 15px;"><a href="#">{{ Auth::user() -> first_name}} {{Auth::user() -> last_name }}</a> </h5>
            <ul class="list-inline">
                {{-- <li class="list-inline-item">
                    <a href="#" >
                        <i class="mdi mdi-settings"></i>
                    </a>
                </li> --}}

                <li class="list-inline-item">
                    <a href="#" class="text-custom" title="Logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-power"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>

                {{-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i> <span> CMS</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about.index') }}">About</a></li>
                        <li class="{{ Route::currentRouteName() =='office.create' ? 'active' : '' }}"><a href="{{ route('office.index') }}">offices</a></li>
                        <li><a href="{{ route('service.index') }}">Services</a></li>
                        <li><a href="{{ route('project.index') }}">Projects</a></li>
                        <li><a href="{{ route('banner.index') }}">Banners</a></li>
                        <li><a href="{{ route('benefit.index') }}">Benefits</a></li>
                        <li><a href="{{ route('certificate.index') }}">Certificates</a></li>
                        <li><a href="{{ route('gallery.index') }}">Gallerys</a></li>
                        <li><a href="{{ route('info.index') }}">General Info</a></li>
                        <li><a href="{{ route('value.index') }}">Values</a></li>
                    </ul>
                </li> --}}

                @can('manage-users')
                <li>
                    <a href="{{ route('users.index') }}" class="waves-effect"><i class="fa fa-user"></i> <span> User Management</span> </a>
                </li>
                @endcan

                @can('manage-roles')
                <li>
                    <a href="{{ route('roles.index') }}" class="waves-effect"><i class="mdi mdi-texture"></i> <span> Roles Management</span> </a>
                </li>
                @endcan

                @can('manage-services')
                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Services</span> </a>
                </li>
                @endcan

                @can('manage-careers')
                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Careers</span> </a>
                </li>
                @endcan


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-settings"></i> <span> Settings</span> {{-- <span class="menu-arrow"></span> --}}<i class="fas fa-long-arrow-alt-down"></i></a>
                    <ul class="list-unstyled">
                        {{-- <li><a href="{{ route('settings.index') }}">General Site Settings</a></li> --}}
                        <li><a href="{{ route('account.index') }}">Account Settings</a></li>
                    </ul>
                </li>


            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
            <!-- Left Sidebar End