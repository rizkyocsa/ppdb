<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Protend - Project Management Admin Dashboard HTML Template
    </title>
    <link rel="shortcut icon" href="{{ asset('homes/images/favicon.png') }}" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('homes/css/bootstrap.min.css') }}css/icons.min.css">

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('homes/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('homes/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/responsive.css') }}">
</head>

<body class="sidebar-expand">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="./images/logo.png" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        
        <!-- SIDEBAR MENU -->
        
        <div class="simlebar-sc" data-simplebar>
        @if($user->roles_id == 1)
            <ul class="sidebar-menu tf"> 
                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.registrasi') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>Registrasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.mahasiswa') }}">
                        <i class='bx bx-calendar'></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>      
            </ul>
        @endif
        @if($user->roles_id == 2)
            <ul class="sidebar-menu tf">
                <li>
                    <a href="{{ route('mahasiswa.home') }}">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
        @endif
        @if($user->roles_id == 3)
            <ul class="sidebar-menu tf">
                <li>
                    <a href="{{ route('home') }}">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.pendaftaran') }}">
                        <i class='bx bxs-home'></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>
            </ul>    
        @endif    
        </div>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

        <!-- Main Header -->
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="main-title">
                @yield('title')
            </div>
        </div>

        <div class="d-flex align-items-center">

            <!-- App Search-->
            

            
            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('homes//images/profile/profile.png') }}"
                            alt="Header Avatar">
                        <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">
                            {{{Auth::user()->name }}}
                            </span> 
                            <span class="d-block mt-7" >
                            @if ($user->roles_id == 1)
                                Admin
                            @elseif ($user->roles_id == 2)
                                Mahasiswa
                            @else
                                User
                            @endif
                            </span>
                        </span>
                            
                        <i class='bx bx-chevron-down'></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span>My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span>Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i><span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Header -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

    <!-- MAIN CONTENT -->
    <div class="main">
        @yield('content')
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->

    <!-- Plugin -->

    <!-- APEX CHART -->
    <script src="{{ asset('homes/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('homes/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('homes/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('homes/libs/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('homes/libs/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('homes/libs/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('homes/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('homes/libs/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('homes/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- APP JS -->
    <script src="{{ asset('homes/js/main.js') }}"></script>
    <script src="{{ asset('homes/js/dashboard.js') }}"></script>
    <script src="{{ asset('homes/js/shortcode.js') }}"></script>
    <script src="{{ asset('homes/js/pages/dashboard.js') }}"></script>
    
    @yield('script')
</body>

</html>