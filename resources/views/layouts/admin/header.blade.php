<div class="main-header" data-background-color="purple">

    <!-- Logo Header -->
    <div class="logo-header">

        <a href="#" class="logo">
            <img src="{{ asset('templates/assets/images/footer-logo-2.png') }}" alt="navbar brand" class="navbar-brand" width="100">
        </a>

        <button class="navbar-toggler sidenav-toggler ml-auto" type="button">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>

        <button class="topbar-toggler more">
            <i class="fa fa-ellipsis-v"></i>
        </button>

        <div class="navbar-minimize">
            <button class="btn btn-minimize btn-rounded">
                <i class="fa fa-bars"></i>
            </button>
        </div>

    </div>
    <!-- End Logo Header -->


    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg">

        <div class="container-fluid">

            <!-- Search -->
            {{-- <div class="collapse" id="search-nav">
                <form class="navbar-left navbar-form nav-search mr-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-search pr-1">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </div>
                        <input type="text" placeholder="Search ..." class="form-control">
                    </div>
                </form>
            </div> --}}

            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <!-- Search Toggle -->
                <li class="nav-item toggle-nav-search hidden-caret">
                    <a class="nav-link" data-toggle="collapse" href="#search-nav">
                        <i class="fa fa-search"></i>
                    </a>
                </li>

                <!-- Messages -->
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>
                    </a>

                    <ul class="dropdown-menu messages-notif-box animated fadeIn">
                        <li>
                            <div class="dropdown-title">Messages</div>
                        </li>
                        <li>
                            <div class="notif-center">
                                <a href="#">
                                    <div class="notif-img">
                                        <img src="{{ asset('admins/assets/img/jm_denis.jpg') }}">
                                    </div>
                                    <div class="notif-content">
                                        <span class="subject">Jimmy Denis</span>
                                        <span class="block">How are you?</span>
                                        <span class="time">5 minutes ago</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Notifications -->
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                        <span class="notification">4</span>
                    </a>

                    <ul class="dropdown-menu notif-box animated fadeIn">
                        <li>
                            <div class="dropdown-title">Notifications</div>
                        </li>
                        <li>
                            <div class="notif-center">
                                <a href="#">
                                    <div class="notif-icon notif-primary">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="notif-content">
                                        <span class="block">New user registered</span>
                                        <span class="time">5 minutes ago</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Profile -->
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">

                        <div class="avatar-sm">
                            <img src="{{ asset('admins/assets/img/profile.jpg') }}" class="avatar-img rounded-circle">
                        </div>

                    </a>

                    <ul class="dropdown-menu dropdown-user animated fadeIn">

                        @if (Auth::check())
                            <li>
                                <div class="user-box">

                                    <div class="avatar-lg">
                                        <img src="{{ asset('admins/assets/img/profile.jpg') }}"
                                            class="avatar-img rounded">
                                    </div>

                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>

                                        <a href="#" class="btn btn-rounded btn-danger btn-sm">
                                            View Profile
                                        </a>
                                    </div>

                                </div>
                            </li>
                        @endif

                        <li>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">My Profile</a>

                            @if (Auth::check())
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display:none;">
                                    @csrf
                                </form>
                            @endif

                        </li>

                    </ul>
                </li>

            </ul>

        </div>
    </nav>
    <!-- End Navbar -->

</div>
