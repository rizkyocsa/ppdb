<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        SD Negeri Selajambe 4
    </title>
    <link rel="shortcut icon" href="{{ asset('homes/images/favicon.png') }}" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('homes/css/icons.min.css') }}">

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('homes/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('homes/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/responsive.css') }}">
</head>

<body class="main-auth" style="background-image: url( {{asset('image/bg.png')}} ); background-attachment: fixed;
  background-size: 100% 100%;  ">

    <!-- SIDEBAR -->
    <!-- <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="{{ asset('homes/images/logo.png') }}" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                @yield('sidebar')
            </ul>                                    
        </div>
    </div> -->
    <!-- END SIDEBAR -->
    <!-- Main Header -->
    <div class="main-header-auth">
            <div class="main-title">
                @yield('title')
            </div>
        </div>
    </div>
    <!-- End Main Header -->
    <!-- MAIN CONTENT -->

    <div class="main-content-auth" style="">
    @yield('content')
    </div>
    <!-- END MAIN CONTENT -->

    <!-- <div class="overlay"></div> -->

    <!-- SCRIPT -->
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
    <script src="{{ asset('homes/libs/password/pass-addon.init.js')}}"></script>

    <!-- APP JS -->
    <script src="{{ asset('homes/js/main.js') }}"></script>
    <script src="{{ asset('homes/js/dashboard.js') }}"></script>
    <script src="{{ asset('homes/js/shortcode.js') }}"></script>
    <script src="{{ asset('homes/js/pages/dashboard.js') }}"></script>


</body>

</html>